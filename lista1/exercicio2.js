class Universidade {
    constructor(nomeUniversidade) {
        this.nomeUniversidade = nomeUniversidade;
    }
    informarNomeUniversidade() {
        return this.nomeUniversidade;
    }
}

class Pessoa extends Universidade {
    constructor(nomeUniversidade, nome) {
        super(nomeUniversidade);
        this.nome = nome;
    }
    informacoes() {
        console.log("Seu nome é: " + this.nome + " você trabalha na universidade " + this.nomeUniversidade + ".");
    }
}


let pessoa1 = new Pessoa("Unicentro","Julia");
let pessoa2 = new Pessoa ("UTFPR","Ane");

pessoa1.informacoes();
pessoa2.informacoes();