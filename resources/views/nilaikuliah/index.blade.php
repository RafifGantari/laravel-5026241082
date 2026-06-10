@extends('template')
@section('judul_halaman', 'Data Nilai Kuliah')
@section('konten')
    <a href="/nilaikuliah/create" class="btn btn-primary my-4"> Tambah Data</a>

    <table class="table table-striped table-hover"
	{{-- border="2" --}}
	>
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    {{
                        $n->NilaiHuruf
                        = ($n->NilaiAngka >= 81) ? 'A' :
                          (($n->NilaiAngka >= 61) ? 'B' :
                          (($n->NilaiAngka >= 41) ? 'C' : 'D'))}}
                </td>
                <td>{{ $n->NilaiAngka * $n->SKS }}</td>
            </tr>
        @endforeach
    </table>
	{{ $nilaikuliah->links() }}
	{{-- back & next --}}
@endsection

{{-- <?php
echo $nilaikuliah;
?> --}}
