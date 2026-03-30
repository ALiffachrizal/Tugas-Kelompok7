@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-800 tracking-tight">Dashboard Utama</h1>
            <p class="text-sm text-gray-500 mt-1"></p>
        </div>
        <button class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 shadow-sm transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Unduh Laporan Penjualan
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5">
            <div class="p-3.5 bg-blue-50 rounded-xl text-blue-600">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Total Stok Barang</p>
                <p class="text-3xl font-bold text-gray-900">1,245 <span class="text-sm font-medium text-gray-500">Item</span></p>
                <p class="text-xs text-green-600 font-semibold mt-1">+120 item masuk minggu ini</p>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5">
            <div class="p-3.5 bg-green-50 rounded-xl text-green-600">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M12 16V7"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Penjualan Bulan Ini</p>
                <p class="text-3xl font-bold text-gray-900">Rp 45.2Jt</p>
                <p class="text-xs text-green-600 font-semibold mt-1">+15% dari bulan lalu</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5">
            <div class="p-3.5 bg-red-50 rounded-xl text-red-600">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Peringatan Stok</p>
                <p class="text-3xl font-bold text-red-600">12 <span class="text-sm font-medium text-red-500">Barang</span></p>
                <p class="text-xs text-red-500 font-semibold mt-1">Butuh restock dari Pemasok!</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-5 border-b border-gray-100 flex items-center justify-between">
            <h2 class="text-lg font-semibold text-gray-800">Aktivitas Rantai Pasok & Penjualan Terbaru</h2>
            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-700 transition">Lihat Semua</a>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase tracking-wider">
                    <tr>
                        <th class="px-6 py-4">ID Transaksi</th>
                        <th class="px-6 py-4">Keterangan / Aktivitas</th>
                        <th class="px-6 py-4">Admin Bertugas</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Waktu</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr>
                        <td class="px-6 py-4 font-semibold text-gray-900">#TRX-0982</td>
                        <td class="px-6 py-4 text-gray-600">Penjualan Grosir ke Warung Makmur</td>
                        <td class="px-6 py-4 text-gray-600">Alif Fachrizal</td>
                        <td class="px-6 py-4"><span class="px-2.5 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Selesai</span></td>
                        <td class="px-6 py-4 text-gray-500">Baru saja</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold text-gray-900">#SUP-0145</td>
                        <td class="px-6 py-4 text-gray-600">Penerimaan Barang dari PT. Gudang Garam</td>
                        <td class="px-6 py-4 text-gray-600">Fatimah Sari</td>
                        <td class="px-6 py-4"><span class="px-2.5 py-1 text-xs font-semibold bg-yellow-100 text-yellow-800 rounded-full">Diproses</span></td>
                        <td class="px-6 py-4 text-gray-500">10 mnt lalu</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold text-gray-900">#TRX-0981</td>
                        <td class="px-6 py-4 text-gray-600">Penjualan Eceran (Toko Depan)</td>
                        <td class="px-6 py-4 text-gray-600">M. Ibnu Trimulya</td>
                        <td class="px-6 py-4"><span class="px-2.5 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Selesai</span></td>
                        <td class="px-6 py-4 text-gray-500">45 mnt lalu</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection