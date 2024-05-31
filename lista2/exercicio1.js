class Funcionario {
    constructor(id, nome, cargo) {
        this.id = id;
        this.nome = nome;
        this.cargo = cargo;
       
    }
    calculaSalario() {
        let salario = 2000.
        return salario;
    }
}

class Gerente extends Funcionario {
    constructor(id, nome, cargo, quantidadeDeColaboradores){
        super(id, nome, cargo);
        this.quantidadeDeColaboradores = quantidadeDeColaboradores;
    }
    calculaSalario() {
        let salarioGerente = 3000.
        return salarioGerente;
    }
}


let fun1 = new Funcionario(1, 'Claudia', "funcionaria", 2000);
let gerente = new Gerente(1, 'Lisa', 'Gerente', 5);

console.log(fun1.calculaSalario());
console.log(gerente.calculaSalario());