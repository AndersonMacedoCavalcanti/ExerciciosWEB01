$(function () {

    function animar() {
        $("#janelaPrinc").animate({left:"-=110"},1000)
    }

    $(function () {
        setInterval(animar,2000);

    })


})