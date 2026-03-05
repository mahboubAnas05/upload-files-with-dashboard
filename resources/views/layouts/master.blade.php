<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="h-100 d-flex flex-column">
        <header class="">
            @include('navbar')
        </header>
        
        <div class="container-fluid flex-grow-1 h-100 row">
            <div class="col-md-1 col-sm-12 bg-light">
                @include('sideBar')
            </div>
            <div class="col-md-11 col-12 bg-white d-flex flex-column">
                @yield('content')
            </div>
        </div>
    </div>
    <div>
        @include('footer')
    </div>

</body>
</html>