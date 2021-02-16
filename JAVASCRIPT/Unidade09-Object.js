let produto={nome:"Caneta",preco:"3.99",cor:"Azul"}

function retornInfo() {
    return "Meu produto: " + produto.nome + ", custa: "+produto.preco;
}

produto.informacoes = retornInfo()

console.log(produto.informacoes)

