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

<div class="m-auto w-auto max-w-7xl">
    <div class="bg-white/40">
        <form action="/" method="post">
            <div>
                <label for="">Kode Barang</label>
                <input type="text" name="kd_barang" id="" required>
            </div>
            <div>
                <label for="">Nama</label>
                <input type="text" name="nama" id="" required>
            </div>
            <div>
                <label for=""></label>
                <input type="text" name="harga" id="" required>
            </div>
            <div>
                <label for=""></label>
                <input type="text" name="stok" id="" required>
            </div>
            <div>
                <label for=""></label>
                <input type="text" name="kd_barang" id="" required>
            </div>
            <div>
                <label for=""></label>
                <input type="text" name="kd_barang" id="" required>
            </div>
        </form>
    </div>
</div>

@extends('partials.footer')