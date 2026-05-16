@extends('errors.layout')

@section('title', 'Forbidden')
@section('code', '403')
@section('message', 'Akses terlarang. Anda tidak memiliki hak akses yang cukup untuk melihat sumber daya ini atau sesi Anda telah dibatasi oleh sistem.')

@section('icon')
<svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
</svg>
@endsection
