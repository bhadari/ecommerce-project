<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select type
        
    </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/5v5zDpPc6+G+fXgkVKXDkZKLvjNW" crossorigin="anonymous">
</head>
@extends('layout.admin-layout.main')
@section ('content')

<body>

    <h1 class="text-center">Select form </h1>

    <form method="post" action="/type" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlSelect1" class="form-label"> Product name</label>
            <label for="categoryName" class="form-label"> Name</label>
            <input value="" type="text" class="form-control" id="categoryName" name="name">
        </div>

        <select class="form-select" id="exampleFormControlSelect1" name="cate_id">
            <option selected> Choose Category</option>
            @foreach($category as $c)
            <option value="{{$c->id}}">{{$c->name}}</option>
            @endforeach

        </select>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection


    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>