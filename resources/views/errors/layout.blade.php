<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - ArtaOtto</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .nav-link { @apply text-gray-600 hover:text-indigo-600 font-medium transition-colors; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 pt-20 flex flex-col min-h-screen font-sans">
    <!-- Navbar (Simplified for Errors) -->
    <nav class="fixed top-0 left-0 right-0 bg-white/80 backdrop-blur-md border-b border-gray-100 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center space-x-2">
                        <span class="text-3xl font-black text-indigo-600 tracking-tighter italic uppercase">ArtaOtto</span>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                    <a href="{{ url('/product') }}" class="nav-link">Product</a>
                    <a href="{{ url('/customer-service') }}" class="nav-link">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl w-full bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden relative">
            <!-- Accent Top Bar -->
            <div class="absolute top-0 left-0 w-full h-2 bg-indigo-600"></div>
            
            <div class="p-10 md:p-16 text-center">
                <!-- Icon/Illustration -->
                <div class="mb-8 flex justify-center">
                    <div class="w-24 h-24 bg-indigo-50 rounded-full flex items-center justify-center text-indigo-600 shadow-inner">
                        @yield('icon')
                    </div>
                </div>
                
                <!-- Error Code & Title -->
                <h1 class="text-7xl md:text-8xl font-black text-gray-900 tracking-tighter mb-4">@yield('code')</h1>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6 uppercase tracking-tight">@yield('title')</h2>
                
                <!-- Error Message -->
                <p class="text-gray-500 text-lg mb-10 leading-relaxed max-w-lg mx-auto">
                    @yield('message')
                </p>
                
                <!-- Actions -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ url('/') }}" class="w-full sm:w-auto bg-indigo-600 text-white px-8 py-3.5 rounded-full font-bold hover:bg-indigo-700 transition-all shadow-md active:scale-95 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                        Kembali ke Home
                    </a>
                    
                    @hasSection('action')
                        @yield('action')
                    @endif
                </div>
            </div>
        </div>
    </main>

    <!-- Simplified Footer -->
    <footer class="bg-indigo-950 text-white py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-xl font-black text-indigo-400 mb-2 tracking-tighter italic uppercase">ArtaOtto</h3>
            <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} ArtaOtto. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
