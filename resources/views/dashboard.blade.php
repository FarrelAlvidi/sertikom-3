<x-app-layout>
    <nav class="bg-white  border-gray-200 p-5 drop-shadow-lg">
        <div class="flex flex-wrap justify-end mx-auto items-center px-12 gap-6">
            <p>{{ now()->format('l, d M Y | H:i') }}</p>
            <i class="fa-regular fa-calendar"></i>
            <button id="theme-toggle">
                <i id="theme-toggle-icon" class="fas fa-sun"></i>
            </button>
        </div>
    </nav>

    <div class=" md:pl-72 flex flex-col p-10">
        <div class="p-4 bg-gray-50 shadow-lg rounded-[50px]">
            <div class="flex flex-col lg:flex-row items-center justify-between space-y-10 lg:space-y-0 p-6 md:p-10">
                <img src="../img/header.png" class='w-[35vh] md:w-[50vh]' alt="" />
                <div class="lg:w-1/2">
                    <h1 class='font-semibold text-[2rem] md:text-[3rem]'>Selamat Pagi, X</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, explicabo? Alias quas qui, nesciunt ducimus illo dolorum eveniet error adipisci odio recusandae repellendus ullam, iure consequatur excepturi rerum dolorem velit.</p>

                    <div class="mt-10">
                        <a href='' class='bg-[#E4E4E4] p-4 rounded-full w-52'>Baca Buku</a>
                        <a href='' class='bg-[#A78B61] p-4 rounded-full w-52 text-white ml-5'>Pinjam Buku</a>
                    </div>
                </div>
            </div>
        </div>
        <div class='mt-10'>
            <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                <div class="">
                    <h1 class='font-semibold text-3xl'>Info Dashboard Buku</h1>
                    <p>Dashboard informasi buku total buku dipinjam, buku sedang dipinjam, buku dikembalikan, buku rusak</p>
                </div>
                <a href="" class='p-3 rounded-full w-24 text-center font-semibold bg-[#E4E4E4] mt-5'>Kelola</a>
            </div>
            <div class="flex flex-col lg:flex-row items-center lg:justify-between mt-8 gap-5">
                <div class="bg-[#6E987C] h-[18rem] w-[22rem] rounded-3xl shadow-lg p-5 grow hover:grow duration-700 ">
                    <div class="flex justify-center gap-10 items-center">
                        <IconBooks class='w-24 h-24 text-white' />
                        <p class='text-white text-[3.4rem]'>78</p>
                    </div>
                    <h4 class='text-lg text-center text-white mt-20'>Total Buku yang dipinjam</h4>
                </div>
                <div class="bg-[#22615D] h-[18rem] w-[22rem] rounded-3xl shadow-lg p-5 hover:grow duration-700">
                    <div class="flex justify-center gap-10 items-center">
                        <IconBookmarks class='w-24 h-24 text-white' />
                        <p class='text-white text-[3.4rem]'>30</p>
                    </div>
                    <h4 class='text-lg text-center text-white mt-20'>Total Buku Sedang dipinjam</h4>
                </div>
                <div class="bg-[#FBC78F] h-[18rem] w-[22rem] rounded-3xl shadow-lg p-5 hover:grow duration-700">
                    <div class="flex justify-center gap-10 items-center">
                        <IconBookUpload class='w-24 h-24 text-white' />
                        <p class='text-white text-[3.4rem]'>20</p>
                    </div>
                    <h4 class='text-lg text-center text-white mt-20'>Total Buku yang dikembalikan</h4>
                </div>
                <div class="bg-[#AC455E] h-[18rem] w-[22rem] rounded-3xl shadow-lg p-5 hover:grow duration-700">
                    <div class="flex justify-center gap-10 items-center">
                        <IconBookmarkMinus class='w-24 h-24 text-white' />
                        <p class='text-white text-[3.4rem]'>10</p>
                    </div>
                    <h4 class='text-lg text-center text-white mt-20'>Total Buku yang Rusak</h4>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
