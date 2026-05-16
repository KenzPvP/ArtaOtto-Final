@extends('errors.layout')

@section('title', 'Too Many Requests')
@section('code', '429')
@section('message', 'Anda telah mengirimkan terlalu banyak permintaan dalam waktu singkat. Harap tunggu beberapa saat sebelum mencoba mengakses kembali.')

@section('icon')
<svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
</svg>
@endsection
