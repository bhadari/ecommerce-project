<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <div class="row m-1">
    @foreach($product as $p)
        <div class="col-2 ">
            <div class="card" >
                <img src="{{$p->image}}" width="20%"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Product Name-{{$p->name}}</h5>
                    <p class="card-text"> Stock-{{$p->stock}}</p>
                    <p class="card-text"> Price-{{$p->price}}$</p>

                    <p class="card-text"> Description-{{$p->description}}</p>
                    <a href="/viewproduct/{{$p->id}}" class="btn btn-primary">View product</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</body>

</html>