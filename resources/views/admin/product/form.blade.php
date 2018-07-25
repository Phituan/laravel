<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Pig Seller" href="{{{ asset('favicon.ico') }}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <title>Admin trang web thực phẩm hàng đầu Việt Nam</title>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Nhập thông tin của thực phẩm</h1>
    </div>
</div>
<form action="/admin/product/store" method="POST">
    {{csrf_field()}}
    <div class="container">
        <label>Tên</label>
        <input type="text" name="name">
    </div>
    <div class="container">
        <label>Giá</label>
        <input type="text" name="price">
    </div>
    <div class="container">
        <label>Chủng loại</label>
        <select name="categoryId">
            <option value="1">Rau</option>
            <option value="2">Củ</option>
            <option value="3">Thịt</option>
            <option value="4">Hoa quả</option>
        </select>
    </div>
    <div class="container">
        <label>Mô tả</label>
        <input type="text" name="description">
    </div>
    <div class="container">
        <label>Ảnh đại diện</label>
        <input type="text" name="image">
    </div>
    <div class="container">
        <input type="submit" value="Lưu thông tin">
        <input type="reset" value="Làm lại">
    </div>
</form>
</body>
</html>