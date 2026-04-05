<!-- 
2.6 Herança: Estendendo Classes
2.6.1 Introdução à Herança
Na Programação Orientada a Objetos, herança significa que uma classe pode “herdar” características (propriedades e métodos) de outra classe. É como na vida real: um filho pode herdar características físicas ou comportamentais de seus pais. No PHP, isso é feito usando a palavra-chave extends.

A herança permite reaproveitar código e criar hierarquias de classes, evitando repetições. Assim, uma classe base (também chamada de classe pai ou superclasse) define propriedades e métodos comuns, enquanto outras classes (filhas ou subclasses) estendem essa base e podem adicionar ou modificar funcionalidades.

Segundo Zandstra (2014), a herança é um dos pilares da POO porque facilita a manutenção e a extensão de sistemas, tornando-os mais organizados.

2.6.2 Exemplo simples de herança
Para entender melhor como a herança funciona na prática, vamos construir um exemplo simples em PHP. A ideia é observar como uma classe filha pode aproveitar tudo o que já foi definido em uma classe pai, sem que seja necessário reescrever o código. Esse é um dos grandes benefícios da Programação Orientada a Objetos: evitar repetição e centralizar funcionalidades comuns.

Imagine que estamos modelando pessoas em um sistema escolar. Nesse sistema, tanto professores quanto estudantes possuem informações básicas, como nome e idade. Seria redundante criar essas propriedades duas vezes em classes diferentes. Em vez disso, podemos criar uma classe Pessoa, que funciona como modelo geral, e permitir que outras classes (como Estudante) herdem suas características.

Ao fazermos isso, conseguimos organizar o código em níveis hierárquicos: a classe Pessoa serve como base, enquanto Estudante (ou qualquer outra subclasse) representa especializações que acrescentam novos detalhes. Como destacam Ullman (2018) e Zandstra (2014), essa estrutura hierárquica é essencial para a criação de softwares mais flexíveis, reutilizáveis e fáceis de manter.

No exemplo a seguir, veremos uma aplicação prática dessa ideia em PHP. 
-->
<?php
// Classe pai (superclasse)
class Pessoa {
    public $nome;
    public $idade;

    public function apresentar() {
        return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

// Classe filha (subclasse)
class Estudante extends Pessoa {
    public $escola;

    public function apresentar() {
        // Sobrescreve o método da classe pai
        return parent::apresentar() . " Estudo na escola {$this->escola}.";
    }
}

// Classe filha (subclasse)
class Professor extends Pessoa {
    public $escola;

    public function apresentar() {
        // Sobrescreve o método da classe pai
        return parent::apresentar() . " Leciono na escola {$this->escola}.";
    }
}

// Criando objetos
$aluno = new Estudante();
$aluno->nome = "João";
$aluno->idade = 16;
$aluno->escola = "Escola Estadual Central";

echo $aluno->apresentar();

$professor = new Professor();
$professor->nome = "Pedro";
$professor->idade = 48;
$professor->escola = "Escola Estadual Central";

echo $professor->apresentar();

?>

<!-- 
Considere a seguinte explicação para este exemplo:

A classe Pessoa é a superclasse, com as propriedades $nome e $idade, além do método apresentar().

A classe Estudante herda de Pessoa com extends Pessoa. Isso significa que ela já possui nome, idade e o método apresentar(), mesmo sem declará-los novamente.

A subclasse adiciona a propriedade $escola e sobrescreve o método apresentar().

Usamos parent::apresentar() para reaproveitar o código da classe pai, acrescentando apenas uma informação extra.

O objeto $aluno consegue acessar tanto as propriedades herdadas quanto as novas.

Esse mecanismo mostra como a herança facilita a construção de sistemas mais complexos, permitindo criar classes especializadas sem reescrever tudo do zero (ULLMAN, 2018).

A herança é um recurso poderoso da POO que ajuda a estruturar melhor os programas, permitindo reaproveitar código e especializar classes. No próximo item, veremos como o polimorfismo e a sobrescrita de métodos ampliam ainda mais esse poder, permitindo que diferentes objetos respondam de maneiras específicas ao mesmo método.

O papel do protected na Herança
Como vimos na aula anterior sobre encapsulamento, o modificador protected ganha seu verdadeiro sentido aqui. Vale a pena mencionar que, se $nome e $idade fossem private na classe Pessoa, as classes Estudante e Professor não conseguiriam acessá-los diretamente.

Dica Técnica: Use protected em propriedades da classe pai quando você quiser que apenas as classes filhas possam "mexer" nelas, mantendo-as escondidas do resto do sistema.

Construtores na Herança
Um erro muito comum é criar um construtor na classe filha e esquecer que o pai também tinha um. Se a classe Pessoa tivesse um __construct, a classe Estudante precisaria chamá-lo.

Exemplo de Complemento para o código:
class Pessoa {
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

class Estudante extends Pessoa {
    public function __construct($nome, $idade, $escola) {
        // Repassa o nome e idade para o construtor do PAI
        parent::__construct($nome, $idade); 
        $this->escola = $escola;
    }
}
-->