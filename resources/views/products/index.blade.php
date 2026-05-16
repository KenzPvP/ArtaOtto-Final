@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Hero Section / Title -->
    <div class="mb-16 text-center">
        <h1 class="text-5xl font-black text-gray-900 mb-4 uppercase tracking-tighter">Our Brands</h1>
        
    </div>

    @forelse($brands as $brand)
        <!-- Brand Section -->
        <div class="mb-24">
            <!-- Brand Profile Card -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-10 transition-shadow hover:shadow-md">
                <div class="flex flex-col md:flex-row items-center md:items-stretch">
                    <!-- Logo Section (Left) -->
                    <div class="w-full md:w-1/3 flex-shrink-0 bg-gray-50 flex items-center justify-center p-8 border-b md:border-b-0 md:border-r border-gray-100">
                        @if($brand->logo_path)
                            <img src="{{ asset('storage/' . $brand->logo_path) }}" alt="{{ $brand->name }} Logo" class="max-h-50 object-contain transition-transform duration-300 hover:scale-105">
                        @else
                            <div class="h-32 flex items-center justify-center">
                                <span class="text-3xl font-black text-gray-300 uppercase tracking-widest text-center">{{ $brand->name }}</span>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Description Section (Right) -->
                    <div class="w-full md:w-2/3 p-8 flex flex-col justify-center">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">{{ $brand->name }}</h2>
                            <a href="{{ route('brands.public.show', $brand->id) }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 flex items-center transition-colors">
                                View Brand
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                            </a>
                        </div>
                        
                        @if($brand->tagline)
                            <p class="text-lg font-medium text-indigo-600 mb-3">{{ $brand->tagline }}</p>
                        @endif
                        
                        @if($brand->description)
                            <p class="text-gray-600 leading-relaxed">{{ $brand->description }}</p>
                        @else
                            <p class="text-gray-400 italic text-sm">Brand description not available.</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Product Display Logic (Fitur: Slider vs Grid) -->
            @php $productCount = $brand->products->count(); @endphp

            @if($productCount > 3)
                <!-- SLIDER CONTAINER (Jika > 3 Produk) -->
                <div class="relative group/slider" id="slider-container-{{ $brand->id }}">
                    <!-- Arrow Left -->
                    <button onclick="scrollSlider('{{ $brand->id }}', 'left')" 
                            class="absolute left-0 top-1/2 -translate-y-12 -translate-x-6 z-30 bg-white shadow-xl rounded-full p-4 text-indigo-600 border border-gray-100 opacity-0 group-hover/slider:opacity-100 transition-all hover:bg-indigo-600 hover:text-white active:scale-90">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" /></svg>
                    </button>

                    <!-- Slider Wrapper -->
                    <div id="slider-{{ $brand->id }}" 
                         class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-smooth space-x-8 pb-8 px-2">
                        @foreach($brand->products as $product)
                            <div class="flex-none w-full sm:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.334rem)] snap-start">
                                <x-product-card :product="$product" />
                            </div>
                        @endforeach
                    </div>

                    <!-- Arrow Right -->
                    <button onclick="scrollSlider('{{ $brand->id }}', 'right')" 
                            class="absolute right-0 top-1/2 -translate-y-12 translate-x-6 z-30 bg-white shadow-xl rounded-full p-4 text-indigo-600 border border-gray-100 opacity-0 group-hover/slider:opacity-100 transition-all hover:bg-indigo-600 hover:text-white active:scale-90">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" /></svg>
                    </button>
                </div>
            @else
                <!-- GRID BIASA (Jika <= 3 Produk) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach($brand->products as $product)
                        <x-product-card :product="$product" />
                    @endforeach
                </div>
            @endif
        </div>
    @empty
        <div class="text-center py-24 bg-gray-50 rounded-3xl border-2 border-dashed">
            <p class="text-gray-400">No brands or products are currently available.</p>
        </div>
    @endforelse

</div>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<script>
    function scrollSlider(brandId, direction) {
        const slider = document.getElementById('slider-' + brandId);
        const cardWidth = slider.querySelector('.flex-none').offsetWidth + 32; // width + gap
        
        if (direction === 'left') {
            slider.scrollLeft -= cardWidth;
        } else {
            slider.scrollLeft += cardWidth;
        }
    }
</script>
@endsection
