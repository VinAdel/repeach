@extends('layouts.default')

@section('BODY')
    <section class="h-auto px-10 pb-20 pt-36 bg-app-black md:px-0">
        <div class="max-w-6xl mx-auto ">
            <div class="flex items-end justify-between mb-10">
                <div
                    class="w-full text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-app-red via-app-pink to-app-white">
                    Häufig gestellte Fragen
                </div>

                <div class="hidden md:block">
                    <img src="/assets/images/undraw_questions_re_1fy7.svg" class="w-1/2 ml-auto">
                </div>
            </div>

            <div
                class="flex flex-col items-center justify-between gap-5 p-5 mb-5 text-center rounded-lg md:text-left md:flex-row bg-app-white/5">
                <div>
                    <div class="w-full text-lg font-bold md:text-xl text-app-white">
                        Keine Antwort gefunden?
                    </div>

                    <p class="leading-7 tracking-wide text-gray-500 md:text-lg ">
                        Dann versuch uns doch einfach zu kontaktieren.
                    </p>
                </div>

                <div class="flex gap-4">
                    <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-app-red text-app-white/90">
                        <?xml version="1.0" encoding="UTF-8"?><svg width="24px" height="24px" stroke-width="2"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor">
                            <path
                                d="M18.118 14.702L14 15.5c-2.782-1.396-4.5-3-5.5-5.5l.77-4.13L7.815 2H4.064c-1.128 0-2.016.932-1.847 2.047.42 2.783 1.66 7.83 5.283 11.453 3.805 3.805 9.286 5.456 12.302 6.113 1.165.253 2.198-.655 2.198-1.848v-3.584l-3.882-1.479z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </div>

                    <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-app-red text-app-white/90">
                        <?xml version="1.0" encoding="UTF-8"?><svg width="24px" height="24px" stroke-width="2"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor">
                            <path d="M7 9l5 3.5L17 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M2 17V7a2 2 0 012-2h16a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2z"
                                stroke="currentColor" stroke-width="2"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="w-full mb-20 divide-y divide-app-white/10">
                <div class="py-5" x-data="{ open: false }" x-on:click="open = !open" @click.away="open = false">
                    <div class="flex items-center justify-between cursor-pointer text-app-white/90">
                        <span class="text-lg md:text-xl">Ist repeach. kostenlos?</span>

                        <?xml version="1.0" encoding="UTF-8"?><svg width="24px" height="24px" stroke-width="2"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor"
                            x-show="!open">
                            <path d="M6 12h6m6 0h-6m0 0V6m0 6v6" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

                        <?xml version="1.0" encoding="UTF-8"?><svg width="24px" height="24px" stroke-width="2"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor"
                            x-show="open">
                            <path d="M6 12h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </div>

                    <p x-show="open" class="mt-2 leading-7 tracking-wide text-justify text-gray-500 md:text-lg">
                        Ja, repeach. ist komplett kostenlos. Unsere Nutzer haben keine versteckten kosten zu befürchten.
                    </p>
                </div>

                <div class="py-5" x-data="{ open: false }" x-on:click="open = !open" @click.away="open = false">
                    <div class="flex items-center justify-between cursor-pointer text-app-white/90">
                        <span class="text-lg md:text-xl">Wo kriegt Ihr die Rezepte her?</span>

                        <?xml version="1.0" encoding="UTF-8"?><svg width="24px" height="24px" stroke-width="2"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor"
                            x-show="!open">
                            <path d="M6 12h6m6 0h-6m0 0V6m0 6v6" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

                        <?xml version="1.0" encoding="UTF-8"?><svg width="24px" height="24px" stroke-width="2"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor"
                            x-show="open">
                            <path d="M6 12h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </div>

                    <p x-show="open" class="mt-2 leading-7 tracking-wide text-justify text-gray-500 md:text-lg">
                        Wir arbeiten mit Ernährungsberaten in ganz Deutschland zusammen, die uns diese Rezepte zur Verfügung
                        stellen. Ebenso kann unsere Community ihre eigenen Rezepte auf unsere Website hochladen.
                    </p>
                </div>

                <div class="py-5" x-data="{ open: false }" x-on:click="open = !open" @click.away="open = false">
                    <div class="flex items-center justify-between cursor-pointer text-app-white/90">
                        <span class="text-lg md:text-xl">Wie viele Rezepte kommen wöchentlich dazu?</span>

                        <?xml version="1.0" encoding="UTF-8"?><svg width="24px" height="24px" stroke-width="2"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor"
                            x-show="!open">
                            <path d="M6 12h6m6 0h-6m0 0V6m0 6v6" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

                        <?xml version="1.0" encoding="UTF-8"?><svg width="24px" height="24px" stroke-width="2"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor"
                            x-show="open">
                            <path d="M6 12h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </div>

                    <p x-show="open" class="mt-2 leading-7 tracking-wide text-justify text-gray-500 md:text-lg">
                        Wir versuchen unseren Nutzern wöchentlich bis zu 35 neue Gerichte anzubieten. Natürlich dürfen auch
                        unsere Nutzer selber ihre eigenen Rezepte hochladen.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
