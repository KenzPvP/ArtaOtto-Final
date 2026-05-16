@extends('layouts.app')

@section('content')
<div class="bg-gray-50 pt-24 pb-8 px-8">
    <div class="max-w-6xl mx-auto">
        <a href="{{ route('products.index') }}" class="text-gray-500 hover:underline mb-4 inline-block">
            &larr; Back to Main Catalog
        </a>
        
        <!-- Brand Profile Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-10 mb-10 flex flex-col md:flex-row items-center md:items-start gap-8">
            <!-- Logo Section -->
            <div class="w-full md:w-1/3 flex flex-col items-center justify-center shrink-0">
                @if($brand->logo_path)
                    <div class="bg-gray-50 p-6 rounded-2xl w-full flex justify-center border border-gray-100">
                        <img src="{{ asset('storage/' . $brand->logo_path) }}" alt="Logo {{ $brand->name }}" class="max-h-32 object-contain mix-blend-multiply">
                    </div>
                @else
                    <div class="bg-gray-50 p-6 rounded-2xl w-full flex justify-center items-center h-32 border border-gray-100">
                        <span class="text-gray-400 font-medium text-xl">{{ $brand->name }}</span>
                    </div>
                @endif
            </div>

            <!-- Profile Section -->
            <div class="w-full md:w-2/3 text-center md:text-left flex flex-col justify-center">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">{{ $brand->name }}</h1>
                
                @if($brand->tagline)
                    <p class="text-lg text-indigo-600 font-semibold mb-4">{{ $brand->tagline }}</p>
                @endif
                
                @if($brand->description)
                    <div class="prose prose-sm md:prose-base text-gray-600 leading-relaxed max-w-none">
                        {!! nl2br(e($brand->description)) !!}
                    </div>
                @else
                    <p class="text-gray-500 italic">Explore various official medical and dental equipment from {{ $brand->name }}.</p>
                @endif
            </div>
        </div>

        <!-- Search -->
        <form action="{{ route('brands.public.show', $brand->id) }}" method="GET" class="flex gap-4 mb-8">
            <input type="text" name="search" value="{{ request('search') }}"
                   placeholder="Search products for {{ $brand->name }}..."
                   class="border p-2 rounded w-full md:w-1/2">
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Search</button>
        </form>

        <!-- Produk -->
        <!-- Produk -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($products as $product)
                <x-product-card :product="$product" />
            @empty
                <div class="col-span-full py-24 text-center bg-gray-50 rounded-3xl border-2 border-dashed">
                    <p class="text-gray-400">No products found for this brand.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection