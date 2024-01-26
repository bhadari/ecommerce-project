<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Types</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <main> @extends('layout.admin-layout.main')
        @include('layout.admin-layout.header')

        @include('layout.admin-layout.sidebar')
        @include('layout.admin-layout.navbar')
        @yield('content')
        @section('content')


<form method="post" action="/products" class="p-5" enctype="multipart/form-data">
@csrf
        <div class="mb-3">
            <label for="categoryName" class="form-label"> Name</label>
            <input type="text" class="form-control" id="categoryName" name="name" >
        </div>
        <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                <input type="file" name="image" placeholder="image">
            </div>
        <div class="mb-3">
            <label for="categoryName" class="form-label">Price</label>
            <input type="number" class="form-control" id="categoryName" name="price" >
        </div>
        <div class="mb-3">
            <label for="categoryName" class="form-label">Stock</label>
            <input type="number" class="form-control" id="categoryName" name="stock" >
        </div>
        <div class="mb-3">
            <label for="categoryDescription" class="form-label">Description</label>
            <textarea class="form-control" id="categoryDescription" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    
</form>
@endsection
@include('layout.admin-layout.footer')
    </main>
    @include('layout.admin-layout.scripts')
</body>

</html>