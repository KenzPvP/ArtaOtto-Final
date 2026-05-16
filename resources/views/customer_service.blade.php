@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Hero Section -->
    <div class="flex flex-col md:flex-row items-center justify-between mb-24 gap-12">
        <div class="md:w-1/2">
            <h1 class="text-6xl font-extrabold text-[#111827] mb-4 relative">
                Contact Us
                <span class="block w-16 h-1 bg-orange-500 mt-2"></span>
            </h1>
            <p class="text-2xl text-gray-700 leading-relaxed max-w-md">
                Have questions about our products and availability? Our team is ready to help.
            </p>
        </div>
        <div class="md:w-1/2 flex justify-end">
            <img src="{{ asset('images/dental_hero_contact.png') }}" alt="Contact Us" class="w-80 h-48 object-cover rounded-2xl shadow-sm">
        </div>
    </div>

    <!-- Support Section Header -->
    <div class="text-center mb-16">
        <h2 class="text-3xl font-extrabold text-[#111827] mb-4">How We Support Your Practice</h2>
        <div class="w-12 h-0.5 bg-orange-300 mx-auto mb-6"></div>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Our team is ready to assist you with product information, ordering support, and after-sales communication.
        </p>
    </div>

    <!-- Support Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
        <!-- Card 1 -->
        <div class="bg-white p-10 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 flex items-start space-x-6">
            <div class="flex-shrink-0">
                <div class="w-16 h-16 bg-orange-50 rounded-full flex items-center justify-center text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                    </svg>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-bold text-[#111827] mb-3">Product Information & Consultation</h3>
                <p class="text-gray-600 leading-relaxed">
                    Need help choosing the right product? We can assist you with product details, bracket options, and product availability based on your clinic's needs.
                </p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-10 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 flex items-start space-x-6">
            <div class="flex-shrink-0">
                <div class="w-16 h-16 bg-orange-50 rounded-full flex items-center justify-center text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path fill="#ed8936" d="M18 18.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5s.67 1.5 1.5 1.5m1.5-9H17V12h4.46zM6 18.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5s.67 1.5 1.5 1.5M20 8l3 4v5h-2c0 1.66-1.34 3-3 3s-3-1.34-3-3H9c0 1.66-1.34 3-3 3s-3-1.34-3-3H1V6c0-1.11.89-2 2-2h14v4zM3 6v9h.76c.55-.61 1.35-1 2.24-1s1.69.39 2.24 1H15V6z" />
                    </svg>


                </div>
            </div>
            <div>
                <h3 class="text-xl font-bold text-[#111827] mb-3">Ordering & Delivery</h3>
                <p class="text-gray-600 leading-relaxed">
                    We help you check stock availability, confirm your order, and arrange delivery safely to your clinic with clear communication throughout the process.
                </p>
            </div>
        </div>
    </div>

   
</div>

 <!-- 4. Contact Us (Fitur 7) -->
    <section id="contact" class="py-24 bg-orange-500 text-white overflow-hidden relative">
        <!-- Decor Circle -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-orange-400 rounded-full opacity-50"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Kolom Kiri: Contact Info -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-4xl font-extrabold text-white mb-4 tracking-tight">Direct Contact</h2>
                        <p class="text-orange-100 text-lg mb-8 leading-relaxed">
                            Prefer to speak with us directly?<br>
                            Reach out through the channels below.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 gap-4 max-w-md">
                        {{-- WhatsApp Card --}}
                        <a href="{{ generateWhatsappLink('Bantuan Customer Service') }}" target="_blank" 
                           class="bg-white p-4 rounded-2xl flex items-center space-x-4 shadow-sm hover:shadow-md transition-all group">
                            <div class="bg-indigo-50 p-3 rounded-xl group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.432 5.631 1.433h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">WhatsApp</p>
                                <p class="text-gray-900 font-bold">+62 812-3456-7890</p>
                            </div>
                        </a>

                        {{-- Email Card --}}
                        <a href="mailto:info@artaotto.com" 
                           class="bg-white p-4 rounded-2xl flex items-center space-x-4 shadow-sm hover:shadow-md transition-all group">
                            <div class="bg-indigo-50 p-3 rounded-xl group-hover:bg-indigo-100 transition-colors">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Email</p>
                                <p class="text-gray-900 font-bold">info@artaotto.com</p>
                            </div>
                        </a>
                    </div>

                    {{-- Map/Address Card --}}
                    <a href="https://maps.google.com/?q=Jl.+Kesehatan+No.123,+Kuningan,+Jakarta+Selatan" target="_blank"
                       class="bg-white rounded-2xl flex items-center overflow-hidden max-w-lg shadow-sm hover:shadow-md transition-all group">
                        
                        {{-- Kiri: Icon + Alamat --}}
                        <div class="p-4 flex-1 flex items-center space-x-4 min-w-0">
                            <div class="bg-indigo-50 p-3 rounded-xl group-hover:bg-indigo-100 transition-colors shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Office Address</p>
                                <p class="text-gray-900 font-bold">Jakarta, Indonesia</p>
                                <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">Jl. Kesehatan No.123, Kuningan</p>
                            </div>
                        </div>

                        {{-- Kanan: Google Maps Embed --}}
                        <div class="w-32 self-stretch overflow-hidden">
                            <iframe
                                class="w-full h-full grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all pointer-events-none"
                                style="border:0;"
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://maps.google.com/maps?q=-6.2088,106.8456&t=m&z=13&output=embed&iwloc=near">
                            </iframe>
                        </div>
                    </a>
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

            <!-- WhatsApp Banner - Aligned with Form -->
            <div class="mt-20 bg-indigo-50 rounded-[2rem] p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8 w-full shadow-lg">
                <div class="text-left">
                    <h2 class="text-2xl font-extrabold mb-2" style="color: black !important;">Need a Faster Response?</h2>
                    <p class="text-lg" style="color: #4b5563 !important;">
                        Chat with our team on WhatsApp for product information, availability, or trial requests.
                    </p>
                </div>
                <div class="flex-shrink-0">
                    <a href="{{ generateWhatsappLink('Bantuan Customer Service') }}" target="_blank" class="bg-indigo-600 text-white px-8 py-4 rounded-2xl font-bold hover:bg-indigo-700 transition-all shadow-xl active:scale-95 flex items-center space-x-3">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.432 5.631 1.433h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            <span>Contact Us on WhatsApp</span>
                        </a>
                    </div>
            </div>
        </div>
    </section>
@endsection
