$(function () {

    $("#mostrar").click(mostrar)
    $("#esconder").click(esconder)
    $("#reverso").click(reverso)

    function mostrar() {
        $("#janela").slideDown(2000)
    }

    function esconder() {
        $("#janela").slideUp(2000)

    }

    function reverso() {
        $("#janela").slideToggle(300)

    }

})