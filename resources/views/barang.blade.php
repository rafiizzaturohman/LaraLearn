@extends('partials.header')
    <nav class="bg-gray-700 text-white font-bold py-4 px-[20rem]">
        <div class="flex flex-row justify-between items-center">
            <a href="/" class="text-2xl">Laravel</a>

            <div class="flex flex-row space-x-3 p-3 items-center font-semibold">
                <a href="{{ route('login') }}"
                    class="hover:text-blue-300 tracking-wide font-semibold transition ease-in-out duration-600">Log
                    In</a>
                <a href="{{ route('register') }}"
                    class="hover:text-amber-500 tracking-wide font-semibold transition ease-in-out duration-600">Register</a>
            </div>
        </div>
    </nav>
    <div class="mx-auto my-6 max-w-7xl space-y-8">
        <div class="flex flex-row justify-between items-center">
            <h1 class="text-white font-bold text-2xl">Data Barang</h1>
            <a href="{{ route('createView') }}"
                class="text-gray-200 font-bold text-md bg-gray-600 hover:text-gray-400 hover:bg-gray-800 transition ease-in-out duration-200 px-2 py-1 rounded-xs">Tambah
                Barang</a>
        </div>

        <div class="bg-gray-600 p-3 rounded-sm">
            <div class="relative overflow-x-auto">
                <table class="w-full text-md text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Kode Barang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Barang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Stok
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach ($barangs as $items)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $items->kd_barang }} 
                                </th>
                                <td class="px-6 py-4">
                                    {{ $items->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $items->harga }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $items->stok }}
                                </td>
                                <td class="px-6 py-4 space-x-2 flex flex-row">
                                    <a href="{{ route('editView', $items->id) }}"
                                    class="hover:text-emerald-500 tracking-wide font-semibold transition ease-in-out duration-600">Edit</a>
                                    
                                    <form onsubmit="return confirm('Apakah anda yakin?')" action="{{ route('destroy', $items->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="{{ $items->id }}-delete-btn"
                                            class="hover:text-red-500 tracking-wide font-semibold transition ease-in-out duration-600 cursor-pointer">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if (session('success'))
                    <div class="my-4 text-center">
                        <p class="font-semibold text-emerald-400 tracking-wide">{{ session('success') }}</p>
                    </div>
                @else
                    <div class="my-4 text-center">
                        <p class="font-semibold text-emerald-400 tracking-wide">{{ session('failed') }}</p>
                    </div>              
                @endif
            </div>
        </div>
    </div>

@extends('partials.footer')
