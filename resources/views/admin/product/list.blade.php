<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Pig Seller" href="{{{ asset('favicon.ico') }}}">
    <title>Admin trang web bán thực phẩm </title>
</head>
<body>
<h1>Danh sách sản phẩm+</h1>
    <ul>
        @foreach($products_in_view as $product)
            <div class="row">
                <div class="col">
                    <div class="card">
                        <li>
                            {{$product -> name}}
                            <img src="{{$product -> image}}" alt="" style="width: 150px">
                            <a href="/admin/product/edit/{{$product -> id}}">Edit</a>
                        </li>
                    </div>
                </div>
            </div>
        @endforeach
    </ul>
</div>

</body>
</html>