$(function () {

    /*Primeira forma*/
    $("#cursoHtml").click(function () {
        alert("clicou em html");
    })

    /*Segunda forma*/
    $("#cursoCss").on("click", function () {
        alert("clicou em css");
    })

    function mostrarMesagem() {
        alert("Passou o mouse por cima");
        $("#cursoCss").off("mouseover", mostrarMesagem) /*off mata o evento apos a execucao dele*/
        /*deixar o off se, parametros ele mata tod o evento dele*/
    }

    $("#cursoCss").on("mouseover",mostrarMesagem)
})

