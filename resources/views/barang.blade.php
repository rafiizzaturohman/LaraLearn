<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Barang</title>
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a]">
    <nav class="bg-gray-700 text-white font-bold py-4 px-[20rem]">
        <div class="flex flex-row justify-between items-center">
            <a href="#" class="text-2xl">Barang</a>

            <div class="flex flex-row space-x-3 p-3 items-center bg-black rounded-xl ">
                <a href="{{ route('login') }}"
                    class="bg-white text-blue-700 px-4 py-1 rounded-md hover:text-white/70 hover:bg-blue-700 transition-all ease-in-out duration-300">Log
                    In</a>
                <a href="{{ route('register') }}" class="hover:text-white/70 duration-300">Register</a>
            </div>
        </div>
    </nav>
    <div class="mx-auto my-6 max-w-7xl space-y-8">
        <h1 class="text-white font-bold text-2xl">Data Barang</h1>

        <div class="bg-gray-600 p-3 rounded-sm">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                K001-01
                            </th>
                            <td class="px-6 py-4">
                                Kipas Angin
                            </td>
                            <td class="px-6 py-4">
                                2000000
                            </td>
                            <td class="px-6 py-4">
                                20
                            </td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="#edit" class="hover:text-emerald-500 tracking-wide font-semibold transition ease-in-out duration-600">Edit</a>
                                <a href="#delete" class="hover:text-red-500 tracking-wide font-semibold transition ease-in-out duration-600">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>
