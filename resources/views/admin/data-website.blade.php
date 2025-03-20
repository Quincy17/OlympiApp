@extends('layouts.app')
@section('content')
    @if(Auth::check() && Auth::user()->role === 'admin')
        @include('admin.sidebar')  
    @endif

<div class="container">
    <h2>Data Website</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Jenis Data</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Total Soal</td>
                <td>{{ $totalSoal }}</td>
            </tr>
            <tr>
                <td>Total Aktivitas yang Tercatat</td>
                <td>{{ $totalLogs }}</td>
            </tr>
            <tr>
                <td>Total Unduhan Soal</td>
                <td>{{ $totalUnduhan }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
