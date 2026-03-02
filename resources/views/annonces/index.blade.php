@extends('layouts.master')
@section('content')
<h1 class="text-center mt-3">
    Liste des annonces
</h1>
@session('success')
    <p class="alert alert-success">{{session('success')}}</p>
@endsession
<a href="{{route('annonces.create')}}" class="btn btn-primary">
   + Nouvelle annonce
</a>
<div style="overflow-x: auto">
<table class="table table-scripted table-hover mt-3">
    <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Type</th>
            <th>Ville</th>
            <th>Superficie(m²)</th>
            <th>Etat</th>
            <th>Prix (dhs)</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($annonces as $annonce)
            <tr>
                <td>
                    @if ($annonce->img)
                        <img src="{{ asset('storage/'.$annonce->img) }}" width="100" height="100" class="rounded" alt="">
                    @endif
                </td>
                <td>{{$annonce->titre}}</td>
                <td>{{$annonce->description}}</td>
                <td>{{$annonce->type}}</td>
                <td>{{$annonce->ville}}</td>
                <td>{{$annonce->superficie}}</td>
                <td>{{$annonce->neuf}}</td>
                <td>{{$annonce->prix}}</td>
                <td>
                    <a href="{{route('annonces.show', $annonce->id)}}" class="btn btn-light">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#212529"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                    </a>
                    <a href="{{route('annonces.edit', $annonce->id)}}" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                    </a>
                    <form onsubmit="return confirm('suppression ?')" action="{{route('annonces.destroy', $annonce)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
</div>

@endsection