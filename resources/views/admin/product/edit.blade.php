<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Pig Seller" href="{{{ asset('favicon.ico') }}}">
    <title>Admin trang web bán thực phẩm</title>
</head>
<body>
<h1>Nhập thông tin của sản phẩm</h1>
<form action="/admin/product/update" method="POST">
    <input type="hidden" name="id" value="{{$product_in_view -> id}}">
    {{csrf_field()}}
    <div>
        <label>Tên</label>
        <input type="text" name="name" value="{{$product_in_view -> name}}">
    </div>
    <div>
        <label>Giá</label>
        <input type="text" name="price" value="{{$product_in_view -> price}}">
    </div>
    <div>
        <label>Chủng loại</label>
        <select name="categoryId">
            <option value="1" {{$product_in_view -> categoryId == 1 ? 'selected' : ''}}>Rau</option>
            <option value="2" {{$product_in_view -> categoryId == 2 ? 'selected' : ''}}>Củ</option>
            <option value="3" {{$product_in_view -> categoryId == 3 ? 'selected' : ''}}>Thịt</option>
            <option value="4" {{$product_in_view -> categoryId == 4 ? 'selected' : ''}}>Hoa quả</option>
        </select>
    </div>
    <div>
        <label>Mô tả</label>
        <input type="text" name="description" value="{{$product_in_view -> description}}">
    </div>
    <div>
        <label>Ảnh đại diện</label>
        <input type="text" name="image" value="{{$product_in_view -> image}}">
        <img src="{{$product_in_view -> image}}" alt="" style="width:200px;">
    </div>
    <div>
        <input type="submit" value="Lưu thông tin">
        <input type="reset" value="Làm lại">
    </div>
</form>
</body>
</html>