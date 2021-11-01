<div class="row">
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input id="prenom" class="form-control @error('prenom') is-invalid @enderror" type="text" name="prenom" value="{{ old('prenom') ?? $client->prenom }}" placeholder="Entrez le prenom">

            @error('prenom')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input id="nom" class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" value="{{ old('nom') ?? $client->nom }}">

            @error('nom')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label for="date_naissance">Date de naissance</label>
            <input id="date_naissance" class="form-control @error('date_naissance') is-invalid @enderror" type="date" name="date_naissance" value="{{ old('date_naissance') ?? $client->date_naissance }}">

            @error('date_naissance')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label for="lieu_naissance">Lieu de naissance</label>
            <input id="lieu_naissance" class="form-control @error('lieu_naissance') is-invalid @enderror" type="text" name="lieu_naissance" value="{{ old('lieu_naissance') ?? $client->lieu_naissance }}">

            @error('lieu_naissance')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-2">
        <div class="form-group">
            <label for="adresse" class="sr-only">Adresse</label>
            <textarea id="adresse" class="form-control @error('adresse') is-invalid @enderror" name="adresse" rows="4" placeholder="Entrez l'adresse...">{{ old('adresse') ?? $client->adresse }}</textarea>

            @error('adresse')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label for="numero_carte">Numero de carte</label>
            <input id="numero_carte" class="form-control @error('numero_carte') is-invalid @enderror" type="text" name="numero_carte" value="{{ old('numero_carte') ?? $client->numero_carte }}">

            @error('numero_carte')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label for="jour_entree">Jour entree</label>
            <input id="jour_entree" class="form-control @error('jour_entree') is-invalid @enderror" type="date" name="jour_entree" value="{{ old('jour_entree') ?? $client->jour_entree }}">

            @error('jour_entree')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label for="jour_sortie">Jour sortie</label>
            <input id="jour_sortie" class="form-control @error('jour_sortie') is-invalid @enderror" type="date" name="jour_sortie" value="{{ old('jour_sortie') ?? $client->jour_sortie }}">

            @error('jour_sortie')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <button class="btn btn-primary btn-block" type="submit">{{ $bouton }} <i class="fa fa-check" aria-hidden="true"></i></button>
    </div>
</div>
