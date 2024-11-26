<x-app-layout>

    <section class="p-10 md:pl-72 md:pr-14 md:pt-20">
        <h1 class="text-3xl font-semibold mb-5">Riwayat peminjaman buku</h1>
        <div class="relative overflow-x-auto border border-gray-300 rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Judul Buku
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Penulis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Pinjam
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Kembali
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                @foreach ($loans as $loan)


                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loan->book->judul_buku }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $loan->book->penulis }}
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($loan->pinjam)->format('d/m/Y') }}

                        </td>
                        <td class="px-6 py-4">
                           {{ \Carbon\Carbon::parse($loan->tanggal_kembali)->format('d/m/Y') }}

                        </td>
                        <td class="px-6 py-4">
                           {{ $loan->status }}

                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>

    </section>
</x-app-layout>
