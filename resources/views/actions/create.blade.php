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

<div class="my-6 mx-auto w-auto max-w-7xl space-y-8">
    <div class="flex flex-row justify-between items-center">
        <h1 class="text-white font-bold text-2xl">Tambah Barang</h1>

        <a href="{{ route('barang') }}" class="text-gray-200 font-bold text-md bg-gray-600 hover:text-gray-400 hover:bg-gray-800 transition ease-in-out duration-200 px-2 py-1 rounded-xs">Kembali</a>
    </div>

    <div class="bg-gray-600 p-3 rounded-sm text-white">
        <form action="{{ route('store') }}" method="POST">

            @csrf
            @method('POST')
            
            <div class="flex flex-col my-2 space-y-2">
                <label for="kd_barang" class="font-bold tracking-wider">Kode Barang</label>
                <input type="text" class="border-b-2 border-[#7A8BA2] rounded-md px-2 py-1.5 focus:border-b-2 focus:border-white" name="kd_barang" id="kd_barang" required>

            </div>
            <div class="flex flex-col my-2 space-y-2">
                <label for="nama" class="font-bold tracking-wider">Nama</label>
                <input type="text" class="border-b-2 border-[#7A8BA2] rounded-md px-2 py-1 focus:border-b-2 focus:border-white" name="nama" id="nama" required>

            </div>
            <div class="flex flex-col my-2 space-y-2">
                <label for="harga" class="font-bold tracking-wider">Harga</label>
                <input type="text" class="border-b-2 border-[#7A8BA2] rounded-md px-2 py-1 focus:border-b-2 focus:border-white" name="harga" id="harga" required>

            </div>
            <div class="flex flex-col my-2 space-y-2">
                <label for="stok" class="font-bold tracking-wider">Stok</label>
                <input type="text" class="border-b-2 border-[#7A8BA2] rounded-md px-2 py-1 focus:border-b-2 focus:border-white" name="stok" id="stok" required>

            </div>

            <button class="cursor-pointer my-2 px-2 py-1 rounded-md bg-teal-700 hover:bg-teal-600 transition ease-in-out duration-200 font-bold tracking-wide" type="submit">Tambah</button>
        </form>
    </div>
</div>

@extends('partials.footer')