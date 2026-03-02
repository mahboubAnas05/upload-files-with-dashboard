@extends('layouts.master')

@section('content')
<div class="m-5">
    <h1 class="text-center">
        Modifier L'annonce
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
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        
    @endif
    <form action="{{route('annonces.update', $annonce)}}" method="post" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        @include('annonces.form')
        <button type="submit" class="btn btn-success mt-3">
            modifier
        </button>
    </form>
</div>

@endsection