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
 <main>@extends('layout.admin-layout.main')
        @include('layout.admin-layout.header')

        @include('layout.admin-layout.sidebar')
        @include('layout.admin-layout.navbar')
        @yield('content')
        @section('content')

        <div class="container">
            <h1 class="my-5">Category</h1>
            <table class="table table-dark table-striped">
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Details</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($category as $c)
                    
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$c->name}}</td>
                        <td>{{$c->details}}</td>



                        <td>
                            <a href="/editc/{{$c->id}}"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">Edit</button></a>
                            <a href="/destroyc/{{$c->id}}"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">Delete</button></a>
                        </td>


                    </tr>
                    @endforeach

                </tbody>
                
                

                <a href="/addcategory"> <button type="Submit" class="btn btn-primary"> Add More Category</button></a>

            </table>
            @endsection
        </div>
        @include('layout.admin-layout.footer')
    </main>
    @include('layout.admin-layout.scripts')
</body>

</html>