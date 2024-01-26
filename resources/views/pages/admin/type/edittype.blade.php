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



        <form method="post" action="/updatet/{{$type->id}}" class="p-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="categoryName" class="form-label"> Product Name</label>
                <input value="{{$type->name}}" type="text" class="form-control" id="categoryName" name="name">
            </div>


            <select class="form-select" id="exampleFormControlSelect1" name="cate_id">
                <option selected> Choose Category</option>
                @foreach($category as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach


            </select>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>
        @endsection

    </main>
</body>

</html>