@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Service</h1>
    </div>

    <div class="row">

        <div class="col-lg-6">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    System & Server Administration
                </div>
                <div class="card-body">
                    Layanan instalasi, konfigurasi, dan pemeliharaan server berbasis Linux (Debian, RHEL), Web Server, Mail Server, serta sertifikat SSL/TLS.
                </div>
            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Network Engineering & Security</h6>
                </div>
                <div class="card-body">
                    Perancangan topologi jaringan, manajemen bandwidth, konfigurasi routing MikroTik, VPN Site-to-Site, serta pengamanan firewall.
                </div>
            </div>

        </div>

        <div class="col-lg-6">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Full-Stack Web Development</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Pilihan Layanan:</div>
                            <a class="dropdown-item" href="{{ route('contact') }}">Konsultasi Proyek</a>
                            <a class="dropdown-item" href="{{ route('product') }}">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    Pembuatan aplikasi web sistem informasi dan dashboard monitoring menggunakan framework Laravel, PHP Native, dan database MySQL.
                </div>
            </div>

            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">IoT & Hardware Prototyping (Klik untuk Buka/Tutup)</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        Pengembangan sistem otomasi dan keamanan berbasis mikrokontroler ESP32, modul RFID/NFC, serta integrasi monitoring web real-time.
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection