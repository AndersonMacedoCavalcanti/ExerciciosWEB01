$(function () {

    $("#mostrar").click(mostrar)
    $("#esconder").click(esconder)
    $("#reverso").click(reverso)

    function mostrar() {
        $("#janela").show(2000, function () {
            alert("final da animacao")
        })
    }

    function esconder() {
        $("#janela").hide(300)

    }

    function reverso() {
        $("#janela").toggle(300)

    }

})