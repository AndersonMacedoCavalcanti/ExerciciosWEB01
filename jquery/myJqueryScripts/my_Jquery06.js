$(function () {

    /* ---------------------esconder e mostrar ao clicar------------------------*/

    $(function () {

        $("#mostrar").on("click",mostarPorMou)

        $("#esconder").on("click",esconderPorMou)

    })

    function mostarPorMou() {
        $("#janela").show()
    }

    function esconderPorMou() {
        $("#janela").hide()
    }



/* ---------------------esconder e mostrar ao passar o mouse------------------------*/

    $(function () {

        $("#janela").hover(esconder,mostrar) /*simplificacao de colocar o mouse por cima e tirar*/
    })


    function mostrar() {
        $("#janela").show()
    }

    function esconder() {
        $("#janela").hide()

    }

/*---------------------------------------------------------------------------------------------------------*/

    $(function () {
        $("main").css("width",$(window).width()-16).css("height",$(window).height()-16);


    })

        function f() {

            let altura = $(window).height()-16
            let largura = $(window).width()-16

            $("main").css("width",largura).css("height",altura);
        }

        $(window).resize(function () {
            f()
        })
})



