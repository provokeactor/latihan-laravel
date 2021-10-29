@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <h3>Ubah Data Siswa</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
        @csrf
        @method('PUT')
        <ul class="list-group">
            Nama <input type="text" name="nama" required value="{{ $siswa->nama }}">
            NIS <input type="text" name="nis" required value="{{ $siswa->nis }}">
            Tanggal Lahir <input type="date" name="tgl_lahir" required value="{{ $siswa->tgl_lahir }} }}">
        </ul>
        <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
        <input type="submit" value="Ubah Data" class="btn btn-success">
    </form>
    </div>
</div>
    
@endsection