
var listNomes = ["anderson","macedo","cavalcanti"]

// Adicionar na ultima posicao
listNomes.push("roberto")

for(var j in listNomes){
    console.log(listNomes[j])
}

console.log("------------------------------------------------------------------")


// Adicionar na primeira posicao
listNomes.unshift("miguel")

for(var j in listNomes){
    console.log(listNomes[j])
}

console.log("------------------------------------------------------------------")


// excluir o ultimo elemento
listNomes.pop()

for(var j in listNomes){
    console.log(listNomes[j])
}

console.log("------------------------------------------------------------------")


// excluir o ultimo elemento
listNomes.shift()

for(var j in listNomes){
    console.log(listNomes[j])
}

console.log("------------------------------------------------------------------")

console.log("o nome macedo esta na posicao: "+listNomes.indexOf("macedo"))


console.log("------------------------------------------------------------------")

listNomes.sort()

for(var j in listNomes){
    console.log(listNomes[j])
}

console.log("------------------------------------------------------------------")




var listNumeros = [1,2,8,6,4,23,9,1,4,5,2]

var maiorNumero = 0
for (var i = 0;i<listNumeros.length;i++){
    if (maiorNumero<listNumeros[i]){
        maiorNumero=listNumeros[i];
    }
}

console.log(maiorNumero)

console.log("------------------------------------------------------------------")

listNumeros.sort((a, b) => a-b)/*Ordenacao semelhante ao toCompare do java*/

for(var c in listNumeros){
    console.log(listNumeros[c])
}