$(function () {

    $("#animar").click(animar)



    function animar() {
        $("#janela").animate({deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:90,top: 100,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height:400,top: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 300,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({right:80,height: 80,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({top: 90,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({right:100,width: 100,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height:11,top: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:100,height: 10,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height: 5,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({width:5,top: 500,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,width: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({width:500,top: 230,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({right:80,height: 80,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:120,top: 90,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,width: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 200,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}})

        $("#janela1").animate({deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({width:5,top: 500,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({right:80,height: 80,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height: 300,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 200,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 300,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height:5,top: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height: 80,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({width:5,top: 500,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,width: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 300,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height:5,top: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 300,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({right:80,height: 80,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}})

        $("#janela2").animate({deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,width: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,width: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 200,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height: 50,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({width:5,top: 500,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,width: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height: 20,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 200,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 300,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height:5,top: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height: 1,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({width:5,top: 500,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,width: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}})

        $("#janela3").animate({deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({right:80,height: 80,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height: 100,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:80,top: 200,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({right:100,width: 100,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","chartreuse");}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height:10,top: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","gray");}}).
        animate({left:100,height: 10,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","darkkhaki");}}).
        animate({deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 300,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","blue");}}).
        animate({height:5,top: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","darkgoldenrod");}}).
        animate({left:200,width: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 300,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","chocolate");}})

        $("#janela4").animate({deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:200,top: 300,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","fuchsia");}}).
        animate({right:80,height: 80,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({top: 90,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({right:100,width: 100,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","crimson");}}).
        animate({left:200,top: 200,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","brown");}}).
        animate({right:100,width: 100,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","blueviolet");}}).
        animate({height:15,top: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:100,height: 10,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height: 100,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({width:5,top: 500,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","darkcyan");}}).
        animate({right:100,width: 100,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({height:20,top: 200,deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","red");}}).
        animate({left:100,height: 10,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({deg:0},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' });}}).
        animate({left:300,top: 250,deg:360},{duration: 1200, step: function(now){$(this).css({ transform: 'rotate(' + now + 'deg)' }).css("background-color","red").css("border-radius","80px 80px");}})

    }


})