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
                        <th scope="col" class="px-6 py-3">
                            Edit
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
                            <td class="px-6 py-4">
                                <button class="py-2 px-5 bg-blue-500 text-white rounded-lg mt-6"
                                    data-modal-target="modal-{{ $loan->id }}"
                                    data-modal-toggle="modal-{{ $loan->id }}" type="button">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                    <div id="modal-{{ $loan->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative p-5 bg-white rounded-lg shadow border border-gray-300 dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Isi terlebih dahulu form peminjaman buku
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="modal-{{ $loan->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="p-4 md:p-5" action="" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="book_id" value="">

                                    <button type="submit"
                                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                        Pinjam Buku
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </table>
        </div>

    </section>
</x-app-layout>
