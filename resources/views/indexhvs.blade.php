@extends('template')
@section('judul_halaman', 'Data Kertas HVS')
@section('konten')
    <a href="/kertashvs/tambah" class="btn btn-primary my-4"> + Tambah Kertas HVS Baru</a>

    <p>Cari Data Kertas :</p>
    <form action="/kertashvs/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari kertas .." class="form-control mb-3">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Kertas HVS</th>
            <th>Merk Kertas HVS</th>
            <th>Stok Kertas HVS</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>

        @foreach ($kertashvs as $k)
            <tr>
                <td>{{ $k->kodekertashvs }}</td>
                <td>{{ $k->merkkertashvs }}</td>
                <td>{{ $k->stockkertashvs }}</td>
                <td>{{ $k->tersedia }}</td>
                <td>
                    <a href="/kertashvs/edit/{{ $k->kodekertashvs }}" class="btn btn-warning">
                        Edit
                    </a>
                    |
                    <a href="/kertashvs/hapus/{{ $k->kodekertashvs }}" class="btn btn-danger">
                        Hapus
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $kertashvs->links() }}
    {{-- back & next --}}
@endsection

{{-- <?php
echo $kertashvs;
?> --}}
