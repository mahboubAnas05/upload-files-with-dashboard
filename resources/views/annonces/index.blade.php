@extends('layouts.master')
@section('content')
<h1 class="text-center mt-3">
    Liste des Annonces
</h1>
@session('success')
    <p class="alert alert-success">{{session('success')}}</p>
@endsession
<a href="{{route('annonces.create')}}" class="btn btn-primary">
   + Nouvelle annonce
</a>

<form action="{{route("annonces.index")}}" method="get">
    <div class="bg-light p-3 border my-4 rounded">
        <div class="d-md-flex gap-2">
            <div>
                <label for="Nom du bien" class="fw-bold">Nom du bien</label>
                <br>
                <input type="text" name="titre" value="{{request('titre')}}" id="" class="form-control" placeholder="Ex: villa...">
            </div>
            <div>
                <label for="type" class="fw-bold">Type</label>
                <br>
                <select name="type" id="" value="{{request("type")}}" class="form-select">
                    <option value="">Tous</option>
                    <option {{request("type") === 'maison' ? 'selected' : ""}} value="maison">maison</option>
                    <option {{request("type") === 'appartement' ? 'selected' : ""}} value="appartement">appartement</option>
                    <option {{request("type") === 'terrain' ? 'selected' : ""}} value="terrain">terrain</option>
                    <option {{request("type") === 'magasin' ? 'selected' : ""}} value="magasin">magasin</option>
                    <option {{request("type") === 'villa' ? 'selected' : ""}} value="villa">villa</option>
                </select>
            </div>
            <div>
                <label for="ville" class="fw-bold">Ville</label>
                <br>
                <select name="ville" value={{request('ville')}} id="" class="form-select">
                    <option value="">Tous</option>
                    <option {{request('ville') === 'casablanca' ? 'selected' : ''}} value="casablanca">casablanca</option>
                    <option {{request('ville') === 'rabat' ? 'selected' : ''}} value="rabat">rabat</option>
                    <option {{request('ville') === 'fès' ? 'selected' : ''}} value="fès">fès</option>
                    <option {{request('ville') === 'zagoura' ? 'selected' : ''}} value="zagoura">zagoura</option>
                    <option {{request('ville') === 'tounate' ? 'selected' : ''}} value="tounate">tounate</option>
                </select>
            </div>
            <div>
                <label for="Superficie" class="fw-bold">Superficie (m²)</label>
                <div class="d-flex gap-2">
                    <div><input value="{{request('min')}}" step="0.1" type="number" name="min" placeholder="Min" class="form-control"></div>
                    <div><input value="{{request('max')}}" step="0.1" type="number" name="max" placeholder="Max" class="form-control"></div>
                </div>
            </div>
        </div>
        <div class="d-md-flex gap-2 align-items-center">
            <div>
                <label for="Prix Max" class="fw-bold">Prix Max</label>
                <br>
                <input step="0.1" value="{{request('prixMax')}}" type="number" name="prixMax" id="" class="form-control" placeholder="DH">
            </div>
            <div>
                <label for="etat" class="fw-bold">Etat</label>
                <div class="p-3 bg-white border rounded">
                    <input {{request('neuf') === 'true' ? 'checked' : ''}} value="true" type="radio" name="neuf" id="" class="form-check-input ">
                    <label for="etat">Neuf</label>
                    <input {{request('neuf') === 'false' ? 'checked' : ''}} value="false" type="radio" name="neuf" id="" class="form-check-input ms-3">
                    <label for="etat">Ancien</label>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary fw-bold">Filtrer</button>
                <a href="{{route('annonces.index')}}" class="btn btn-outline-dark fw-bold">
                    Reset
                </a>
            </div>
        </div>
    </div>    
</form>

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
        @forelse ($annonces as $annonce)
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
            @empty
            <tr>
                <td colspan="9">
                    <div class="d-flex flex-column align-items-center py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#212529"><path d="M620-520q25 0 42.5-17.5T680-580q0-25-17.5-42.5T620-640q-25 0-42.5 17.5T560-580q0 25 17.5 42.5T620-520Zm-280 0q25 0 42.5-17.5T400-580q0-25-17.5-42.5T340-640q-25 0-42.5 17.5T280-580q0 25 17.5 42.5T340-520Zm16.5 138.5Q301-343 276-280h66q22-37 58.5-58.5T480-360q43 0 79.5 21.5T618-280h66q-25-63-80.5-101.5T480-420q-68 0-123.5 38.5Zm-32.5 270Q251-143 197-197t-85.5-127Q80-397 80-480t31.5-156Q143-709 197-763t127-85.5Q397-880 480-880t156 31.5Q709-817 763-763t85.5 127Q880-563 880-480t-31.5 156Q817-251 763-197t-127 85.5Q563-80 480-80t-156-31.5ZM480-480Zm227 227q93-93 93-227t-93-227q-93-93-227-93t-227 93q-93 93-93 227t93 227q93 93 227 93t227-93Z"/></svg>
                        <p>Aucune annonce trouvée</p>
                    </div>
                </td>
            </tr>
        @endforelse
        </tbody>
</table>
</div>

@endsection