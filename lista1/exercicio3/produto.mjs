export class Produto {
    constructor(descricao, preco, quantidadeEstoque) {
        this.descricao = descricao;
        this.preco = preco;
        this.quantidadeEstoque = quantidadeEstoque;
    }
    infos() {
        console.log("Nome do produto: " + this.descricao + "\n" + "Preço: " + this.preco + "\n" + "Quantidade em estoque: " + this.quantidadeEstoque + "\n");
    }
}

