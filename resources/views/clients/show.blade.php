@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Client # {{ $client->id }}</h2>
        </div>
    </div>
    <hr>
    <div class="row mt-2">
        <div class="col-md-12 table-responsive text-center">
            <table class="table table-dark table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Date de naissance</th>
                        <th>Lieu de naissance</th>
                        <th>Adresse</th>
                        <th>Numero de carte</th>
                        <th>Jour d'entree</th>
                        <th>Jour de sortie</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->date_naissance }}</td>
                        <td>{{ $client->lieu_naissance }}</td>
                        <td>{{ $client->adresse }}</td>
                        <td>{{ $client->numero_carte }}</td>
                        <td>{{ $client->jour_entree }}</td>
                        <td>{{ $client->jour_sortie }}</td>
                        <td><a href="{{ route('clients.edit', $client) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a></td>

                        <td>
                            <form action="{{ route('clients.destroy' ,$client) }}" method="post" onsubmit="return confirm('Etes-vous sur de vouloir supprimer ce client ?')">
                                @csrf

                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer</button>
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
