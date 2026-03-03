@extends('layouts.master')

@section('content')
    <div class="vh-100">

        <div class="d-flex justify-content-between mt-3">
            <div>
                <h4>
                    gestion Immobilière
                </h3>
            </div>
            <div>
                <a href="{{route('annonces.create')}}" class="btn btn-primary">
                   + Nouvelle Annonce
                </a>
            </div>
        </div>

        <div class="d-flex align-items-center gap-2 bg-light rounded p-3 mt-3">
            <div class="p-3 alert alert-primary">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0167ff" ><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
            </div>
            <div>
                <h4 class="text-primary">
                    Total Annonces
                    <br>
                    <span class="fw-bold text-dark">{{$stats['total']}}</span>
                </h4>
                
            </div>
        </div>
        <div class="d-flex align-items-center gap-2 bg-light rounded p-3 mt-3">
            <div class="p-3 alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#198754"><path d="M200-200v-560 560Zm0 80q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v100h-80v-100H200v560h560v-100h80v100q0 33-23.5 56.5T760-120H200Zm320-160q-33 0-56.5-23.5T440-360v-240q0-33 23.5-56.5T520-680h280q33 0 56.5 23.5T880-600v240q0 33-23.5 56.5T800-280H520Zm280-80v-240H520v240h280Zm-117.5-77.5Q700-455 700-480t-17.5-42.5Q665-540 640-540t-42.5 17.5Q580-505 580-480t17.5 42.5Q615-420 640-420t42.5-17.5Z"/></svg>
            </div>
            <div>
                <h4 class="text-success">
                    Valeur Totale (DHS)
                    <br>
                    <span class="fw-bold text-dark">{{$stats['prix_total']}} M</span>
                </h4>
                
            </div>
        </div>
        <div class="d-flex align-items-center gap-2 bg-light rounded p-3 mt-3">
            <div class="p-3 alert alert-warning">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffc107"><path d="m140-220-60-60 300-300 160 160 284-320 56 56-340 384-160-160-240 240Z"/></svg>
            </div>
            <div>
                <h4 class="text-warning">
                    Prix Moyen
                    <br>
                    <span class="fw-bold text-dark">{{$stats['prix_moyen']}} k</span>
                </h4>
                
            </div>
        </div>
        <div class="d-flex align-items-center gap-2 bg-light rounded p-3 mt-3">
            <div class="p-3 alert alert-danger">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#dc3545"><path d="M400-80H120q-33 0-56.5-23.5T40-160v-240h80v240h280v80Zm160 0v-80h280v-240h80v240q0 33-23.5 56.5T840-80H560ZM40-560v-240q0-33 23.5-56.5T120-880h280v80H120v240H40Zm800 0v-240H560v-80h280q33 0 56.5 23.5T920-800v240h-80Z"/></svg>
            </div>
            <div>
                <h4 class="text-danger">
                    Superficie (m²)
                    <br>
                    <span class="fw-bold text-dark">{{$stats['superficie']}} m²</span>
                </h4>
                
            </div>
        </div>

    </div>
@endsection