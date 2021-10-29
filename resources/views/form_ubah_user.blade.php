@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card w-70">
    <div class="card-header">
        <h3>Ubah Data User</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <ul class="list-group">
            Nama <input type="text" name="name" required value="{{ $user->name }}">
            Role <input type="text" name="role" required value="{{ $user->role }}">
            Email <input type="email" name="email" required value="{{ $user->email }}">
        </ul>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
        <input type="submit" value="Ubah Data" class="btn btn-success">
    </form>
    </div>
    </div>
</div>
    
@endsection