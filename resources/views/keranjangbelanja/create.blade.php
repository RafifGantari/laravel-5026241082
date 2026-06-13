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
    <form action="{{ route('keranjangbelanja.store') }}" method="post">
        {{ csrf_field() }}

        <div class="row mb-3">
            <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" name="KodeBarang" id="KodeBarang" class="form-control" maxlength="6" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="text" name="Jumlah" id="Jumlah" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" name="Harga" id="Harga" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>

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
