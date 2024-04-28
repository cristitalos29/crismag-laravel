<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CRISMAG</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<header>
    @include('navbar')
</header>

<div class="container-fluid" id="content-container">
    <div class="row">
            <div class="col-md-3">
                @include('categories')
            </div>
            <div class="col-md-9" id="main-content">
                <h1>Welcome to CRISMAG</h1>
            </div>
    </div>
</div>

</body>
