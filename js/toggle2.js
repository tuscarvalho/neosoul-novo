$(document).ready(function() {
    $("#ExibirMensagem").click(ExibirMensagem);
    $("#OcultarMensagem").click(OcultarMensagem);
});

function ExibirMensagem(){
    $("#Exibir").show();
}

function OcultarMensagem(){
    $("#Exibir").hidden();
}