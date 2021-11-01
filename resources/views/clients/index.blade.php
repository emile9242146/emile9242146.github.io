@extends('layouts.app')

@section('content')


<div class="banner-area">
    <div class="content-area">
        <div class="content">
            <h1>Restaurant safari bar</h1>
            <h2 class="text-warning"><i class="fa fa-map-marker" aria-hidden="true"></i> Thies Grand Standing...</h2>
            <button class="btn btn-outline-secondary">Plus d'information</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-3">
        <div class="col-12">
            <hr>
            <h2 class=" text-center">Nos plats</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-sm-4 col-lg-6">
            <div class="card shadow">
                <div class="inner">
                    <img src="{{ asset('images/mer.jpg') }}" class=" card-img-top">
                </div>
            </div>
        </div>

        <div class="col-md-8 col-sm-8 col-lg-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae accusantium ad culpa, aspernatur corporis veritatis laudantium dicta, rem velit quam suscipit, provident blanditiis assumenda deleniti rerum voluptatum? Ad, maxime.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae accusantium ad culpa, aspernatur corporis veritatis laudantium dicta, rem velit quam suscipit, provident blanditiis assumenda deleniti rerum voluptatum? Ad, maxime.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-8 col-sm-7 col-lg-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae accusantium ad culpa, aspernatur corporis veritatis laudantium dicta, rem velit quam suscipit, provident blanditiis assumenda deleniti rerum voluptatum? Ad, maxime.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae accusantium ad culpa, aspernatur corporis veritatis laudantium dicta, rem velit quam suscipit, provident blanditiis assumenda deleniti rerum voluptatum? Ad, maxime.</p>
        </div>

        <div class="col-md-4 col-sm-5 col-lg-6">
            <div class="card">
                <div class="inner">
                    <img src="{{ asset('images/image4.jpg') }}" class="card-img-top">
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-5">
        <div class="col-md-4 col-sm-5 col-lg-6">
            <div class="card">
                <div class="inner">
                    <img src="{{ asset('images/resto.jpg') }}" class="card-img-top">
                </div>
            </div>
        </div>

        <div class="col-md-8 col-sm-7 col-lg-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae accusantium ad culpa, aspernatur corporis veritatis laudantium dicta, rem velit quam suscipit, provident blanditiis assumenda deleniti rerum voluptatum? Ad, maxime.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae accusantium ad culpa, aspernatur corporis veritatis laudantium dicta, rem velit quam suscipit, provident blanditiis assumenda deleniti rerum voluptatum? Ad, maxime.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-8 col-sm-7 col-lg-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae accusantium ad culpa, aspernatur corporis veritatis laudantium dicta, rem velit quam suscipit, provident blanditiis assumenda deleniti rerum voluptatum? Ad, maxime.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae accusantium ad culpa, aspernatur corporis veritatis laudantium dicta, rem velit quam suscipit, provident blanditiis assumenda deleniti rerum voluptatum? Ad, maxime.</p>
        </div>

        <div class="col-md-4 col-sm-5 col-lg-6">
            <div class="card">
                <div class="inner">
                    <img src="{{ asset('images/mer2.jpg') }}" class="card-img-top img-responsive" height="300" width="400">
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 col-sm-5 col-lg-6">
            <div class="card">
                <div class="inner">
                    <img src="{{ asset('images/sky.jpg') }}" class="card-img-top img-responsive" height="300" width="400">
                </div>
            </div>
        </div>

        <div class="col-md-8 col-sm-7 col-lg-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae accusantium ad culpa, aspernatur corporis veritatis laudantium dicta, rem velit quam suscipit, provident blanditiis assumenda deleniti rerum voluptatum? Ad, maxime.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae accusantium ad culpa, aspernatur corporis veritatis laudantium dicta, rem velit quam suscipit, provident blanditiis assumenda deleniti rerum voluptatum? Ad, maxime.</p>
        </div>
    </div>

</div>


<hr>

<footer class=" bg-dark text-white mt-2 p-4 text-center">
    <div class="container-fluid">

        <div class="row ">
            <div class="col-md-4">
                <h4><i class="fa fa-map-marker" aria-hidden="true"></i> Lacation...</h4>
                <h4><i class="fa fa-phone" aria-hidden="true"></i> 77 650 34 08</h4>
            </div>
            <div class="col-md-4">
                <h4><i class="fa fa-map-marker" aria-hidden="true"></i> Lacation...</h4>
                <h4><i class="fa fa-phone" aria-hidden="true"></i> 77 650 34 08</h4>
            </div>
            <div class="col-md-4">
                <h5>Reseaux sociaux</h5>
                <h4>Nous suivre sur...</h4>
                <h4>
                    <a href="" class="p-2"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    <a href="" class=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="" class="p-2"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h4><i class="fa fa-copyright"></i> <span class="span">{{ date('Y') }}</span> tous droits reserves.</h4>
            </div>
        </div>
    </div> 
</footer>

@endsection
