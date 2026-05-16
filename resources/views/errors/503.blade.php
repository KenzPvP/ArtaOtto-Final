@extends('errors.layout')

@section('title', 'Service Unavailable')
@section('code', '503')
@section('message', 'Kami sedang melakukan pemeliharaan rutin untuk meningkatkan layanan kami. Kami akan segera kembali dalam beberapa saat. Terima kasih atas kesabaran Anda.')

@section('icon')
<svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
</svg>
@endsection
