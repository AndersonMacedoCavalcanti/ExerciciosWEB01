
function f() {
    let list = []
    for (let i = 0; i < 10; i++) {
        let x = Math.ceil(Math.random() * 20)
            if(list.indexOf(x)<0){
                list.push(x)
            }else {i--}
    }
    console.log(list)
    return list
}

function f1(lista) {
    let list = f()
    let pontos = 0
    for (let i = 0;i<=list.length;i++){
        if(list.indexOf(lista[i])>=0){
            pontos++
        }
    }
    if (pontos===9){
        console.log("\nParabens!!!\nVoce acertou 9 numeros e ganhou: $10.000")
    }else if (pontos===10){
        console.log("\nParabens!!!\nVoce acertou 10 numeros e ganhou: $10.000")
    }else{
        console.log("\nHumm infelizmente voce nao acertou o suficiente\nvoce acertou: "+pontos)
        return 1;
    }
}
let lista = [3,20,10,5,9,12,7,18,19,15]

let quanti = 0
while (f1(lista)===1){
    quanti++
    f1(lista)
}
console.log(quanti)
