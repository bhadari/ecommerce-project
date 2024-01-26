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


<form method="post" action="/category" class="p-5" enctype="multipart/form-data">
@csrf
        <div class="mb-3">
            <label for="categoryName" class="form-label"> Name</label>
            <input type="text" class="form-control" id="categoryName" name="name" >
        </div>
        
        <div class="mb-3">
            <label for="categorydetails" class="form-label">Details</label>
            <textarea class="form-control" id="categoryDescription" name="details" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add category</button>
    
</form>
@endsection
@include('layout.admin-layout.footer')
    </main>
    @include('layout.admin-layout.scripts')
</body>

</html>