$(document).ready(function() {
    $("#MostrarMensagem").click(MostrarMensagem);
    $("#EsconderMensagem").click(EsconderMensagem);
    $("#OcultarMensagem").click(OcultarMensagem);
    $("#MostrarEsconderMensagem").click(MostrarEsconderMensagem);
});

function MostrarMensagem(){
    $(".mensagem").show();
}
function EsconderMensagem(){
    $(".mensagem2").hide();
}
function MostrarEsconderMensagem(){
    $(".mensagem").toggle();
}

function OcultarMensagem(){
    $("#Mensagem").hide();
}