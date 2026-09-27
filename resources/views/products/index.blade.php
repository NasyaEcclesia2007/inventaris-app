<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Produk</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
                    + Tambah Produk
                </a>
            </div>

            <table class="w-full bg-white rounded shadow">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-3 text-left">Nama</th>
                        <th class="p-3 text-left">Kategori</th>
                        <th class="p-3 text-left">Stok</th>
                        <th class="p-3 text-left">Harga</th>
                        <th class="p-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="border-t">
                        <td class="p-3">{{ $product->name }}</td>
                        <td class="p-3">{{ $product->category }}</td>
                        <td class="p-3">
                            <span class="{{ $product->stock < 10 ? 'text-red-600 font-bold' : '' }}">
                                {{ $product->stock }}
                            </span>
                        </td>
                        <td class="p-3">Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="p-3 flex gap-2">
                            <a href="{{ route('products.edit', $product) }}" class="text-blue-600">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>