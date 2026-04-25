<footer class="bg-gray-200 py-8">
    <div class="container">

        {{-- BAGIAN ATAS --}}
        <div class="flex flex-wrap py-4 mb-6">
            <div class="w-full lg:w-1/3 mb-6">
                <h6>Categories</h6>

                <div class="flex">
                    <ul class="w-1/2 space-y-2">
                        <li><a href="#">Vegetables & Fruits</a></li>
                        <li><a href="#">Breakfast & instant food</a></li>
                        <li><a href="#">Bakery & Biscuits</a></li>
                        <li><a href="#">Atta, rice & dal</a></li>
                    </ul>

                    <ul class="w-1/2 space-y-2">
                        <li><a href="#">Dairy, bread & eggs</a></li>
                        <li><a href="#">Cold drinks & juices</a></li>
                        <li><a href="#">Tea, coffee & drinks</a></li>
                        <li><a href="#">Masala, oil & more</a></li>
                    </ul>
                </div>
            </div>

            {{-- MENU --}}
            <div class="w-full lg:w-2/3 flex flex-wrap">
                <div class="w-1/2 md:w-1/4 mb-6">
                    <h6>Get to know us</h6>
                    <ul class="space-y-2">
                        <li><a href="#">Company</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>

                <div class="w-1/2 md:w-1/4 mb-6">
                    <h6>For Consumers</h6>
                    <ul class="space-y-2">
                        <li><a href="#">Payments</a></li>
                        <li><a href="#">Shipping</a></li>
                    </ul>
                </div>

                <div class="w-1/2 md:w-1/4 mb-6">
                    <h6>Become a Shopper</h6>
                    <ul class="space-y-2">
                        <li><a href="#">Shopper Opportunities</a></li>
                    </ul>
                </div>

                <div class="w-1/2 md:w-1/4">
                    <h6>Programs</h6>
                    <ul class="space-y-2">
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- PAYMENT --}}
        <div class="border-t py-4">
            <div class="flex flex-wrap items-center justify-between">

                <div>
                    <span>Payment Partners</span>
                    <div class="flex gap-3 mt-2">
                        <img src="{{ asset('assets/images/payment/amazonpay.svg') }}">
                        <img src="{{ asset('assets/images/payment/visa.svg') }}">
                        <img src="{{ asset('assets/images/payment/paypal.svg') }}">
                    </div>
                </div>

                <div>
                    <span>Download App</span>
                    <div class="flex gap-2 mt-2">
                        <img src="{{ asset('assets/images/appbutton/appstore-btn.svg') }}" width="120">
                        <img src="{{ asset('assets/images/appbutton/googleplay-btn.svg') }}" width="120">
                    </div>
                </div>

            </div>
        </div>

        {{-- COPYRIGHT --}}
        <div class="border-t py-4 text-center text-gray-500">
            © {{ date('Y') }} FreshCart - Laravel Version
        </div>

    </div>
</footer>