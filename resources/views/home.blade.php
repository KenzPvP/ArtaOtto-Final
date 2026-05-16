@extends('layouts.app')

@section('content')
    <!-- 1. Hero Section (Fitur 3) -->
    <!-- 1. Hero Section (FULL SCREEN) -->
    <section class="min-h-screen bg-white flex items-center overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Kiri: Text -->
                <div class="z-10 text-center lg:text-left">
                    <h1 class="text-5xl lg:text-7xl font-extrabold text-[#262A6A] leading-tight mb-6 tracking-tighter">
                        {!! getSetting('hero_title', 'Welcome to <span class="text-[#F47C21]">ArtaOtto</span>') !!}
                    </h1>

                    <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                        {{ getSetting('hero_desc', 'We partner with Indonesian dentists to bring carefully selected orthodontic products from global manufacturers closer to their practices. Beyond providing high-quality products, we support doctors with clear product information, responsive communication, and practical assistance before and after purchase.') }}
                    </p>

                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                        <a href="{{ route('products.index') }}" 
                        class="bg-indigo-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-indigo-700 transition-all shadow-xl hover:-translate-y-1">
                            Explore Products
                        </a>

                        <a href="#contact" 
                        class="bg-gray-100 text-gray-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-200 transition-all">
                            Contact Us
                        </a>
                    </div>
                </div>

                <!-- Kanan: Dynamic Full-Frame Logo Slider -->
                <div class="flex justify-center lg:justify-end relative">
                    <div class="absolute -inset-10 bg-indigo-50 rounded-full blur-3xl opacity-60"></div>

                    @php
                        $sliderImages = \App\Models\SliderImage::orderBy('created_at', 'asc')->get();
                        // Provide default dummy array if empty
                        if($sliderImages->count() === 0){
                            $sliderImages = collect([
                                (object)['image_path' => 'images/logo1.png', 'is_default' => true],
                                (object)['image_path' => 'images/logo2.png', 'is_default' => true],
                                (object)['image_path' => 'images/logo3.png', 'is_default' => true]
                            ]);
                        }
                        $totalSlides = $sliderImages->count();
                    @endphp

                    <!-- Dynamic JS Slider Container (No Frame/Padding) -->
                    <div class="relative bg-white rounded-[3rem] shadow-2xl flex flex-col items-center justify-center aspect-square w-full max-w-md overflow-hidden">
                        
                        <!-- 1. Struktur HTML card slider -->
                        <!-- Slider Track Container -->
                        <div class="w-full h-full relative overflow-hidden flex items-center justify-center">
                            <!-- Horizontal Track untuk Smooth Transition -->
                            <div class="flex w-full h-full transition-transform duration-500 ease-in-out items-center" id="logoSliderTrack">
                                
                                @foreach($sliderImages as $slider)
                                <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                                    <img src="{{ isset($slider->is_default) ? asset($slider->image_path) : asset('storage/' . $slider->image_path) }}" alt="Slider Image {{ $loop->iteration }}" class="w-full h-full object-cover">
                                </div>
                                @endforeach

                            </div>
                        </div>
                        
                        <!-- Indicator dot -->
                        <div class="absolute bottom-6 flex space-x-3">
                            @foreach($sliderImages as $index => $slider)
                            <button onclick="changeSlide({{ $index }})" class="slider-dot w-3 h-3 rounded-full transition-colors duration-300 {{ $index === 0 ? 'bg-blue-600' : 'bg-gray-300' }}" aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                    </div>
                </div>

                    <!-- JavaScript sederhana untuk Slider Logic & Auto Slide -->
                    <script>
                        let currentSlide = 0;
                        const totalSlides = {{ $totalSlides }};
                    
                    function changeSlide(index) {
                        currentSlide = index;
                        updateSlider();
                    }

                    function updateSlider() {
                        // Geser track secara horizontal
                        const track = document.getElementById('logoSliderTrack');
                        if (track) {
                            track.style.transform = `translateX(-${currentSlide * 100}%)`;
                        }

                        // Update interaksi warna pada indicator dots (Aktif -> Biru, Tidak Aktif -> Abu)
                        const dots = document.querySelectorAll('.slider-dot');
                        dots.forEach((dot, idx) => {
                            if (idx === currentSlide) {
                                dot.classList.replace('bg-gray-300', 'bg-blue-600');
                            } else {
                                dot.classList.replace('bg-blue-600', 'bg-gray-300');
                            }
                        });
                    }

                    // 5. Auto slide function (setiap 3 detik / 3000ms)
                    setInterval(() => {
                        currentSlide = (currentSlide + 1) % totalSlides;
                        updateSlider();
                    }, 3000);
                </script>

            </div>
        </div>
    </section>

    <!-- 2. Company Introduction (Fitur 4) -->
    <section class="relative py-24 bg-orange-500 overflow-hidden">
        <!-- Background Decor (Simulating medical theme) -->
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0,50 Q25,30 50,50 T100,50" fill="none" stroke="currentColor" stroke-width="0.5" />
                <path d="M0,70 Q25,50 50,70 T100,70" fill="none" stroke="currentColor" stroke-width="0.5" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-white uppercase tracking-tighter mb-4">Why Choose Us?</h2>
                <div class="h-1.5 w-24 bg-white mx-auto rounded-full"></div>
            </div>

            <!-- Floating Feature Cards (2x2 Grid) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Card 1 -->
                <div class="bg-white p-10 rounded-3xl shadow-lg border border-gray-100 flex flex-col items-center text-center hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center text-indigo-600 mb-6">
	                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
		                    <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 2.38 1.19 4.47 3 5.74V17a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2.26c1.81-1.27 3-3.36 3-5.74a7 7 0 0 0-7-7M9 21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1H9z" />
	                    </svg>

                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Orthodontic Focus</h3>
                    <p class="text-gray-500">We focus on orthodontic products, allowing us to better understand the needs of orthodontists and their clinical preferences.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-10 rounded-3xl shadow-lg border border-gray-100 flex flex-col items-center text-center hover:shadow-2xl transition-all hover:-translate-y-2 lg:translate-y-8">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 mb-6">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Curated Global Products</h3>
                    <p class="text-gray-500">We bring carefully selected orthodontic products from international manufacturers closer to Indonesian practices.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-10 rounded-3xl shadow-lg border border-gray-100 flex flex-col items-center text-center hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center text-yellow-600 mb-6">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Responsive Local Support</h3>
                    <p class="text-gray-500">We support dentists with clear product information, trial assistance, ordering support, and practical aftersales communication.</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-white p-10 rounded-3xl shadow-lg border border-gray-100 flex flex-col items-center text-center hover:shadow-2xl transition-all hover:-translate-y-2 lg:translate-y-8">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center text-red-600 mb-6">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Clinically Relevant Selection</h3>
                    <p class="text-gray-500">We select products based on their relevance to orthodontic practice, patient needs, and everyday clinical workflow.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Product Preview (Fitur 5) -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 space-y-4 md:space-y-0 text-center md:text-left">
                <div>
                    <h2 class="text-4xl font-black text-gray-900 uppercase tracking-tighter">Line Up Product</h2>
                    <p class="text-gray-500 mt-2">Preview koleksi alat dental terbaru dari ArtaOtto.</p>
                </div>
                <a href="{{ route('products.index') }}" class="text-indigo-600 font-bold hover:underline flex items-center group">
                    View All Products 
                    <svg class="ml-1 w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                </a>
            </div>

            <!-- Grid 6 Produk -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mb-16">
                @foreach($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('products.index') }}" class="inline-block border-2 border-indigo-600 text-indigo-600 px-10 py-4 rounded-full font-bold text-lg hover:bg-indigo-600 hover:text-white transition-all shadow-lg active:scale-95">
                    More Products
                </a>
            </div>
        </div>
    </section>

    <!-- 4. Contact Us (Fitur 7) -->
    <section id="contact" class="py-24 bg-orange-500 text-white overflow-hidden relative">
        <!-- Decor Circle -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-orange-400 rounded-full opacity-50"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Kolom Kiri: Contact Info -->
                <div>
                    <h2 class="text-5xl font-black mb-8 uppercase tracking-tighter">Get In Touch</h2>
                    <p class="text-orange-100 text-lg mb-12 leading-relaxed">
                        {{ getSetting('contact_info', 'Have questions about our products? Our team is ready to help you with product information and availability. Contact us through the details below or send us a message through the form.') }}
                    </p>
                    
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="bg-orange-600 p-3 rounded-xl mt-1">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl uppercase mb-1">Office Address</h4>
                                <p class="text-orange-100">Jl. Dental Raya No. 123, Jakarta Selatan, Indonesia</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-orange-600 p-3 rounded-xl mt-1">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl uppercase mb-1">Email Inquiry</h4>
                                <p class="text-orange-100">info@artaotto.com</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-orange-600 p-3 rounded-xl mt-1">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl uppercase mb-1">Call Center</h4>
                                <p class="text-orange-100">(021) 1234567 / +62 812 3456 7890</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Contact Form -->
                <div class="bg-white p-8 lg:p-12 rounded-[2rem] shadow-2xl text-gray-900 border border-orange-100">
                    {{-- Success/Error Messages --}}
                    @if(session('success'))
                        <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl text-sm font-medium">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm font-medium">
                            {{ session('error') }}
                        </div>
                    @endif

                    <h3 class="text-2xl font-black uppercase tracking-tight text-gray-900 mb-6">Send Us an Inquiry</h3>

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                        @csrf

                        {{-- Row 1: Name & WhatsApp --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1.5">Full Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your full name"
                                    class="w-full bg-gray-50 border {{ $errors->has('name') ? 'border-red-400' : 'border-gray-200' }} p-3.5 rounded-xl focus:ring-2 focus:ring-orange-500 outline-none transition-all text-sm">
                                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1.5">WhatsApp Number</label>
                                <input type="text" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="08xxxxxxxxxx"
                                    class="w-full bg-gray-50 border {{ $errors->has('whatsapp') ? 'border-red-400' : 'border-gray-200' }} p-3.5 rounded-xl focus:ring-2 focus:ring-orange-500 outline-none transition-all text-sm">
                                @error('whatsapp') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Row 2: Email & Clinic --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1.5">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="you@clinic.com"
                                    class="w-full bg-gray-50 border {{ $errors->has('email') ? 'border-red-400' : 'border-gray-200' }} p-3.5 rounded-xl focus:ring-2 focus:ring-orange-500 outline-none transition-all text-sm">
                                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1.5">Clinic / Institution</label>
                                <input type="text" name="clinic" value="{{ old('clinic') }}" placeholder="Name of your clinic or institution"
                                    class="w-full bg-gray-50 border {{ $errors->has('clinic') ? 'border-red-400' : 'border-gray-200' }} p-3.5 rounded-xl focus:ring-2 focus:ring-orange-500 outline-none transition-all text-sm">
                                @error('clinic') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Row 3: Profession & Inquiry Type --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1.5">Profession / Role</label>
                                <select name="profession"
                                    class="w-full bg-gray-50 border {{ $errors->has('profession') ? 'border-red-400' : 'border-gray-200' }} p-3.5 rounded-xl focus:ring-2 focus:ring-orange-500 outline-none transition-all text-sm appearance-none cursor-pointer">
                                    <option value="" disabled {{ old('profession') ? '' : 'selected' }}>Select your role</option>
                                    <option value="Orthodontist"                        {{ old('profession') == 'Orthodontist' ? 'selected' : '' }}>Orthodontist</option>
                                    <option value="Dentist"                             {{ old('profession') == 'Dentist' ? 'selected' : '' }}>Dentist</option>
                                    <option value="Orthodontic Resident"                {{ old('profession') == 'Orthodontic Resident' ? 'selected' : '' }}>Orthodontic Resident</option>
                                    <option value="Clinic Owner / Manager"              {{ old('profession') == 'Clinic Owner / Manager' ? 'selected' : '' }}>Clinic Owner / Manager</option>
                                    <option value="Dental Procurement / Purchasing Team" {{ old('profession') == 'Dental Procurement / Purchasing Team' ? 'selected' : '' }}>Dental Procurement / Purchasing Team</option>
                                    <option value="Dental Student"                      {{ old('profession') == 'Dental Student' ? 'selected' : '' }}>Dental Student</option>
                                    <option value="Other"                               {{ old('profession') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('profession') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1.5">Inquiry Type</label>
                                <select name="inquiry_type"
                                    class="w-full bg-gray-50 border {{ $errors->has('inquiry_type') ? 'border-red-400' : 'border-gray-200' }} p-3.5 rounded-xl focus:ring-2 focus:ring-orange-500 outline-none transition-all text-sm appearance-none cursor-pointer">
                                    <option value="" disabled {{ old('inquiry_type') ? '' : 'selected' }}>Select inquiry type</option>
                                    <option value="Product Information"     {{ old('inquiry_type') == 'Product Information' ? 'selected' : '' }}>Product Information</option>
                                    <option value="Price List Request"      {{ old('inquiry_type') == 'Price List Request' ? 'selected' : '' }}>Price List Request</option>
                                    <option value="Product Availability"    {{ old('inquiry_type') == 'Product Availability' ? 'selected' : '' }}>Product Availability</option>
                                    <option value="After-Sales Support"     {{ old('inquiry_type') == 'After-Sales Support' ? 'selected' : '' }}>After-Sales Support</option>
                                    <option value="Other"                   {{ old('inquiry_type') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('inquiry_type') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Message --}}
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1.5">Message</label>
                            <textarea rows="4" name="message" placeholder="Tell us about your needs..."
                                class="w-full bg-gray-50 border {{ $errors->has('message') ? 'border-red-400' : 'border-gray-200' }} p-3.5 rounded-xl focus:ring-2 focus:ring-orange-500 outline-none transition-all resize-none text-sm">{{ old('message') }}</textarea>
                            @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <button type="submit" class="w-full bg-orange-600 text-white font-bold py-4 rounded-xl hover:bg-orange-700 shadow-lg active:scale-95 transition-all text-base uppercase tracking-wide">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
