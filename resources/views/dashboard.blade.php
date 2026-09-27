<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-4 rounded shadow">
                    <p class="text-gray-500 text-sm">Total Produk</p>
                    <p class="text-2xl font-bold">{{ $totalProducts }}</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <p class="text-gray-500 text-sm">Total Stok</p>
                    <p class="text-2xl font-bold">{{ $totalStock }}</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <p class="text-gray-500 text-sm">Barang Masuk</p>
                    <p class="text-2xl font-bold text-green-600">{{ $totalIn }}</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <p class="text-gray-500 text-sm">Barang Keluar</p>
                    <p class="text-2xl font-bold text-red-600">{{ $totalOut }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="font-bold mb-3">⚠️ Stok Hampir Habis</h2>
                    @forelse($lowStockProducts as $product)
                        <div class="flex justify-between border-b py-2">
                            <span>{{ $product->name }}</span>
                            <span class="text-red-600 font-bold">{{ $product->stock }}</span>
                        </div>
                    @empty
                        <p class="text-gray-400">Semua stok aman.</p>
                    @endforelse
                </div>

                <div class="bg-white p-4 rounded shadow">
                    <h2 class="font-bold mb-3">Transaksi Terbaru</h2>
                    @forelse($recentTransactions as $trx)
                        <div class="flex justify-between border-b py-2">
                            <span>{{ $trx->product->name }}</span>
                            <span class="{{ $trx->type === 'in' ? 'text-green-600' : 'text-red-600' }}">
                                {{ $trx->type === 'in' ? '+' : '-' }}{{ $trx->quantity }}
                            </span>
                        </div>
                    @empty
                        <p class="text-gray-400">Belum ada transaksi.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>