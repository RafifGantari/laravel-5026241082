@extends('template')
@section('title', 'Data Keranjang Belanja')
@section('konten')

    <h2>Tambah Keranjang Belanja</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('keranjangbelanja.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Kode Barang</label><br>
            <input type="text" name="KodeBarang" id="KodeBarang" maxlength="10" value="{{ old('KodeBarang') }}">
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="text" name="Jumlah" id="Jumlah" value="{{ old('Jumlah') }}">
        </p>

        <p>
            <label>Harga</label><br>
            <input type="text" name="Harga" id="Harga" value="{{ old('Harga') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('keranjangbelanja.index') }}">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let kodeBarang = document.getElementById('KodeBarang').value.trim();
            let jumlah = document.getElementById('Jumlah').value.trim();
            let harga = document.getElementById('Harga').value.trim();

            if (kodeBarang === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode Barang wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (kodeBarang.length > 10) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode Barang maksimal 10 karakter",
                    icon: "error"
                });
                return false;
            }

            if (jumlah === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Jumlah wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (harga === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Harga wajib diisi",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
