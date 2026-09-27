<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Produk</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('products.store') }}" method="POST" class="bg-white p-6 rounded shadow space-y-4">
                @csrf
                <div>
                    <label class="block mb-1">Nama Produk</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="w-full border p-2 rounded">
                </div>
                <div>
                    <label class="block mb-1">Kategori</label>
                    <input type="text" name="category" value="{{ old('category') }}" class="w-full border p-2 rounded">
                </div>
                <div>
                    <label class="block mb-1">Stok</label>
                    <input type="number" name="stock" value="{{ old('stock') }}" class="w-full border p-2 rounded">
                </div>
                <div>
                    <label class="block mb-1">Harga</label>
                    <input type="number" name="price" value="{{ old('price') }}" class="w-full border p-2 rounded">
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>