<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Brand</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white rounded shadow p-6">
        <h1 class="text-2xl font-bold mb-6">Edit Brand: {{ $brand->name }}</h1>

        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-6">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Nama Brand <span class="text-red-500">*</span></label>
                <input type="text" name="name" class="w-full border p-2 rounded focus:ring focus:ring-indigo-200" required value="{{ old('name', $brand->name) }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Tagline (Opsional)</label>
                <input type="text" name="tagline" class="w-full border p-2 rounded focus:ring focus:ring-indigo-200" value="{{ old('tagline', $brand->tagline) }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Deskripsi Brand (Opsional)</label>
                <textarea name="description" rows="4" class="w-full border p-2 rounded focus:ring focus:ring-indigo-200">{{ old('description', $brand->description) }}</textarea>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 mb-2">Logo Brand (Opsional)</label>
                @if($brand->logo_path)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $brand->logo_path) }}" alt="Logo Saat Ini" class="h-16 object-contain border p-1 rounded">
                        <small class="text-gray-500">Logo saat ini. Upload baru untuk mengganti.</small>
                    </div>
                @endif
                <input type="file" name="logo" class="w-full border p-2 rounded bg-gray-50" accept="image/jpeg, image/png, image/jpg, image/svg+xml">
                <small class="text-gray-500 block mt-1">Format: JPG, PNG, SVG. Maksimal 2MB.</small>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('admin.brands.index') }}" class="text-gray-500 hover:underline">Batal</a>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded">Perbarui Brand</button>
            </div>
        </form>
    </div>
</body>
</html>
