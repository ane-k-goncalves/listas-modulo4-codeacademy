class Objeto {
    constructor(altura, largura) {
        this.altura = altura;
        this.largura = largura;

    }
    calcularArea() {
        let areaObjeto = this.altura + this.altura *2;
        return areaObjeto;
    }
}

class Triangulo extends Objeto{
    constructor(altura, largura, tipo){
        super(altura, largura);
        this.tipo = tipo;
    }
    calcularArea() {
        let areaTriangulo = (this.altura * this.largura) / 2;
        return areaTriangulo;
    }
}

class Retangulo extends Objeto{
    constructor(altura, largura){
        super(altura, largura);
    }
    verificarSeEquadrado() {
        if (this.altura == this.largura){
            console.log("É um quadrado!");
        }else {
            console.log("Não é um quadrado!")
        }
    }
    calcularArea() {
        let areaRetangulo = this.altura * this.largura ;
        return areaRetangulo;
    }

}

let retangulo = new Retangulo(10,5);
retangulo.verificarSeEquadrado();
console.log(retangulo.calcularArea());


let triangulo = new Triangulo(10, 5 , "triangulo");
console.log(triangulo.calcularArea());