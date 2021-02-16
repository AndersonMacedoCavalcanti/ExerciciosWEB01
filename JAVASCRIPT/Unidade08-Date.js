let agora = new Date()

console.log(agora.getDate()+"/"+(agora.getMonth()>10?(agora.getMonth()+1):"0"+(agora.getMonth()+1))+"/"+agora.getFullYear());

let aniversario = new Date(1997,7,2)

console.log(aniversario.getDate())

console.log((agora.getHours()<10?"0"+agora.getHours():agora.getHours())+
    ":"+(agora.getMinutes()<10?"0"+agora.getMinutes():agora.getMinutes())+
    ":"+agora.getMilliseconds());