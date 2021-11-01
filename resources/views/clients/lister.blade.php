@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row mt-5">
        <div class="col-md-12 col-sm-12">

            <div class="d-flex bd-highlight">
                <div class="p-2 w-100 bd-highlight">
                    @if($clients->count() > 0)
                    <h2 class="float-left">{{ str_plural('Liste client', $clients->count()) }}</h2>
                    @else
                    <h2 class="float-left">Liste des client</h2>
                    @endif
                </div>
                <div class="p-2 flex-shrink-1 bd-highlight">
                    <button type="button" class="btn btn-primary position-relative">
                        <small><i class="fa fa-cart-plus" aria-hidden="true"></i></small>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <small>+ {{ $clients->count() }}</small>
                        </span>
                    </button>
                </div>
            </div>

            <hr>

            @if($clients->count() > 0)
            <div class="row mt-2">
                <div class="col-md-12 table-responsive">
                    <table class="table table-dark table-bordered text-center table-hover">
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
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->prenom }}</td>
                                <td><a href="{{ route('clients.show', $client->id) }}">{{ $client->nom }}</a></td>
                                <td>{{ $client->date_naissance }}</td>
                                <td>{{ $client->lieu_naissance }}</td>
                                <td>{{ $client->adresse }}</td>
                                <td>{{ $client->numero_carte }}</td>
                                <td>{{ $client->jour_entree }}</td>
                                <td>{{ $client->jour_sortie }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    {{ $clients->links() }}
                </div>
            </div>

            @else
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 alert alert-secondary bg-secondary bg-gradient text-warning">
                        <h2>Aucun client pour l'instant...</h2>
                    </div>
                </div>
            </div>
            @endif
        </div>

        @endsection
