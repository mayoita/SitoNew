/**
 * Created by massimomoro on 14/12/15.
 */
(function ($) {
    Drupal.behaviors.loadCasinoGamesRegolo = {
        attach: function (context, settings) {

            var stringTitle = Drupal.settings.rsv_casino_games.stringTitle+": € ";

            // Vettore che contiene le possibili puntate
            var elencoPuntate = new Array(
//         "5000",
                "10",
                "15",
                "20",
                "25",
                "30",
                "35",
                "40",
                "45",
                "50",
                "55",
                "60",
                "65",
                "70",
                "75",
                "80",
                "85",
                "90",
                "95",
                "100",
                "150",
                "200",
                "250",
                "300",
                "350",
                "400",
                "450",
                "500",
                "550",
                "600"
            );



            // Selettore
            var opzioniPuntata = "";
            for (var i = 0; i < elencoPuntate.length; i++){
                opzioniPuntata = opzioniPuntata+"<option value='"+elencoPuntate[i]+"'>"+elencoPuntate[i]+"</option>";
            }
            var selettorePuntata = '<select id="selezione-puntata">'+opzioniPuntata+'</select>';


            // Segnaposto dei risultati
            var segnapostoRisultati = '<div id="segnaposto-risultati">\
  <div id="risultato-pieno"></div>\
  <div id="risultato-cavallo"></div>\
  <div id="risultato-trasversale-piena"></div>\
  <div id="risultato-carre"></div>\
  <div id="risultato-trasversale-semplice"></div>\
  <div id="risultato-dozzina"></div>\
</div>';


            // Aggiunge il selettore ed il resto del codice HTML nella pagina
            $('.field-name-field-body-three').after('<div id="regolo">'+stringTitle+selettorePuntata+segnapostoRisultati+'</div>');

            // Inizializzo l'elenco dei risultati
            var pienoTot = (parseInt(elencoPuntate[0])*35).toString();
            $('#risultato-pieno').html("<span class='label'>Pieno:</span><span class=\"value\">  "+pienoTot+" €</span>");

            var cavalloTot = (parseInt(elencoPuntate[0])*17).toString();
            $('#risultato-cavallo').html("<span class='label'>Cavallo:</span><span class=\"value\">  "+cavalloTot+" €</span>");

            var trasversalePienaTot = (parseInt(elencoPuntate[0])*11).toString();
            $('#risultato-trasversale-piena').html("<span class='label'>Trasversale piena:</span><span class=\"value\">  "+trasversalePienaTot+" €</span>");

            var carreTot = (parseInt(elencoPuntate[0])*8).toString();
            $('#risultato-carre').html("<span class='label'>Carré:</span><span class=\"value\">  "+carreTot+" €</span>");

            var trasversaleSempliceTot = (parseInt(elencoPuntate[0])*5).toString();
            $('#risultato-trasversale-semplice').html("<span class='label'>Trasversale semplice:</span><span class=\"value\">  "+trasversaleSempliceTot+" €</span>");

            var dozzinaTot = (parseInt(elencoPuntate[0])*2).toString();
            $('#risultato-dozzina').html("<span class='label'>Colonna o dozzina:</span><span class=\"value\">  "+dozzinaTot+" €</span>");


            // Quando modifico la puntata aggiorno i risultati
            $('#selezione-puntata').live("change", function(){

                if (parseInt($(this).val()) > 100){
                    $('#risultato-pieno').html("<span class='label'>Pieno:</span><span class=\"value\">  --- </span>");
                } else {
                    pienoTot = (parseInt($(this).val())*35).toString();
                    $('#risultato-pieno').html("<span class='label'>Pieno:</span><span class=\"value\">  "+pienoTot+" €</span>");
                }

                if (parseInt($(this).val()) > 200){
                    $('#risultato-cavallo').html("<span class='label'>Cavallo:</span><span class=\"value\">  --- </span>");
                } else {
                    cavalloTot = (parseInt($(this).val())*17).toString();
                    $('#risultato-cavallo').html("<span class='label'>Cavallo:</span><span class=\"value\">  "+cavalloTot+" €</span>");
                }

                if (parseInt($(this).val()) > 300){
                    $('#risultato-trasversale-piena').html("<span class='label'>Trasversale piena:</span><span class=\"value\">  --- </span>");
                } else {
                    trasversalePienaTot = (parseInt($(this).val())*11).toString();
                    $('#risultato-trasversale-piena').html("<span class='label'>Trasversale piena:</span><span class=\"value\">  "+trasversalePienaTot+" €</span>");
                }

                if (parseInt($(this).val()) > 400){
                    $('#risultato-carre').html("<span class='label'>Carré:</span><span class=\"value\">  --- </span>");
                } else {
                    carreTot = (parseInt($(this).val())*8).toString();
                    $('#risultato-carre').html("<span class='label'>Carré:</span><span class=\"value\">  "+carreTot+" €</span>");
                }

//         if (parseInt($(this).val()) > 100000){
//           $('#risultato-trasversale-semplice').html("<span class='label'>Trasversale semplice:</span><span class="value">  ---");
//         } else {
                trasversaleSempliceTot = (parseInt($(this).val())*5).toString();
                $('#risultato-trasversale-semplice').html("<span class='label'>Trasversale semplice:</span><span class=\"value\">  "+trasversaleSempliceTot+" €</span>");
//         }

//         if (parseInt($(this).val()) > 100000){
//           $('#risultato-dozzina').html("<span class='label'>Colonna o dozzina:</span><span class="value">  ---");
//         } else {
                dozzinaTot = (parseInt($(this).val())*2).toString();
                $('#risultato-dozzina').html("<span class='label'>Colonna o dozzina:</span><span class=\"value\">  "+dozzinaTot+" €</span>");
//         }



            });

        }
    }


    Drupal.behaviors.loadCasinoGamesRegole = {
        attach: function (context, settings) {


            var elencoRegole = Drupal.settings.rsv_casino_games.elencoRegole;
            var elencoDescrizioni = Drupal.settings.rsv_casino_games.elencoDescrizioni;

//       console.log(elencoRegole);
//       console.log(elencoDescrizioni);

            var htmlRegole = '<div id="elenco-regole">';
            for (var i = 0; i < elencoRegole.length; i++){
                htmlRegole = htmlRegole+'<div class="regola" id="regola-'+i+'" >'+elencoRegole[i]+'</div>';
            }
            htmlRegole = htmlRegole+'</div>';

            var htmlDescrizioni = '<div id="elenco-descrizioni">';
            for (var i = 0; i < elencoDescrizioni.length; i++){
                if (i==0){
                    htmlDescrizioni = htmlDescrizioni+'<div class="descrizione descrizione-active" id="descrizione-'+i+'" >'+elencoDescrizioni[i]+'</div>';
                } else {
                    htmlDescrizioni = htmlDescrizioni+'<div class="descrizione" id="descrizione-'+i+'" >'+elencoDescrizioni[i]+'</div>';
                }
            }
            htmlDescrizioni = htmlDescrizioni+'</div>';

//       console.log(htmlRegole);
//       console.log(htmlDescrizioni);


            $('.field-name-field-body-two').after('<div id="regole">'+htmlRegole+htmlDescrizioni+'</div>');

            $('.regola').live({
                mouseenter: function () {
                    $('#regola-0').html(elencoRegole[0]);
                    $('#regole').addClass('regole-hover');
                    $(this).addClass('regola-hover');
                },
                mouseleave: function () {
                    $('#regola-0').html(elencoRegole[parseInt($('.descrizione-active').attr('id').substring(12))]);
                    $('#regole').removeClass('regole-hover')
                    $(this).removeClass('regola-hover');
                }
            });
            $('.regola').live('click', function(){
                $('.descrizione').removeClass('descrizione-active');
//         console.log($(this).attr('id').substring(7));
                $('#descrizione-'+$(this).attr('id').substring(7)).addClass('descrizione-active');
                $('#regole').removeClass('regole-hover')
//         regolaAttiva = $($(this).html());
                $('#regola-0').html($(this).html());
            });


        }
    }


}(jQuery));