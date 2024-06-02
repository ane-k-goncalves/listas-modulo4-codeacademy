import { Pessoa } from './pessoa.mjs';

export class Livro  { 
    constructor(nomeLivro, autor, numPaginas) {
        this.nomeLivro = nomeLivro;
        this.autor = autor;
        this.numPaginas = numPaginas;
        this.dispoAluguel = true;
        this.alugadoPor = null;
    }
    alugar(pessoa) {
        if( this.dispoAluguel){
            this.dispoAluguel = false;
            this.alugadoPor = pessoa;
            console.log("Livro alugado com sucesso!");
        }else {
            console.log("Livro não disponível!");
        }
    
    }

    devolucao() {
        if(!this.dispoAluguel){
            console.log('O livro foi devolvido!');
            this.dispoAluguel = true;
            this.alugadoPor = null;
        }else {
            console.log('Não está alugado!');
        }
    }

}
