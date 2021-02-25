var jogador = { //OBJ
    nome:"messi", //propriedades
    Habilidades:["chutar","driblar","correr"], //propriedades
    escreverHabilidades(){ // metodos
        this.Habilidades.forEach(skill => { console.log(this.nome + " e bom em "+ skill);});
    }
}

jogador.escreverHabilidades();

