<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product information</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>
<div class="container">
    <div class="row" style="margin-top: 30px">
        <h1>Enter Product information</h1>
    </div>
    <div>
        <a href="/admin/product"  style="margin-left: 10px;"><i class="fas fa-list-alt"></i>List</a>
    </div>
    <div class="row" style="margin-top: 30px">
        <form action="/admin/product" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label> Product Name </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Price </label>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label>Category </label>
                <select name="categoryId" class="form-control">
                    <option value="1">1 </option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class=" form-group">
                <label>Image </label>
                <input type="text" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label> Description <br> </label>
                <textarea rows="4" cols="50" name="description" class="form-control"></textarea>
            </div>
            <div class=" form-group">
                <input type="submit" value="Save" class="btn btn-primary" style="margin-right: 150px">
                <input type="reset" value="Reset" class="btn btn-dark">
            </div>

        </form>
    </div>
</div>
</body>
</html>