$(function () {

    function animar() {
        $("#janelaPrinc").animate({left:"-=200"},1000, function () {

            if($("#janelaPrinc").position().left == -600){
                $("#janelaPrinc").animate({left:"0"},0)
            }
        })
    }

    $(function () {
        setInterval(animar,2000);

    })


})