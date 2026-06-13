@extends('template')
@section('title', 'Data Nilai Kuliah')
@section('konten')

    <h2>Tambah Data Nilai Kuliah</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('nilaikuliah.store') }}" method="post">
        {{ csrf_field() }}

        <div class="row mb-3">
            <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="text" name="NRP" id="NRP" class="form-control" maxlength="6" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="text" name="NilaiAngka" id="NilaiAngka" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="number" name="SKS" id="SKS" class="form-control" required>
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
            let nrp = document.getElementById('NRP').value.trim();
            let nilaiAngka = document.getElementById('NilaiAngka').value.trim();
            let sks = document.getElementById('SKS').value.trim();

            if (nrp === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nrp.length > 10) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP maksimal 6 karakter",
                    icon: "error"
                });
                return false;
            }

            if (nilaiAngka === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nilai Angka wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (sks === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "SKS wajib diisi",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
