@extends('layouts.master')
@section('content')
    
   <div class="card p-3 m-5">
    <div>
        <a href="{{route('annonces.index')}}" class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#212529"><path d="M640-80 240-480l400-400 71 71-329 329 329 329-71 71Z"/></svg>
        </a>
        <h1 class="text-center text-capitalize">
            <span class="fw-bold">
                {{$annonce->titre}}
            </span>
        </h1>
        <div class="card-img-top">
            <img src="{{ $annonce->img ? asset('/storage/'.$annonce->img) : '' }}" width="250" height="250" alt="">
        </div>
        <div class="card-body">
            <p>
                description :  <span class="fw-bold">
                    {{$annonce->description}}
                </span>
            </p>
            <p>
                type :  <span class="fw-bold">
                    {{$annonce->type}}
                </span>
            </p>
            <p>
                ville :  <span class="fw-bold">
                    {{$annonce->ville}}
                </span>
            </p>
            <p>
                superficie :  <span class="fw-bold">
                    {{$annonce->superficie}} m²
                </span>
            </p>
            <p>
                neuf :  <span class="fw-bold @if ($annonce->neuf == 'true')
                    text-success
                @else
                    text-danger
                @endif">
                    {{$annonce->neuf}}
                </span>
            </p>
            <p>
                Prix : <span class="fw-bold text-primary">
                    {{$annonce->prix}} dhs
                </span>
            </p>
        </div>
    
    </div>        
</div>

@endsection