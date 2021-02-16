let frase1 = "henrique soares dos anjos"
let frase2 = "BOA TARDE"
let maiusculo = frase1.toUpperCase()
let minusculo = frase2.toLowerCase()
let primeiraLetraMaiuscula = frase1.split(" ")

let frase =""
for(let i = 0; i<primeiraLetraMaiuscula.length;i++){
    if(primeiraLetraMaiuscula[i].length>3) {
        frase = frase.concat(primeiraLetraMaiuscula[i].charAt(0).toUpperCase().concat(primeiraLetraMaiuscula[i].substr(1)), " ");
    }else {frase = frase.concat(primeiraLetraMaiuscula[i]," ")}
}

console.log(frase)
console.log(maiusculo)
console.log(minusculo)