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
    <h1 class="text-center">
        Nouvelle Annonce
    </h1>
    <a href="{{route('annonces.index')}}" class="btn btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M760-200v-120H200v120h560Zm0-200v-160H200v160h560Zm0-240v-120H200v120h560ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Z"/></svg>
    </a>
    @session('success')
        <p class="alert alert-success">{{session('success')}}</p>
    @endsession
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->any as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        
    @endif
    <form action="{{route('annonces.update', $annonce)}}" method="post">
        @csrf
        @method('PUT')
        @include('annonces.form')
        <button type="submit" class="btn btn-success mt-3">
            modifier
        </button>
    </form>
</body>
</html>