@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <h1 class="text-2xl font-bold text-gray-800 tracking-tight">Dashboard Overview</h1>
        <button class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-semibold hover:bg-blue-700 shadow-sm transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Generate Report
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5">
            <div class="p-3.5 bg-blue-50 rounded-xl text-blue-600">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 01-5.997-6M19 8a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Total Users</p>
                <p class="text-3xl font-bold text-gray-900">1,245</p>
                <p class="text-xs text-green-600 font-semibold mt-1">+12% from last month</p>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5">
            <div class="p-3.5 bg-green-50 rounded-xl text-green-600">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M12 16V7"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Net Revenue</p>
                <p class="text-3xl font-bold text-gray-900">Rp 45.231.000</p>
                <p class="text-xs text-red-600 font-semibold mt-1">-3% from last week</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5">
            <div class="p-3.5 bg-purple-50 rounded-xl text-purple-600">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Active Sessions</p>
                <p class="text-3xl font-bold text-gray-900">312</p>
                <p class="text-xs text-green-600 font-semibold mt-1">+8% today</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-5 border-b border-gray-100 flex items-center justify-between">
            <h2 class="text-lg font-semibold text-gray-800">Recent System Activity</h2>
            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-700 transition">View All</a>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase tracking-wider">
                    <tr>
                        <th class="px-6 py-4">User</th>
                        <th class="px-6 py-4">Action</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-800">Alif Fachrizal Helmi</td>
                        <td class="px-6 py-4 text-gray-600">System Setup</td>
                        <td class="px-6 py-4"><span class="px-2.5 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Success</span></td>
                        <td class="px-6 py-4 text-gray-500">Just now</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-800">Fatimah Sari Maulani</td>
                        <td class="px-6 py-4 text-gray-600">Added Navigation</td>
                        <td class="px-6 py-4"><span class="px-2.5 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Success</span></td>
                        <td class="px-6 py-4 text-gray-500">10 mins ago</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-800">M. Ibnu Trimulya</td>
                        <td class="px-6 py-4 text-gray-600">Dashboard Layout</td>
                        <td class="px-6 py-4"><span class="px-2.5 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Success</span></td>
                        <td class="px-6 py-4 text-gray-500">15 mins ago</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection