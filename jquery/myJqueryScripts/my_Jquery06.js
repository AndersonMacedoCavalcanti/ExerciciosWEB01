$(function () {

    /* ---------------------esconder e mostrar ao clicar------------------------*/

    $(function () {

        $("#verde").on("click",{cor: "green",altura:"400px"},mudarCor)
        $("#vermelho").on("click",{cor: "red",altura:"800px"},mudarCor)
        $("#azul").on("click",{cor: "blue",altura:"100px"},mudarCor)

    })


    function mudarCor(parametro) {
        // $cor = parametro.data.cor - pode usar essa variavel ou diretamente
        $("#janela").css("background-color",parametro.data.cor).css("height",parametro.data.altura) //data = a dado
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



