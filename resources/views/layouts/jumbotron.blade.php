@section('jumbotron')
@if (Request::is('team'))

{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid text-center d-flex align-items-center justify-content-center">
    <div class="container">
        <h1 class="display-4">Selamat datang di <span>Vtuber Sub Indo</span></h1>

        {{-- Breadcrumb --}}
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Team</li>
                    </ol>
                </nav>
            </div>
        </div>
        {{-- End Breadcumb --}}

    </div>
</div>
{{-- End Jumbotron --}}

@endif
@endsection
