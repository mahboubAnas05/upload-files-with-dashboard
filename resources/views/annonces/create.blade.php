@extends('layouts.master')

@section('content')
    
<div class="m-5">
    <h1 class="text-center mt-3">
        Nouvelle Annonce
    </h1>
    <a href="{{route('annonces.index')}}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M760-200v-120H200v120h560Zm0-200v-160H200v160h560Zm0-240v-120H200v120h560ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Z"/></svg>
    </a>
    @session('success')
    <p class="alert alert-success">{{session('success')}}</p>
    @endsession
    <form enctype="multipart/form-data" action="{{route('annonces.store')}}" method="post">
        @csrf 
        @include('annonces.form')
        <button type="submit" class="btn btn-primary mt-3">
            Ajouter
        </button>
    </form>
</div>


@endsection