@extends('layouts.app')
@section('content')
@if(Auth::check() && Auth::user()->role === 'admin')
        @include('admin.sidebar')  
    @endif

<div class="container">
    <h2>Edit Modul</h2>
    <form action="{{ route('soal.update', $soal) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul Soal</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $soal->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $soal->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('soal.index') }}" class="btn btn-danger">Batal</a>
    </form>
</div>
@endsection

        