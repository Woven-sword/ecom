<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <title>ADD product</title>
</head>
<body>
    <div class="row">
    <div class="col-lg-3">
        <x-admin_sidebar/>
    </div>
    <div class="col-lg-9">
        <h1 class="display-1 text-center">
            Add-product
        </h1>
        <form action="" method="POST" enctype="multipart/form-data" class="col-lg-6 m-auto border">
            <label for="">Product Name</label>
            <input class="form-control " type="text" name="name">
            <label for="">Product Price</label>
            <input class="form-control" type="number" name="price">
            <label for="">Category</label>
            <select class="form-control" name="category">
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="kids">kids</option>
            </select>
            <input class="form-control" type="file" name="image">
          <input class="form-control" type="submit" value="submit" class="btn" style="background-color: hotpink">
        </form>
    </div>
    </div>
    <x-boot_js/>
</body>
</html>