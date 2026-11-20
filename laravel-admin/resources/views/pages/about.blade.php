@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">About</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tentang Aplikasi</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;"
                    src="{{ asset('sbadmin2/img/undraw_posting_photo.svg') }}" alt="Ilustrasi">
            </div>
            <p>Aplikasi <strong>Laravel Admin</strong> ini dibangun menggunakan framework Laravel dan template Bootstrap <strong>SB Admin 2</strong> dengan penerapan sistem Blade Templating (Header, Sidebar, Content, dan Footer).</p>
        </div>
    </div>
@endsection