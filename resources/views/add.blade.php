<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/danhmuc/them" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên Danh Mục</label>
                            <input class="form-control" name="CategoryName" placeholder="Tên Sản Phẩm" />
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
                        <button type="reset" class="btn btn-default">Làm Mới</button>
                        </form>
                </div>
            </div>
                <!-- /.container-fluid -->
        </div>
    </div>

@endsection
</body>
</html>