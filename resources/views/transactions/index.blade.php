<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Transaksi</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <a href="{{ route('transactions.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
                    + Catat Transaksi
                </a>
            </div>

            <table class="w-full bg-white rounded shadow">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-3 text-left">Produk</th>
                        <th class="p-3 text-left">Tipe</th>
                        <th class="p-3 text-left">Jumlah</th>
                        <th class="p-3 text-left">Catatan</th>
                        <th class="p-3 text-left">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $trx)
                    <tr class="border-t">
                        <td class="p-3">{{ $trx->product->name }}</td>
                        <td class="p-3">
                            <span class="{{ $trx->type === 'in' ? 'text-green-600' : 'text-red-600' }}">
                                {{ $trx->type === 'in' ? 'Masuk' : 'Keluar' }}
                            </span>
                        </td>
                        <td class="p-3">{{ $trx->quantity }}</td>
                        <td class="p-3">{{ $trx->note ?? '-' }}</td>
                        <td class="p-3">{{ $trx->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>