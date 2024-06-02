import { Pessoa } from './pessoa.mjs';
import { Livro } from './livro.mjs';

let pessoa1 = new Pessoa ("Ane", "sflk","ajns@gmail.com", 4244);
let livro1 = new Livro ("Harry POtter", "J.K.R", 300);

livro1.alugar(pessoa1);

livro1.devolucao();