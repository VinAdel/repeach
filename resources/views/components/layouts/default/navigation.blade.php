<div class="fixed z-10 w-full md:absolute bg-app-black" x-data="{ open: false }">
    <div class="w-full max-w-6xl px-10 mx-auto md:px-0">
        <div class="grid flex-wrap items-center h-16 grid-cols-2 md:grid-cols-12">
            <div class="flex items-center h-16 col-span-1 md:col-span-3">
                <a href="/"
                    class="block text-4xl font-black text-transparent cursor-pointer bg-clip-text bg-gradient-to-r from-app-red via-app-pink to-app-white">r.</a>
            </div>

            <div x-on:click="open = !open"
                class="flex items-center justify-end h-16 col-span-1 text-gray-500 transition-colors cursor-pointer md:hidden hover:text-app-white">
                <?xml version="1.0" encoding="UTF-8"?><svg class="text-gray-500" width="24px" height="24px"
                    stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    stroke="currentColor">
                    <path d="M3 5h18M3 12h18M3 19h18" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </div>

            <div
                class="items-center justify-end hidden w-full h-16 col-span-2 space-x-10 font-medium text-gray-500 md:flex md:col-span-9">
                <a href="#use" class="transition-colors cursor-pointer hover:text-app-white">
                    Wie funktioniert's?
                </a>
                <a href="#use" class="transition-colors cursor-pointer hover:text-app-white">
                    Fragen
                </a>
                <a href="#use" class="transition-colors cursor-pointer hover:text-app-white">
                    Kontakt
                </a>
                <a href="/login" class="transition-colors cursor-pointer hover:text-app-white">Anmelden</a>
            </div>

            <div class="flex flex-wrap w-full col-span-2 gap-2 font-medium text-gray-500 md:hidden bg-app-black"
                x-show="open">
                <div class="fixed top-0 left-0 w-screen h-screen bg-app-black -z-10"></div>
                <p class="block w-full text-sm font-bold">MENÜ</p>
                <a href="#use" x-on:click="open = false"
                    class="px-4 py-2 transition-colors rounded-lg cursor-pointer text-app-white/90 bg-app-red">
                    Wie funktioniert's?
                </a>
                <a href="#use"
                    class="px-4 py-2 transition-colors rounded-lg cursor-pointer text-app-white/90 bg-app-red">
                    Fragen
                </a>
                <a href="#use"
                    class="px-4 py-2 transition-colors rounded-lg cursor-pointer text-app-white/90 bg-app-red">
                    Kontakt
                </a>
                <a href="/login"
                    class="px-4 py-2 transition-colors rounded-lg cursor-pointer text-app-white/90 bg-app-red">Anmelden</a>
            </div>
        </div>
    </div>
</div>
