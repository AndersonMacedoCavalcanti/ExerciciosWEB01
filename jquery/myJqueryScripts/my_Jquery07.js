$(function () {

    function animar() {
        $("#janelaPrinc").animate({left:"-=200"},1000)
    }

    $(function () {
        setInterval(animar,2000);

    })


})