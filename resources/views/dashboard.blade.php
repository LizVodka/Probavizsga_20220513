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
                                <div class="divCell szakdogacime">Szakdolgozat címe</div>
                                <div class="divCell tagok">Készítők neve</div>
                                <div class="divCell githublink" id="header_githublink">GitHub link</div>
                                <div class="divCell oldallink" id="header_oldallink">Szakdolgozat elérhetősége</div>
                                <div class="divCell edit"></div>
                            </div>
                           @foreach ($szakdogak as $szakdoga)
                            <div class="row">
                                <div class="divCell szakdogacime">{{$szakdoga -> szakdoga_nev}}</div>
                                <div class="divCell tagok">{{$szakdoga -> tagokneve}}</div>
                                <div class="divCell githublink"><a href="{{$szakdoga -> githublink}}" target="_blank">{{$szakdoga -> githublink}}</a></div>
                                <div class="divCell oldallink"><a href="{{$szakdoga -> oldallink}}" target="_blank">{{$szakdoga -> oldallink}}</a></div>
                                <div class="divCell edit">
                                    <button>✏️</button>
                                    <form action="/szakdogak/{{$szakdoga -> id}}" method="POST" enctype="multipart/form-data">
                                        @method('delete')    
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <button type="submit">❌</button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="ujadat">
                    <form action="/dashboard" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div style="display:none"><input type="text" id="id"></div>
                            <div class="sor"><label for="szakdoga_nev">Szakdolgozat címe</label><input class="ujInput" type="text" id="szakdoga_nev" name="szakdoga_nev"></div>
                            <div class="sor"><label for="tagokneve">Készítők neve</label><input class="ujInput" type="text" id="tagokneve" name="tagokneve"></div>
                            <div class="sor"><label for="oldallink">Az oldal elérhetősége </label><input class="ujInput" type="text" id="oldallink" name="oldallink"></div>
                            <div class="sor"><label for="githublink"> GitHub elérhetőség</label><input class="ujInput" type="text" id="githublink" name="githublink"></div>
                            <div class="gomb"><button type="submit" id="uj">Új</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
