@extends('layouts.master')

@section('content')
<div class="m-5">
    <h1 class="text-center">
        Modifier L'annonce
    </h1>
    <a href="{{route('annonces.index')}}" class="btn btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e3e3e3"><path d="M280-600v-80h560v80H280Zm0 160v-80h560v80H280Zm0 160v-80h560v80H280ZM160-600q-17 0-28.5-11.5T120-640q0-17 11.5-28.5T160-680q17 0 28.5 11.5T200-640q0 17-11.5 28.5T160-600Zm0 160q-17 0-28.5-11.5T120-480q0-17 11.5-28.5T160-520q17 0 28.5 11.5T200-480q0 17-11.5 28.5T160-440Zm0 160q-17 0-28.5-11.5T120-320q0-17 11.5-28.5T160-360q17 0 28.5 11.5T200-320q0 17-11.5 28.5T160-280Z"/></svg>
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