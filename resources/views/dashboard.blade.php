<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="szakdolgozatoklistazasa">

                        <div class="lista">
                            <div class="fejlec">
                                <div class="szakdogacime">Szakdolgozat címe</div>
                                <div class="tagok">Készítők neve</div>
                                <div class="githublink" id="header_githublink">GitHub link</div>
                                <div class="oldallink" id="header_oldallink">Szakdolgozat elérhetősége</div>
                            </div>
                           @foreach ($szakdogak as $szakdoga)
                            <div class="row">
                                <div class="szakdogacime">{{$szakdoga -> szakdoga_nev}}</div>
                                <div class="tagok">{{$szakdoga -> tagokneve}}</div>
                                <div class="githublink">{{$szakdoga -> githublink}}</div>
                                <div class="oldallink">{{$szakdoga -> oldallink}}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="ujadat">
                    <form action="/dashboard" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div style="display:none"><input type="text" id="id"></div>
                            <div class="sor"><label for="szakdoga_nev">Szakdolgozat címe</label><input type="text" id="szakdoga_nev" name="szakdoga_nev"></div>
                            <div class="sor"><label for="tagokneve">Készítők neve</label><input type="text" id="tagokneve" name="tagokneve"></div>
                            <div class="sor"><label for="oldallink">Az oldal elérhetősége </label><input type="text" id="oldallink" name="oldallink"></div>
                            <div class="sor"><label for="githublink"> GitHub elérhetőség</label><input type="text" id="githublink" name="githublink"></div>
                            <div class="gomb"><button type="submit" id="uj">Új</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
