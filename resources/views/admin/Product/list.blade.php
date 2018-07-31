<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<h1 class="ml-2 mt-1">List products</h1>

<div class=" mt-5 mb-3 ml-3">
    <div style="float: right; margin-bottom: 20px; margin-right: 50px">
        <a href="/admin/product/create"  style="margin-left: 10px;"><i class="far fa-plus-square"></i>Create</a>
    </div>
    <form action="" class="form-inline">
        <div class="form-group">
            <b style="font-size: 20px;"><label class="mr-3">Category</label></b>
            <label>
                <select name="categoryId" class="form-control mr-3">
                    <option value="0">All category</option>
                    @foreach($categories as $item)
                        <option value="{{$item->id}}" {{$categoryId == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                    @endforeach
                </select>
            </label>
            <input type="submit" value="Filter" class="btn btn-outline-success">
        </div>
    </form>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    @foreach($list_obj as $item)
        <tbody>
        <tr>
            <th scope="row">{{$item -> id}}</th>
            <td>{{$item->name}}</td>
            <td><img src="{{$item -> image}}" alt="" style="width: 150px"></td>
            <td><a href="/admin/product/{{$item -> id}}/edit">Edit</a></td>
            <td><a href="#/admin/product/{{$item -> id}}" id="{{$item -> id}}" class="delete-obj">Delete</a></td>
        </tr>
        </tbody>
    @endforeach
</table>
<div class="row float-right mr-lg-5">
    {{$list_obj->links()}}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('.delete-obj').click(function () {
        var id = this.id;
        var user_confirm = confirm('Bạn có chắc muốn xoá sản phẩm này không? ');
        if(user_confirm){
            $.ajax({
                url: 'http://127.0.0.1:8000/admin/product/'+id,
                method:'DELETE',
                data: {
                    '_token': "{{ csrf_token() }}"
                },
                success:function () {
                    alert('Deleted');
                    alert('Success!');
                    window.location.reload();
                },
                error:function () {
                    alert('Error.');
                }
            });
        }else{
            alert('Ok');
        }
    });
</script>

</body>
</html>