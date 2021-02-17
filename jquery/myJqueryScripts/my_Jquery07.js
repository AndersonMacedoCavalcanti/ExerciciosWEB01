$(function () {

    var limite;

    function animar() {

        $("#janelaPrinc").animate({left:"-=200"},1000, function () {

            if($("#janelaPrinc").position().left == limite){
                $("#janelaPrinc").animate({left:"0"},0)
            }
        })
    }

    $(function () {

        limite =$("#janelaPrinc img").length * $("#janelaPrinc img").width()*-1;

        $("#janelaPrinc").append("<img>")
        $("#janelaPrinc img:last").attr("src","../HTML/imagens/Pato-LAranja_bx2.jpg")




        setInterval(animar,2000);



    })


})