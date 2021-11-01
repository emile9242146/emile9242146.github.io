@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row mt-3 mt-lg-5">
        <div class="col-md-10 mx-auto">

            @if (session()->has('message'))
            <div class="alert alert-success bg-success bg-gradient text-white">
                <strong>{{ session()->get('message') }}</strong>

            </div>
            @endif

            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h4><i class="fa fa-plus" aria-hidden="true"></i> Formulaire de creation</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('clients.store') }}" method="post">
                        @csrf

                        @include('forms.form',['bouton' =>'Valider la creation'])

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
