@extends('layouts.app')

@push('styles')
    <!-- Custom styles for DataTables -->
    <link href="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Product</h1>
    <p class="mb-4">Daftar produk yang tersedia pada sistem menggunakan komponen DataTables SB Admin 2.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Tanggal Masuk</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Tanggal Masuk</th>
                            <th>Harga</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>PRD-001</td>
                            <td>MikroTik RB941-2nD (hAP lite)</td>
                            <td>Networking</td>
                            <td>25</td>
                            <td>2026/09/10</td>
                            <td>Rp 450.000</td>
                        </tr>
                        <tr>
                            <td>PRD-002</td>
                            <td>ESP32 DevKit V1 WiFi + Bluetooth</td>
                            <td>IoT & Microcontroller</td>
                            <td>50</td>
                            <td>2026/09/15</td>
                            <td>Rp 65.000</td>
                        </tr>
                        <tr>
                            <td>PRD-003</td>
                            <td>RFID MFRC522 Reader Module</td>
                            <td>IoT & Sensor</td>
                            <td>40</td>
                            <td>2026/10/02</td>
                            <td>Rp 25.000</td>
                        </tr>
                        <tr>
                            <td>PRD-004</td>
                            <td>Kabel UTP Belden Cat6 (1 Roll)</td>
                            <td>Networking</td>
                            <td>10</td>
                            <td>2026/10/18</td>
                            <td>Rp 1.850.000</td>
                        </tr>
                        <tr>
                            <td>PRD-005</td>
                            <td>Raspberry Pi 4 Model B 8GB</td>
                            <td>Single Board Computer</td>
                            <td>8</td>
                            <td>2026/11/01</td>
                            <td>Rp 1.450.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sbadmin2/js/demo/datatables-demo.js') }}"></script>
@endpush