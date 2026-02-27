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
    
     <input type="text" value="{{old('titre', $annonce->titre ?? '')}}" name="titre" id="" class="mt-3 form-control @error('titre') is-invalid @enderror " placeholder="titre">
     @error('titre')
         <p class="text-danger">{{$message}}</p>
     @enderror
     <textarea name="description" value="{{old('description', $annonce->description ?? '')}}" class="mt-3 form-control @error('description') is-invalid @enderror" placeholder="description"></textarea>
     @error('description')
     <p class="text-danger">{{$message}}</p>
    @enderror
     <select name="type" value="{{old('type', $annonce->type ?? '')}}" id="" class="mt-3 form-select @error('type') is-invalid @enderror">
        <option value="">Choisir le type d'annonce</option>
        <option value="Maison">Maison</option>
        <option value="Appartement">Appartement</option>
        <option value="Terrain">Terrain</option>
        <option value="Magasin">Magasin</option>
        <option value="Villa">Villa</option>
     </select>
     @error('type')
     <p class="text-danger">{{$message}}</p>
    @enderror
     <input type="text" value="{{old('ville', $annonce->ville ?? '')}}" name="ville" id="" class="mt-3 form-control @error('ville') is-invalid @enderror" placeholder="ville">
     @error('ville')
     <p class="text-danger">{{$message}}</p>
    @enderror
     <input type="text" name="superficie" value="{{old('superficie', $annonce->superficie ?? '')}}" id="" class="mt-3 form-control @error('superficie') is-invalid @enderror" placeholder="superficie">
     @error('superficie')
     <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="mt-3">
        <label for="Etat" class="me-5">Etat</label>
     <input type="radio" value="{{old('neuf', $annonce->neuf ?? '')}}" name="neuf" value="true" id="" class="form-check-input ms-3 @error('neuf') is-invalid @enderror">Neuf
     <input type="radio" value="{{old('neuf', $annonce->neuf ?? '')}}" name="neuf" value="false" id="" class="form-check-input ms-3 @error('neuf') is-invalid @enderror">Ancien
     </div>
     @error('neuf')
     <p class="text-danger">{{$message}}</p>
    @enderror
     <input type="text" value="{{old('prix', $annonce->prix ?? '')}}" name="prix" id="" class="mt-3 form-control @error('prix') is-invalid @enderror" placeholder="prix">
     @error('prix')
     <p class="text-danger">{{$message}}</p>
    @enderror

</body>
</html>