<nav class="navbar navbar-expand-lg navbar-glass">
    <div class="container-fluid flex justify-between items-center">

        {{-- LEFT: MENU + SEARCH --}}
        <div class="flex items-center gap-3">

            {{-- TOGGLE --}}
            <button data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                ☰
            </button>

            {{-- SEARCH --}}
            <form action="{{ route('search') }}">
                <input type="text" name="q" placeholder="Search"
                       class="border p-2 rounded">
            </form>

        </div>

        {{-- RIGHT: NOTIF + USER --}}
        <div class="flex items-center gap-4">

            {{-- NOTIFICATION --}}
            <div class="relative">
                <button data-bs-toggle="dropdown">
                    🔔
                    <span class="absolute top-0 right-0 bg-red-600 text-white text-xs px-1 rounded">
                        {{ $notifCount ?? 2 }}
                    </span>
                </button>

                <div class="dropdown-menu right-0 p-3 w-72">

                    <h6 class="font-bold mb-2">Notifications</h6>

                    @forelse($notifications ?? [] as $notif)
                        <div class="border-b py-2">
                            <p class="text-sm">{{ $notif['text'] }}</p>
                            <small class="text-gray-500">{{ $notif['time'] }}</small>
                        </div>
                    @empty
                        <p class="text-gray-500">No notifications</p>
                    @endforelse

                </div>
            </div>

            {{-- USER --}}
            <div class="relative">
                <button data-bs-toggle="dropdown">

                    <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}"
                         class="w-10 h-10 rounded-full">

                </button>

                <div class="dropdown-menu right-0 p-3">

                    <h6>{{ auth()->user()->name ?? 'Guest' }}</h6>
                    <small>{{ auth()->user()->email ?? '-' }}</small>

                    <hr>

                    <a href="{{ route('home') }}">Home</a><br>
                    <a href="{{ route('profile') }}">Profile</a><br>

                    {{-- LOGOUT --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>

                </div>
            </div>

        </div>

    </div>
</nav>