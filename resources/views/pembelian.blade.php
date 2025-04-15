@extends('layouts.main')
@section('title', 'pembelian')

@section('artikel')
    <div class="d-flex justify-content-between mb-3">
        <div>
            <input type="text" class="form-control d-inline-block" style="width: 200px;" placeholder="🔍 Filter obat...">
        </div>
        <div>
            <a href="#" class="btn btn-success"><i class="bi bi-plus-circle"></i> Tambah</a>
        </div>
    </div>

    <table class="table table-bordered text-center">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Jumlah</th>
                <th>Tanggal Pembelian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- Data dummy --}}
            @php
                $dataPembelian = [
                    ['nama' => 'Paracetamol', 'jumlah' => 100, 'tanggal' => '2025-04-10'],
                    ['nama' => 'Amoxicillin', 'jumlah' => 50, 'tanggal' => '2025-04-11'],
                    ['nama' => 'Vitamin C', 'jumlah' => 75, 'tanggal' => '2025-04-12'],
                    ['nama' => 'Promag', 'jumlah' => 40, 'tanggal' => '2025-04-13'],
                    ['nama' => 'Antalgin', 'jumlah' => 60, 'tanggal' => '2025-04-14'],
                ];
            @endphp

            @foreach ($dataPembelian as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['jumlah'] }}</td>
                    <td>{{ $item['tanggal'] }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Update</a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

