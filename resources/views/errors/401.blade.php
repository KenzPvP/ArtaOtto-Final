@extends('errors.layout')

@section('title', 'Unauthorized')
@section('code', '401')
@section('message', 'Akses ditolak. Anda tidak memiliki izin yang diperlukan untuk melihat halaman ini. Silakan login dengan akun yang memiliki otorisasi.')

@section('icon')
<svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
</svg>
@endsection

@section('action')
<a href="{{ route('admin.login') }}" class="w-full sm:w-auto bg-white text-indigo-700 px-8 py-3.5 rounded-full font-bold hover:bg-gray-50 transition-all border border-gray-200 flex items-center justify-center shadow-sm">
    Login Admin
</a>
@endsection
