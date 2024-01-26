<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Product List</title>
</head>
<body>
<main> @extends('layout.admin-layout.main')
    @include('layout.admin-layout.header')

    @include('layout.admin-layout.sidebar')
    @include('layout.admin-layout.navbar')
    @yield('content')

<div class="container mt-5">
    <h2 class="text-center">Orders List</h2>

    <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Product 1</div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>
            <span class="badge bg-primary rounded-pill">$19.99</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Product 2</div>
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <span class="badge bg-primary rounded-pill">$29.99</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Product 3</div>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </div>
            <span class="badge bg-primary rounded-pill">$39.99</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Product 4</div>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </div>
            <span class="badge bg-primary rounded-pill">$39.99</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Product 5</div>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </div>
            <span class="badge bg-primary rounded-pill">$39.99</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Product 6</div>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </div>
            <span class="badge bg-primary rounded-pill">$39.99</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Product 7</div>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </div>
            <span class="badge bg-primary rounded-pill">$39.99</span>
        </li>
        <!-- Add more items as needed -->
    </ol>
</div>


@include('layout.admin-layout.footer')
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @include('layout.admin-layout.scripts')
</body>
</html>
