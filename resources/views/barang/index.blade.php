@extends('layouts.master')

@section('title')
    Gudang Barang
@endsection

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>id Supplier</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data_barang as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ "Rp ".number_format($barang->harga, 2, ',', '.') }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->id_supplier }}</td>
                </tr>
        @endforeach
        </tbody>
    </table>
    <h4>Jumlah data yang dimiliki = {{ $count }}</h4>
@endsection