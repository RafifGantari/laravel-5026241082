@extends('template')
@section('judul_halaman', 'Data Keranjang Belanja')
@section('konten')
    <a href="/keranjangbelanja/create" class="btn btn-primary my-4"> Beli</a>

    <table class="table table-striped table-hover"
	{{-- border="2" --}}
	>
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        @foreach ($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ $k->Harga }}</td>
                <td>{{ $k->Jumlah * $k->Harga }}</td>
                <td>
                    <form action="{{ route('keranjangbelanja.destroy', $k->ID) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>
	{{ $keranjangbelanja->links() }}
	{{-- back & next --}}
@endsection

{{-- <?php
echo $keranjangbelanja;
?> --}}
