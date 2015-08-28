var $load = jQuery.noConflict();

function checkTime(i){
    if (i<10) {
        i="0" + i;
    }
    return i;
}


function mostrarTempo()
{
    date = new Date();

    dataAtual = date.getDate() +'/0'+ (date.getMonth()+parseInt(1)) +'/'+ date.getFullYear() + ' | ' +
    date.getHours() +':'+ checkTime(date.getMinutes())+':'+checkTime(date.getSeconds());

    $load("#timer").html(dataAtual);

    setTimeout('mostrarTempo()',1000);

}


mostrarTempo();