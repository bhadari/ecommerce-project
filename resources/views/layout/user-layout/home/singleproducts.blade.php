<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>viewproduct</title>

</head>

<body>
    <form>
        <div class="container py-5">
        @foreach($product as $p)
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="fw-bold">{{$product->name}}</h2>
                    <img src="{{$product->image}}" class="card-img-top" alt="...">
                    <p class="text-muted">Stock:{{$product->stock}}</p>
                    <h3 class="my-4">Price-{{$product->price}}</h3>
                    <p class="mb-4"> Description:{{$product->description}} </p>
                    <div class="d-flex gap-3 mb-4">
                        <input type="number" class="form-control" value="1" style="max-width: 80px" />
                        <button class="btn btn-primary" type="button">Add to Cart</button>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</body>

</html>