@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row mt-3">
        <div class="col-md-10 mx-auto">

            @if (session()->has('message'))
            <div class="alert alert-success bg-success text-white bg-gradient">
                <strong>{{ session()->get('message') }}</strong>

            </div>
            @endif

            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h2><i class="fa fa-pencil" aria-hidden="true"></i> Formulaire d'edition</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('clients.update', $client) }}" method="post">
                        @csrf

                        @method('put')
                        
                        @include('forms.form', ['bouton' =>'Valider la modification'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

