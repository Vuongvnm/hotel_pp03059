@extends('layouts.app')

@section('content')
    <h1>Thêm Mới Khách Sạn</h1>
    <form action="{{ route('hotels.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="hotel_name">Tên Khách Sạn:</label>
            <input type="text" name="hotel_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="location">Địa Điểm:</label>
            <input type="text" name="location" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="rating">Đánh Giá:</label>
            <input type="number" name="rating" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Hình Ảnh:</label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
