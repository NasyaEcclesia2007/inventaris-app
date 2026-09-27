<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Catat Transaksi</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('transactions.store') }}" method="POST" class="bg-white p-6 rounded shadow space-y-4">
                @csrf
                <div>
                    <label class="block mb-1">Produk</label>
                    <select name="product_id" class="w-full border p-2 rounded">
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }} (Stok: {{ $product->stock }})</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block mb-1">Tipe</label>
                    <select name="type" class="w-full border p-2 rounded">
                        <option value="in">Masuk</option>
                        <option value="out">Keluar</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1">Jumlah</label>
                    <input type="number" name="quantity" class="w-full border p-2 rounded">
                </div>
                <div>
                    <label class="block mb-1">Catatan (opsional)</label>
                    <input type="text" name="note" class="w-full border p-2 rounded">
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>