<nav class="w-full py-3 sticky hrefp-0 left-0 px-2" x-data="{ open: false }">
    <div class="py-2 px-3 m-auto max-w-3xl rounded-lg flex items-center justify-between text-white bg-black bg-opacity-40 backdrop-blur-md border border-white/10">
        <a href="{{ route('home') }}"><img src="{{ asset('images/favicon.png') }}" alt="Favicon" width="50"></a>
        <ul class="flex items-center 470px:hidden">
            <a wire:navigate class="transition-all hover:text-indigo-600" href="/">Home</a>
            <a wire:navigate class="transition-all hover:text-indigo-600 ml-7" href="/projects">Projects</a>
            <a wire:navigate class="transition-all hover:text-indigo-600 ml-7" href="/#work-history">Work</a>
            <a wire:navigate class="transition-all hover:text-indigo-600 ml-7" href="/#education">Education</a>
            @auth
                <a class="transition-all hover:text-indigo-600 ml-7" href="{{ route('dashboard') }}">Dashboard</a>
            @endauth
        </ul>
        <div class="relative hidden 470px:block">
            <img src="https://api.iconify.design/fluent:text-align-right-16-filled.svg?color=%23ffffff"x-on:click="open = !open" class="cursor-pointer">
            <ul x-show="open" class="flex flex-col absolute hrefp-7 right-0 bg-black bg-opacity-80 backdrop-blur-md rounded-md p-4">
                <a class="transition-all hover:text-indigo-600 py-2 px-4 border-b border-white/10" wire:navigate href="{{ route('home') }}">Home</a>
                <a class="transition-all hover:text-indigo-600 py-2 px-4 border-b border-white/10" wire:navigate href="/">Projects</a>
                <a class="transition-all hover:text-indigo-600 py-2 px-4 border-b border-white/10" wire:navigate href="/#work-history">Work</a>
                <a class="transition-all hover:text-indigo-600 py-2 px-4" wire:navigate href="/#education">Education</a>
                @auth
                    <a class="transition-all hover:text-indigo-600 py-2 px-4" wire:navigate href="{{ route('dashboard') }}">Dashboard</a>
                @endauth
            </ul>
        </div>
    </div>
</nav>