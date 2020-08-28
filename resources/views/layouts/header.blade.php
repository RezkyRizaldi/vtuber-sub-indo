@section('header')

  <!-- Navbar Container -->
  <div class="container">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2 mb-3">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link px-3" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/talent') }}">Talent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/virtualpedia') }}">Virtualpedia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/team') }}">Team</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto order-0 order-md-2" href="#">
            <img src="assets/img/logo_vsi_v2.png" alt="Logo VSI" /></a>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <form class="form-inline ml-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search" />
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </nav>
    <!-- End Navbar -->

  </div>
  <!-- End Navbar Container -->

@endsection
