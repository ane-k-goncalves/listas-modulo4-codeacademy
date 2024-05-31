class Pessoa {
    constructor (nome, diaNascimento, mesNascimento, anoNascimento) {
        this.nome = nome;
        this.diaNascimento = diaNascimento;
        this.mesNascimento = mesNascimento;
        this.anoNascimento = anoNascimento;
        this.idade = null;
    }
    calcularIdade(diaAtual, mesAtual, anoAtual) {
        let idade = anoAtual - this.anoNascimento;
        if (mesAtual < this.mesNascimento || (mesAtual === this.mesNascimento && diaAtual < this.diaNascimento)) {
            idade--;
        }
        this.idade = idade;
    }
    informarIdade() {
        return this.idade;
    }
    informarNome() {
        return this.nome;
    }
    ajustaDataDeNascimento(dia, mes, ano) {
        this.diaNascimento = dia;   
        this.mesNascimento = mes;
        this.anoNascimento = ano;
    }
}

let pessoa1 = new Pessoa ('Ane',25,12,2001);
let pessoa2 = new Pessoa ('Amanda', 3,2,2000);

const diaAtual = 30;
const mesAtual = 5;
const anoAtual = 2024;

console.log(pessoa1.calcularIdade(diaAtual, mesAtual, anoAtual));
console.log(pessoa1.informarIdade());
console.log(pessoa1.informarNome());

pessoa1.ajustaDataDeNascimento(25, 3, 2006);
console.log(pessoa1.calcularIdade(diaAtual, mesAtual, anoAtual));
console.log(pessoa1.informarIdade());