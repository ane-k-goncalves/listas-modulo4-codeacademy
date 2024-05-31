import { Produto } from './produto.mjs';

class Pedido extends Produto {
    constructor(descricao, preco, quantidadeEstoque, quantidade) {
        super(descricao, preco,quantidadeEstoque);  
        this.quantidade = quantidade;
        this.valor = 0;
    }   
    itens() {
        
        if(this.quantidade < this.quantidadeEstoque){
            let valor = this.preco * this.quantidade;
            this.valor = valor;
        }
        return this.valor;
    }
    metodoPagamento() {
        console.log("O valor da compra é: R$" + this.valor + " escolha a forma de pagamento: \n1.dinheiro \n2.cheque \n3.cartão");
    }
}


let produto1 = new Produto ("Macarrao",10, 200);
produto1.infos();

let pedido1 = new Pedido ("macarrao", 10, 200, 5);
console.log(pedido1.itens());
pedido1.metodoPagamento();