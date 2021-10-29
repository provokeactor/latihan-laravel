@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Profil User</h3>
        </div>
        <div class="card-body">
            <div class="row ml-2">
                <h5 class="col-4">Nama</h5>
                <h5>: {{ $user->name }}</h5>
            </div>
            <div class="row ml-2">
                <h5 class="col-4">Role</h5>
                <h5>: {{ $user->role }}</h5>
            </div>
            <div class="row ml-2">
                <h5 class="col-4">Email</h5>
                <h5>: {{ $user->email }}</h5>
            </div>
        </div>
        @can('isAdmin')
        <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
        @endcan
    </div>
</div>
    
@endsection