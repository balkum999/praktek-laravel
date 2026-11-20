@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Contact</h1>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Hubungi Kami</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="form-group">
                            <label>Alamat Email</label>
                            <input type="email" class="form-control" placeholder="nama@contoh.com">
                        </div>
                        <div class="form-group">
                            <label>Pesan</label>
                            <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        <button type="button" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection