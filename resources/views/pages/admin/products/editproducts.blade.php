<!DOCTYPE html>
<html lang="en">

<head>
@include('layout.admin-layout.header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Types</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

@include('layout.admin-layout.sidebar')
        @include('layout.admin-layout.navbar')
<body>
    <main> @extends('layout.admin-layout.main')
       
        @yield('content') 
@section('content')



<form method="post" action="/update/{{$product->id}}" class="p-5" enctype="multipart/form-data">
@csrf
        <div class="mb-3">
            <label for="categoryName" class="form-label"> Name</label>
            <input   value= "{{$product->name}}"type="text" class="form-control" id="categoryName" name="name" >
        </div>
        <img src="../{{$product->image}}" width="10%" class="mb-4" alt="">
        <div class="mb-3">
                <label for="categoryName" class="form-label">Image</label>
                <input type="file" name="image" placeholder="image">
            </div>
        <div class="mb-3">
            <label for="categoryName" class="form-label">Price</label>
            <input   value= "{{$product->price}}"type="number" class="form-control" id="categoryName" name="price" >
        </div>
        <div class="mb-3">
            <label for="categoryName" class="form-label">Stock</label>
            <input   value= "{{$product->stock}}"type="number" class="form-control" id="categoryName" name="stock" >
        </div>
        <div class="mb-3">
            <label for="categoryDescription" class="form-label">Description</label>
            <textarea  value= "{{$product->description}}" class="form-control" id="categoryDescription" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    
</form>
@endsection
        
        @include('layout.admin-layout.footer')
    </main>
    @include('layout.admin-layout.scripts')
</body>

</html>