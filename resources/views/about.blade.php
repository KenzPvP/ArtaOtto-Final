@extends('layouts.app')

@section('content')
    <!-- 1. HERO ABOUT SECTION (Fitur 1) -->
    <section class="relative h-[60vh] min-h-[500px] flex items-center overflow-hidden bg-slate-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=2070&auto=format&fit=crop" 
                 alt="Clinic Background" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-slate-900/70"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Kiri: Text Content -->
                <div class="text-white">
                    <span class="inline-block bg-orange-500 text-white px-4 py-1 rounded-full text-sm font-bold uppercase tracking-widest mb-4">PROFILE</span>
                    <h1 class="text-6xl lg:text-8xl font-black mb-8 tracking-tighter uppercase">ArtaOtto</h1>
                    <div class="space-y-6 max-w-xl">
                        <p class="text-xl text-slate-200 leading-relaxed font-bold">
                            Your local partner for carefully selected orthodontic products from global manufacturers.
                        </p>
                        <p class="text-lg text-slate-300 leading-relaxed">
                            We help Indonesian dentists access reliable orthodontic solutions with clear product information, responsive communication, and practical support before and after purchase.
                        </p>
                    </div>
                </div>

                <!-- Kanan: Orange Circle Decor -->
                <div class="hidden lg:flex justify-end pr-0">
                    <div class="w-96 h-96 bg-white rounded-full flex items-center justify-center translate-x-32 shadow-2xl relative">
                        <!-- Abstract Logo Placeholder -->
                        <img src="{{ asset('images/LogoArtaWarna.png') }}" alt="Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. CORE VALUES SECTION (Fitur 2 - Zig-Zag Layout) -->
    <section class="py-0">
        <!-- Row 1: Innovation (Navy) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 bg-slate-900 items-stretch">
            <div class="p-16 lg:p-24 flex items-center justify-center">
                <div class="text-white text-center flex flex-col items-center">
                    <div class="w-24 h-24 bg-indigo-500/20 rounded-full flex items-center justify-center mb-8 border border-indigo-400">
             
	                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
		                    <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 2.38 1.19 4.47 3 5.74V17a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2.26c1.81-1.27 3-3.36 3-5.74a7 7 0 0 0-7-7M9 21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1H9z" />
	                    </svg>


                    </div>
                    <h2 class="text-4xl font-black uppercase tracking-tighter mb-4">Orthodontic Focus</h2>
                    <p class="text-lg text-slate-300 leading-relaxed max-w-md mx-auto">
                        We focus on orthodontic products, allowing us to better understand the needs of orthodontists and their clinical preferences.
                    </p>
                </div>
            </div>
            <div class="hidden lg:block bg-indigo-600">
                <img src="https://plus.unsplash.com/premium_photo-1673728776661-8775a1b74d42?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjR8fGlubm92YXRpb24lMjBkZW50YWx8ZW58MHx8MHx8fDA%3D" class="w-full h-full object-cover grayscale opacity-50" alt="Innovation">
            </div>
        </div>

        <!-- Row 2: Quality (Orange) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 bg-orange-500 items-stretch">
            <div class="hidden lg:block bg-orange-600 order-1">
                <img src="https://images.unsplash.com/photo-1468493858157-0da44aaf1d13?q=80&w=1770&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-50" alt="Quality">
            </div>
            <div class="p-16 lg:p-24 flex items-center justify-center order-2">
                <div class="text-white text-center flex flex-col items-center">
                    <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center mb-8 border border-white/40 text-white">
                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    </div>
                    <h2 class="text-4xl font-black uppercase tracking-tighter mb-4">Curated Global Products</h2>
                    <p class="text-xl text-orange-50 leading-relaxed max-w-md mx-auto">
                        We bring carefully selected orthodontic products from international manufacturers closer to Indonesian practices.
                    </p>
                </div>
            </div>
        </div>

        <!-- Row 3: Support (Navy) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 bg-slate-900 items-stretch">
            <div class="p-16 lg:p-24 flex items-center justify-center">
                <div class="text-white text-center flex flex-col items-center">
                    <div class="w-24 h-24 bg-indigo-500/20 rounded-full flex items-center justify-center mb-8 border border-indigo-400">
                        <svg class="w-12 h-12 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    </div>
                    <h2 class="text-4xl font-black uppercase tracking-tighter mb-4">Responsive Local Support</h2>
                    <p class="text-lg text-slate-300 leading-relaxed max-w-md mx-auto">
                        We support dentists with clear product information, trial assistance, ordering support, and practical after-sales communication.
                    </p>
                </div>
            </div>
            <div class="hidden lg:block bg-indigo-700">
                <img src="https://images.unsplash.com/photo-1591283261401-c76eba2d369a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fGRlbnRhbCUyMGNsaW5pY3xlbnwwfHwwfHx8MA%3D%3D" class="w-full h-full object-cover grayscale opacity-50" alt="Support">
            </div>
        </div>

        <!-- Row 4: Distribution (Orange) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 bg-orange-500 items-stretch">
            <div class="hidden lg:block bg-orange-600 order-1">
                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=1770&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-50" alt="Distribution">
            </div>
            <div class="p-16 lg:p-24 flex items-center justify-center order-2">
                <div class="text-white text-center flex flex-col items-center">
                    <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center mb-8 border border-white/40 text-white">
                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h2 class="text-4xl font-black uppercase tracking-tighter mb-4">Clinically Relevant Selection</h2>
                    <p class="text-xl text-orange-50 leading-relaxed max-w-md mx-auto">
                        We select products based on their relevance to orthodontic practice, patient needs, and everyday clinical workflow.
                    </p>
                </div>
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
