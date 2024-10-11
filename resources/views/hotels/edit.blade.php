@extends('layouts.app')

@section('content')
    <h1>Chỉnh Sửa Khách Sạn</h1>
    <form action="{{ route('hotels.update', $hotel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="hotel_name">Tên Khách Sạn:</label>
            <input type="text" name="hotel_name" class="form-control" value="{{ $hotel->hotel_name }}" required>
        </div>
        <div class="form-group">
            <label for="location">Địa Điểm:</label>
            <input type="text" name="location" class="form-control" value="{{ $hotel->location }}" required>
        </div>
        <div class="form-group">
            <label for="rating">Đánh Giá:</label>
            <input type="number" name="rating" class="form-control" step="0.01" value="{{ $hotel->rating }}" required>
        </div>
        <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea name="description" class="form-control">{{ $hotel->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Hình Ảnh:</label>
            <input type="file" name="image" class="form-control-file">
            @if ($hotel->image)
                <img src="{{ asset('storage/' . $hotel->image) }}" alt="Hotel Image" width="100" class="mt-2 img-thumbnail">
            @else
                <span>Chưa có ảnh</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </form>
@endsection
