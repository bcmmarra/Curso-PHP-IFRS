<!-- 
2.1 O que é Programação Orientada a Objetos (POO)?
A Programação Orientada a Objetos (POO) é um paradigma de programação, ou seja, uma forma de organizar e estruturar o código de um programa. Diferente da programação estruturada, que organiza o código em funções e blocos de comandos, a POO se baseia no conceito de objetos, que representam entidades do mundo real ou abstrato. Cada objeto é capaz de armazenar características (também chamadas de atributos ou propriedades) e ações (também chamadas de métodos).

De maneira simples, podemos imaginar que a POO funciona como se estivéssemos criando modelos para representar coisas do mundo ao nosso redor. Por exemplo, podemos modelar uma pessoa em um programa: essa pessoa tem atributos como nome e idade, e pode realizar ações como se apresentar ou estudar. Essa lógica torna o código mais próximo da forma como pensamos e interagimos com o mundo.

2.1.1 A importância da POO
A grande vantagem da POO está na possibilidade de criar sistemas mais organizados, reutilizáveis e fáceis de manter. Em vez de escrever o mesmo código várias vezes, podemos criar uma classe que serve de molde para gerar quantos objetos quisermos.

Por exemplo, se criarmos a classe Pessoa, podemos instanciar diversas pessoas, cada uma com seus próprios dados, mas compartilhando a mesma estrutura. Esse processo evita repetição de código e facilita alterações futuras: basta mudar a definição da classe e todos os objetos automaticamente seguem a nova estrutura.

2.1.2 Classes e Objetos: entendendo a diferença
Veja abaixo um resumo do que é uma classe e um objeto:

Classe: é o molde ou modelo. Define quais atributos e métodos um objeto terá. (Planta da CASA)
Objeto: é uma instância da classe, ou seja, uma aplicação concreta daquele molde. (A própria CASA)

Podemos comparar a classe a uma planta arquitetônica de uma casa: a planta não é a casa, mas a partir dela podemos construir várias casas semelhantes. Já os objetos são as casas construídas, cada uma podendo ter sua cor, móveis e moradores diferentes, embora sigam a planta inicial.

2.1.3 Exemplo prático em PHP
Agora, veja abaixo um exemplo prático de POO em PHP: 
-->
<?php
// Definição da classe
class Pessoa {
    public $nome;
    public $idade;

    // Método que define o comportamento da pessoa
    public function apresentar() {
        echo "Olá! Meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

// Criação de um objeto da classe Pessoa
$p1 = new Pessoa();
$p1->nome = "Maria";
$p1->idade = 20;

// Executando o método
$p1->apresentar(); // Saída: Olá! Meu nome é Maria e tenho 20 anos.
?>

<!-- 
Neste exemplo, a classe Pessoa é o molde. Ela possui duas propriedades ($nome e $idade) e um método (apresentar()). Ao criar um objeto com new Pessoa(), instanciamos uma pessoa específica — no caso, Maria, com 20 anos. Ao chamar $p1->apresentar(), o método usa os valores definidos para exibir a mensagem.

Esse modelo pode ser replicado quantas vezes quisermos: cada novo objeto terá seus próprios dados, mas sempre respeitando a estrutura da classe.

Nota de Sintaxe: No PHP, utilizamos o operador -> (seta) para acessar as propriedades e métodos de um objeto. É o equivalente ao ponto . em outras linguagens.

2.1.4 Por que aprender POO em PHP?
O PHP é uma linguagem que inicialmente foi criada de forma estruturada, mas ao longo de sua evolução incorporou plenamente os conceitos da POO (HOLZNER, 2006; ULLMAN, 2018). Hoje, é possível desenvolver aplicações modernas e complexas utilizando classes, objetos, herança, polimorfismo e outros princípios orientados a objetos.

Além disso, os principais frameworks de PHP, como Laravel e Symfony, são totalmente baseados em POO. Portanto, dominar esse paradigma é essencial para evoluir como programador e construir sistemas escaláveis e de fácil manutenção (POWERS, 2017; PHP MANUAL, 2025).
-->