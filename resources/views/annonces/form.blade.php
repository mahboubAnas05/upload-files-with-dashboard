
<input type="text" value="{{old('titre', $annonce->titre ?? '')}}" name="titre" id="" class="mt-3 form-control @error('titre') is-invalid @enderror " placeholder="titre">
@error('titre')
    <p class="text-danger">{{$message}}</p>
@enderror


<textarea name="description" class="mt-3 form-control @error('description') is-invalid @enderror" placeholder="description">
{{old('description', $annonce->description ?? '')}}
</textarea>
@error('description')
    <p class="text-danger">{{$message}}</p>
@enderror

<select name="type" value="{{old('type', $annonce->type ?? '')}}" id="" class="mt-3 form-select @error('type') is-invalid @enderror">
    <option value="">Choisir le type d'annonce</option>
    <option {{old('type', $annonce->type ?? '') === "Maison" ? 'selected' : ''}} value="Maison">Maison</option>
    <option {{old('type', $annonce->type ?? '') === "Appartement" ? 'selected' : ''}} value="Appartement">Appartement</option>
    <option {{old('type', $annonce->type ?? '') === "Terrain" ? 'selected' : ''}} value="Terrain">Terrain</option>
    <option {{old('type', $annonce->type ?? '') === "Magasin" ? 'selected' : ''}} value="Magasin">Magasin</option>
    <option {{old('type', $annonce->type ?? '') === "Villa" ? 'selected' : ''}} value="Villa">Villa</option>
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
    <input type="radio" {{old('neuf', $annonce->neuf ?? '') == "true" ? 'checked' : ''}} name="neuf" value="true" id="" class="form-check-input ms-3 @error('neuf') is-invalid @enderror">Neuf
    <input type="radio" {{old('neuf', $annonce->neuf ?? '') == "false" ? 'checked' : ''}} name="neuf" value="false" id="" class="form-check-input ms-3 @error('neuf') is-invalid @enderror">Ancien
</div>
@error('neuf')
    <p class="text-danger">{{$message}}</p>
@enderror

<input type="text" value="{{old('prix', $annonce->prix ?? '')}}" name="prix" id="" class="mt-3 form-control @error('prix') is-invalid @enderror" placeholder="prix">
@error('prix')
    <p class="text-danger">{{$message}}</p>
@enderror

<input type="file" name="img" id="" class="form-control mt-3">