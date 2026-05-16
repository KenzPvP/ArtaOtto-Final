@extends('errors.layout')

@section('title', 'Page Expired')
@section('code', '419')
@section('message', 'Sesi Anda telah kedaluwarsa karena tidak ada aktivitas. Silakan muat ulang halaman ini untuk melanjutkan kembali.')

@section('icon')
<svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
@endsection

@section('action')
<button onclick="window.location.reload()" class="w-full sm:w-auto bg-white text-gray-700 px-8 py-3.5 rounded-full font-bold hover:bg-gray-50 transition-all border border-gray-200 flex items-center justify-center shadow-sm">
    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
    Muat Ulang Halaman
</button>
@endsection
