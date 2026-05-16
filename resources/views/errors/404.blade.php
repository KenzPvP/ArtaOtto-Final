@extends('errors.layout')

@section('title', 'Page Not Found')
@section('code', '404')
@section('message', 'Halaman yang Anda cari tidak ditemukan. Mungkin URL tidak valid, produk sudah tidak tersedia, atau halaman telah dipindahkan.')

@section('icon')
<svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
</svg>
@endsection

@section('action')
<button onclick="window.history.back()" class="w-full sm:w-auto bg-white text-gray-700 px-8 py-3.5 rounded-full font-bold hover:bg-gray-50 transition-all border border-gray-200 flex items-center justify-center shadow-sm">
    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
    Kembali ke Sebelumnya
</button>
@endsection
