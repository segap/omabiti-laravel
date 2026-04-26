<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- CSS --}}
    <link href="{{ asset('assets/css/tiny-slider.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet" />

    {{-- Include partial head --}}
    @include('partials.head')

    <title>@yield('title', 'Laravel App')</title>
</head>

<body>
    @include('partials.navbar')
    <main>
        <section class="mt-8">
            <div class="container">
                <div class="swiper-container swiper" id="swiper-1" data-pagination-type="" data-speed="400"
                    data-space-between="100" data-pagination="true" data-navigation="false" data-autoplay="true"
                    data-autoplay-delay="3000" data-effect="fade"
                    data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}}'>
                    <div class="swiper-wrapper pb-8">
                        <div class="swiper-slide"
                            style="background: url({{ asset('assets/images/slider/slide-0.png') }}) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                            <div class="lg:py-32 p-12 lg:pl-12 xl:w-2/5 md:w-3/5">
                                <span
                                    class="inline-block p-2 text-sm align-baseline leading-none rounded-lg bg-yellow-500 text-gray-900 font-semibold">
                                    Opening Sale Discount 50%</span>
                                <div class="my-7 flex flex-col gap-2">
                                    <h1 class="text-gray-900 text-xl lg:text-5xl font-bold leading-tight">
                                        Dibuat dari bahan terbaik, siap menemani setiap momen spesialmu.
                                    </h1>
                                    <p class="text-md font-light">OMABITI – Bakery Favoritmu Setiap Hari
                                        </p>
                                </div>
                                <a href="#!"
                                    class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                    Pesan Sekarang
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-arrow-right inline-block" width="14"
                                        height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l14 0" />
                                        <path d="M13 18l6 -6" />
                                        <path d="M13 6l6 6" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Add more slides as needed -->
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination !bottom-14"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Products Start-->
        <section class="lg:my-14 my-8">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full mb-6">
                        <h2 class="text-lg">Popular Products</h2>
                    </div>
                </div>

                <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:gap-4 xl:grid-cols-5">
                    @foreach ($products as $item)
                    <div class="relative rounded-lg break-words border bg-white border-gray-300 card-product cursor-pointer"
                            data-bs-toggle="modal"
                            data-bs-target="#quickViewModal"

                            data-nama="{{ $item->nama_produk }}"
                            data-harga="{{ $item->harga }}"
                            data-jenis="{{ $item->jenis_produk }}"
                            data-stok="{{ $item->stok }}"
                            data-gambar="{{ asset('storage/' . $item->gambar) }}"
                        >
                        <div class="flex-auto p-4">
                            <div class="text-center relative flex justify-center">
                                <a href="javascript:void(0)"><img src="{{ asset('storage/' . $item->gambar) }}"
                                        alt="Grocery Ecommerce Template" class="w-full h-[200px] object-contain" /></a>
                            </div>
                            <div class="flex flex-col gap-3">
                                <a href="javascript:void(0)" class="text-decoration-none text-gray-500"><small>{{ $item->jenis_produk }}</small></a>
                                <div class="flex flex-col gap-2">
                                    <h3 class="text-base truncate"><a href="javascript:void(0)">{{ $item->nama_produk }}</a></h3>
                                    <div class="flex items-center">
                                        <div class="flex flex-row gap-3">
                                            <small class="text-yellow-500 flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-half-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z"
                                                        stroke-width="0" fill="currentColor"></path>
                                                </svg>
                                            </small>
                                            <div class="flex flex-row gap-1">
                                                <span class="text-gray-500 text-sm">4.5</span>
                                                <span class="text-gray-500 text-sm">(39)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-gray-900 font-semibold"> Rp {{ number_format($item->harga, 0, ',', '.') }}</span>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn inline-flex items-center gap-x-1 bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-plus" width="14" height="14"
                                                viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 5l0 14" />
                                                <path d="M5 12l14 0" />
                                            </svg>
                                            <span>Add</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Popular Products End-->

        <section class="lg:my-14 my-8">
            <div class="container">
                <div class="flex flex-wrap gap-y-6">
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="assets/images/icons/clock.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">10 minute grocery now</h3>
                                <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup
                                    stores near you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="assets/images/icons/gift.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Best Prices & Offers</h3>
                                <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get
                                    best pricess &
                                    offers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="assets/images/icons/package.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Wide Assortment</h3>
                                <p>Choose from 5000+ products across food, personal care, household, bakery, veg and
                                    non-veg & other
                                    categories.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="assets/images/icons/refresh-cw.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Easy Returns</h3>
                                <p>
                                    Not satisfied with a product? Return it at the doorstep & get a refund within hours.
                                    No questions
                                    asked
                                    <a href="#!" class="text-green-600">policy</a>
                                    .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('partials.footer')
    @include('partials.scripts')

    <script src="{{ asset('assets/js/vendors/countdown.js') }}"></script>

    <script src="{{ asset('node_modules/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tns-slider.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/zoom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/language.js') }}"></script>

    <!-- Swiper JS -->
    <script src="{{ asset('node_modules/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/js/vendors/validation.js') }}"></script>

    <!-- MODAL LANGSUNG DI HALAMAN INI -->
        <div class="modal fade" id="quickViewModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered lg:min-w-[1140px]">
                <div class="modal-content">
                    <div class="modal-body p-8">

                        <!-- CLOSE -->
                        <div class="absolute top-0 right-0 p-3">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-x text-gray-700"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex flex-wrap">

                            <!-- LEFT (IMAGE) -->
                            <div class="md:w-1/2">
                                <!-- img slide -->
                                <div class="product productModal" id="productModal">
                                    <div id="zoomContainer" class="zoom" onmousemove="zoom(event)">
                                        <img id="modalGambar" src="" class="w-full">
                                    </div>
                                </div>
                            </div>

                            <!-- RIGHT (DETAIL) -->
                            <div class="md:w-1/2 pr-4 pl-4">
                                <div class="lg:pl-10 mt-6 md:mt-0">
                                    <div class="flex flex-col gap-4">
                                        <!-- content -->
                                        <!-- heading -->
                                        <h1 id="modalNama"></h1>
                                        <div class="flex flex-col gap-2">
                                            <div class="flex items-center">
                                                <!-- rating -->
                                                <!-- rating -->
                                                <small class="text-yellow-500 inline-flex items-center">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-star-filled"
                                                        width="14"
                                                        height="14"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="2"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                            stroke-width="0"
                                                            fill="currentColor"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-star-filled"
                                                        width="14"
                                                        height="14"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="2"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                            stroke-width="0"
                                                            fill="currentColor"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-star-filled"
                                                        width="14"
                                                        height="14"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="2"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                            stroke-width="0"
                                                            fill="currentColor"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-star-filled"
                                                        width="14"
                                                        height="14"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="2"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                            stroke-width="0"
                                                            fill="currentColor"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-star-filled"
                                                        width="14"
                                                        height="14"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="2"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                            stroke-width="0"
                                                            fill="currentColor"
                                                        ></path>
                                                    </svg>
                                                </small>
                                                <a href="#" class="text-green-600"> (30 reviews)</a>
                                            </div>
                                            <div class="text-md">
                                                <span id="modalHarga" class="text-gray-900 font-semibold"></span>
                                            </div>
                                        </div>
                                        <!-- hr -->
                                        <div class="flex flex-col gap-6">
                                            <hr />
                                            <div>
                                                <!-- input -->
                                                <div class="w-1/3 md:w-1/4 lg:w-1/5">
                                                    <!-- input -->
                                                    <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                                        <input type="button" value="-" class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300" data-field="quantity" />
                                                        <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                                        <input type="button" value="+" class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300" data-field="quantity" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap justify-start gap-2 items-center">
                                                <div class="lg:w-1/3 md:w-2/5 w-full grid">
                                                    <!-- button -->
                                                    <!-- btn -->
                                                    <button
                                                        type="button"
                                                        class="btn bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 justify-center"
                                                    >
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-plus mr-2"
                                                            width="12"
                                                            height="12"
                                                            viewBox="0 0 24 24"
                                                            stroke-width="3"
                                                            stroke="currentColor"
                                                            fill="none"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        >
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M12 5l0 14"></path>
                                                            <path d="M5 12l14 0"></path>
                                                        </svg>
                                                        Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- hr -->
                                            <hr />
                                        </div>
                                        <div>
                                            <!-- table -->
                                            <table class="text-left w-full">
                                                <tbody>
                                                    <tr>
                                                        <td class="px-6 py-3">Availability:</td>
                                                        <td class="px-6 py-3" id="modalStok"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-3">Type:</td>
                                                        <td class="px-6 py-3" id="modalJenis"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-3">Shipping:</td>
                                                        <td class="px-6 py-3">
                                                            <small>
                                                                01 day shipping.
                                                                <span class="text-gray-700">( Free pickup today)</span>
                                                            </small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>

</html>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // tombol plus
    document.querySelectorAll(".button-plus").forEach(function (btn) {
        btn.addEventListener("click", function () {
            let input = this.parentElement.querySelector(".quantity-field");
            let value = parseInt(input.value) || 0;
            let max = parseInt(input.getAttribute("max")) || 999;

            if (value < max) {
                input.value = value + 1;
            }
        });
    });

    // tombol minus
    document.querySelectorAll(".button-minus").forEach(function (btn) {
        btn.addEventListener("click", function () {
            let input = this.parentElement.querySelector(".quantity-field");
            let value = parseInt(input.value) || 0;

            if (value > 1) {
                input.value = value - 1;
            }
        });
    });

});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const modal = document.getElementById('quickViewModal');

    modal.addEventListener('show.bs.modal', function (event) {

        const button = event.relatedTarget;

        const nama = button.getAttribute('data-nama');
        const harga = button.getAttribute('data-harga');
        const jenis = button.getAttribute('data-jenis');
        const gambar = button.getAttribute('data-gambar');
        const stok = button.getAttribute('data-stok');

        document.getElementById('modalNama').innerText = nama;
        document.getElementById('modalJenis').innerText = jenis.replace('_',' ');
        document.getElementById('modalStok').innerText = stok;

        const img = document.getElementById('modalGambar');
        const zoomDiv = document.getElementById('zoomContainer');

        img.src = gambar;
        zoomDiv.style.backgroundImage = `url(${gambar})`;
    });

});
</script>