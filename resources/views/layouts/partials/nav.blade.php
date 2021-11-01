<nav class="navbar navbar-expand-lg navbar-light bg-secondary bg-gradient bg-gradient shadow-lg sticky-top">
    <div class="container">
        <!--tips: to change the nav placement use .fixed-top,.fixed-bottom,.sticky-top-->
        <a class="navbar-brand text-white" href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Acceuil</a>
        {{-- <a class="navbar-brand" href="#">
        <img src="..." class="d-inline-block align-top" width="30" height="30" alt="...">My Brand
    </a> --}}
        <button class="navbar-toggler mb-1" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link btn btn-primary btn-sm text-white mt-1 m-1" href="{{ route('clients.create') }}"><i class="fa fa-plus    "></i></i> Nouveau client</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-sm text-white mt-1 m-1" href="{{ route('clients.lister') }}"><i class="fa fa-users" aria-hidden="true"></i> Lister les clients</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
