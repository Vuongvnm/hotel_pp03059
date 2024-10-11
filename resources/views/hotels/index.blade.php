@extends('layouts.app')

@section('content')
    <h1>Danh Sách Khách Sạn</h1>
    <a href="{{ route('hotels.create') }}" class="btn btn-primary mb-3">Thêm Mới Khách Sạn</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>STT</th>
                <th>Tên Khách Sạn</th>
                <th>Địa Điểm</th>
                <th>Đánh Giá</th>
                <th>Hình Ảnh</th> <!-- Thêm cột Hình Ảnh -->
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $hotel->hotel_name }}</td>
                    <td>{{ $hotel->location }}</td>
                    <td>{{ $hotel->rating }}</td>
                    <td>
                        @if ($hotel->image)
                            <img src="{{ asset('storage/' . $hotel->image) }}" alt="{{ $hotel->hotel_name }}" width="100" height="100" class="img-thumbnail">
                        @else
                            <span>Chưa có ảnh</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('hotels.edit', $hotel->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
