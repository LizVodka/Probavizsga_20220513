$(function () {
    const termekek = [];
    const apivegpont = "http://localhost:3000/termekek";
    const sajatAjax = new SajatAjax();
    adatbeolvasas(apivegpont, termekek, megjelenit);
    sajatAjax.postAjax(apivegpont, ujAdat);
    
    function megjelenit() {
        const szuloElem = $("#galeria tbody");
        const sablonElem = $("thead .kartya"); //ez a mintaelem, amit másolgatunk
        console.log(termekek);
        //sablonElem.empty();
        sablonElem.show();
        termekek.forEach(function (tombelem) {
            let ujElem = sablonElem.clone().appendTo(szuloElem);
            let ujKartya = new KartyaAdmin(ujElem, tombelem);
        });
        sablonElem.hide();
    }

    $(window).on("termekTorles", (event) => {
        const id = event.detail.id;
        //console.log(event.detail.id);
        sajatAjax.deleteAjax(apivegpont, id);

    });

    $(window).on("termekModosit", () => {
        console.log("Modosítottam magam");
    });

    $(window).on("termekFelvisz", () => {
        console.log("felvivődöm");
    });

    function adatbeolvasas(fajlnev, tomb, myCallback) {
        $.ajax({
            url: fajlnev,
            success: function (result) {
                console.log("result:" + result);
                result.forEach((value) => {
                    tomb.push(value);
                });
                console.log("tömb: " + tomb);

                myCallback();
            },
        });
    }
});
