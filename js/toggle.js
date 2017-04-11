$(document).ready(function() {
    $("#MostrarMensagem").click(MostrarMensagem);
    $("#EsconderMensagem").click(EsconderMensagem);
    $("#MostrarEsconderMensagem").click(MostrarEsconderMensagem);
});

function MostrarMensagem(){
    $(".mostrar").show();
}
function EsconderMensagem(){
    $(".mostrar").hide();
}
function MostrarEsconderMensagem(){
    $(".efeito").toggle();
}
