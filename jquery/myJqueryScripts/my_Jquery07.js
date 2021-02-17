$(function () {

    $("#mostrar").click(mostrar)
    $("#esconder").click(esconder)
    $("#reverso").click(reverso)

    function mostrar() {
        $("#janela").fadeIn(2000)
    }

    function esconder() {
        $("#janela").fadeOut(300)

    }

    function reverso() {
        $("#janela").fadeToggle(300)

    }

})