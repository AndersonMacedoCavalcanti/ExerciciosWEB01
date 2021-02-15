function f() {
    console.log("\nAnderson Macedo Cavalcanti")
}
f()

console.log("-------------------------------------------------------------------")




function f1(celsius) {
    return (celsius * 1.8) + 32;
}

console.log("celsius = "+f1(70))




console.log("-------------------------------------------------------------------")





function calcularDiaria(dias) {
    return (2000/dias).toFixed(2);
}

console.log(calcularDiaria(3))





console.log("-------------------------------------------------------------------")





function calcularSalario(valorHora,dias) {
    return (valorHora*dias).toFixed(2)
}

console.log("Salario = "+calcularSalario(89.78,30))