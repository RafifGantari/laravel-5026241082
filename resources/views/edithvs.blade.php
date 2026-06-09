@extends('template')

@section('judul_halaman', 'Edit Kertas HVS')

@section('konten')
<a href="/kertashvs" class="btn btn-secondary mb-4">Kembali</a>

@foreach ($kertashvs as $k)
<div class="card">
    <div class="card-header">
        Form Edit Data Kertas HVS
    </div>

    <div class="card-body">
        <form action="/kertashvs/update" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="kodekertashvs" value="{{ $k->kodekertashvs }}">

            <div class="row mb-3">
                <label for="merkkertashvs" class="col-sm-2 col-form-label">
                    Merk Kertas HVS
                </label>
                <div class="col-sm-10">
                    <input type="text"
                           name="merkkertashvs"
                           id="merkkertashvs"
                           class="form-control"
                           required
                           value="{{ $k->merkkertashvs }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="stockkertashvs" class="col-sm-2 col-form-label">
                    Stok Kertas HVS
                </label>
                <div class="col-sm-10">
                    <input type="number"
                           name="stockkertashvs"
                           id="stockkertashvs"
                           class="form-control"
                           required
                           value="{{ $k->stockkertashvs }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="tersedia" class="col-sm-2 col-form-label">
                    Tersedia
                </label>
                <div class="col-sm-10">
                    <select name="tersedia" id="tersedia" class="form-control">
                        <option value="Y" {{ $k->tersedia == 'Y' ? 'selected' : '' }}>
                            Ya
                        </option>
                        <option value="N" {{ $k->tersedia == 'N' ? 'selected' : '' }}>
                            Tidak
                        </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                </div>
            </div>

        </form>
    </div>
</div>
@endforeach
@endsection
