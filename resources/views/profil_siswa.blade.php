@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Profil Siswa</h3>
        </div>
        <div class="card-body">
            <div class="row ml-2">
                <h5 class="col-4">Nama</h5>
                <h5>: {{ $siswa->nama }}</h5>
            </div>
            <div class="row ml-2">
                <h5 class="col-4">NIS</h5>
                <h5>: {{ $siswa->nis }}</h5>
            </div>
            <div class="row ml-2">
                <h5 class="col-4">Tanggal Lahir</h5>
                <h5>: {{ $siswa->tgl_lahir }}</h5>
            </div>
        </div>
        @can('isAdmin')
        <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
        @endcan
    </div>
</div>
    
@endsection