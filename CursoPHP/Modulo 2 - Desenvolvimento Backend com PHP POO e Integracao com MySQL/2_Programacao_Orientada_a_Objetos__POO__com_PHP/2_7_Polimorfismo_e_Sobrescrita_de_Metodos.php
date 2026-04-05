<!-- 
2.7 Polimorfismo e Sobrescrita de Métodos
2.7.1 Introdução ao Polimorfismo
A palavra polimorfismo vem do grego e significa literalmente “muitas formas”. Na Programação Orientada a Objetos (POO), o polimorfismo permite que diferentes classes respondam ao mesmo método de maneiras distintas. Isso é extremamente útil porque possibilita escrever código mais flexível, capaz de lidar com objetos diferentes sem precisar saber exatamente de qual classe eles são.

No PHP, o polimorfismo é normalmente implementado por meio da sobrescrita de métodos (method overriding). Isso ocorre quando uma classe filha redefine um método que já existia na classe pai, modificando seu comportamento para atender necessidades específicas.

De acordo com Ullman (2018), esse recurso permite reaproveitar interfaces comuns entre classes, mas ainda assim adaptar comportamentos de acordo com cada caso.

2.7.2 Exemplo prático sem polimorfismo
Vamos continuar com o exemplo anterior da classe Pessoa e da classe Estudante. Suponha que agora criemos também uma classe Professor. Tanto alunos quanto professores são pessoas, mas cada um deve se apresentar de uma maneira diferente.

No exemplo abaixo, cada tipo de pessoa precisa ser tratado com estruturas condicionais para decidir como se apresentar. 
-->
<?php
class Pessoa {
    public $nome;
    public $tipo; // estudante ou professor
}

$p1 = new Pessoa();
$p1->nome = "Carlos";
$p1->tipo = "estudante";

$p2 = new Pessoa();
$p2->nome = "Marcos";
$p2->tipo = "professor";

// Verificando manualmente o tipo de cada pessoa
if ($p1->tipo == "estudante") {
    echo "Olá, sou o estudante {$p1->nome}.";
} elseif ($p1->tipo == "professor") {
    echo "Olá, eu sou o professor {$p1->nome}.";
}

echo "<br>";

if ($p2->tipo == "estudante") {
    echo "Olá, sou o estudante {$p2->nome}.";
} elseif ($p2->tipo == "professor") {
    echo "Olá, eu sou o professor {$p2->nome}.";
}
?>

<!-- 
Observe os seguintes problemas deste código:

É repetitivo: precisamos verificar o tipo toda vez que queremos apresentar uma pessoa.
É difícil de manter: se surgir um novo tipo (ex.: Diretor), será necessário editar todos os if.
Vai contra os princípios da POO, que incentivam o reaproveitamento e organização do código.

2.7.3 Exemplo prático com polimorfismo
Com polimorfismo, cada classe sabe como deve se apresentar. Não precisamos de condicionais espalhadas pelo código.
-->
<?php
class NovaPessoa {
    public $nome;

    public function apresentar() {
        return "Olá, meu nome é {$this->nome}.";
    }
}

class Estudante extends NovaPessoa {
    public function apresentar() {
        return "Olá, sou o estudante {$this->nome}.";
    }
}

// Aqui está o poliformismo
class Professor extends NovaPessoa {
    public function apresentar() {
        return "Olá, eu sou o professor {$this->nome}.";
    }
}

// Criando objetos
$aluno = new Estudante();
$aluno->nome = "Carlos";

$professor = new Professor();
$professor->nome = "Marcos";

// Chamando o mesmo método apresentar()
echo $aluno->apresentar();     // Olá, sou o estudante Carlos.
echo "<br>";
echo $professor->apresentar(); // Olá, eu sou o professor Marcos.
?>

<!-- 
Vejamos a explicação deste exemplo:

A classe Pessoa define o método apresentar(), que simplesmente mostra o nome.

A classe Estudante herda de Pessoa, mas sobrescreve (override) o método apresentar(), adaptando a mensagem para indicar que se trata de um estudante.
A classe Professor faz o mesmo, mas com uma mensagem própria.

O interessante é que o método chamado é sempre o mesmo (apresentar()), mas a resposta muda conforme o tipo do objeto (se é Pessoa, Estudante ou Professor).

Isso mostra como o mesmo método pode assumir múltiplas formas, de acordo com o objeto que o invoca — esse é o coração do polimorfismo.

2.7.4 O que é sobrescrita (override) de métodos?
O termo override (em português, sobrescrita) refere-se ao ato de redefinir um método que já existe em uma classe pai, mas dentro de uma classe filha. Isso significa que, quando uma subclasse herda métodos de sua superclasse, ela pode substituir o comportamento original por um novo comportamento mais adequado. Em outras palavras: o método tem o mesmo nome e a mesma assinatura (parâmetros e tipo de retorno), mas a implementação do corpo é diferente.

No exemplo a seguir, vamos utilizar uma situação do mundo real para facilitar a compreensão: animais produzem sons, mas cada animal emite um som diferente. Podemos, então, criar uma classe Animal, que possui um método genérico chamado emitirSom(). A partir dela, outras classes — como Cachorro e Gato — vão herdar esse método e sobrescrevê-lo para emitir sons específicos.
-->
<?php
class Animal {
    public function emitirSom() {
        return "Som genérico de animal";
    }
}

class Cachorro extends Animal {
    // Aqui estamos fazendo override do método emitirSom()
    public function emitirSom() {
        return "Au Au!";
    }
}

class Gato extends Animal {
    // Outro override do mesmo método
    public function emitirSom() {
        return "Miau!";
    }
}

// Testando
$dog = new Cachorro();
$cat = new Gato();

echo $dog->emitirSom(); // Au Au!
echo "<br>";
echo $cat->emitirSom(); // Miau!
?>

<!-- 
Observe neste exemplo que:

A classe Animal define o método emitirSom().

As classes Cachorro e Gato herdam de Animal.

Ambas fazem override de emitirSom(), ou seja, redefinem seu funcionamento.

Quando chamamos $dog->emitirSom(), a saída não é mais “Som genérico de animal”, e sim “Au Au!”. Da mesma forma, $cat->emitirSom() retorna “Miau!”.

Assinatura do Método
O método deve ter a mesma "assinatura". Na sobrescrita, o nome do método precisa ser idêntico. Se na classe Animal o método é emitirSom(), na classe Cachorro não pode ser latir(), senão você perde o benefício do polimorfismo, pois não conseguiria tratar todos os animais de forma genérica.

Exemplo de "Uso Genérico" (O real poder)
O polimorfismo brilha de verdade quando temos uma lista (array) de objetos diferentes e os tratamos como se fossem um só. Isso evita os foreach cheios de verificações.

Sugestão de código complementar:
// Imagine um array com animais diferentes
$animais = [new Cachorro(), new Gato(), new Animal()];

foreach ($animais as $animal) {
    // Não importa qual animal é, todos "sabem" emitir som
    echo $animal->emitirSom() . "<br>";
}
Este exemplo mostra que o código que consome os objetos não precisa mudar se você adicionar um new Leao() ao array futuramente.

2.7.5 Benefícios do Polimorfismo
Vejamos alguns benefícios do polimorfismo:

> Flexibilidade: permite trabalhar com grupos de objetos diferentes sem precisar escrever código repetido para cada um.
> Extensibilidade: torna mais fácil adicionar novas classes (como Funcionario, Diretor, etc.), apenas sobrescrevendo métodos quando necessário.
> Organização: ajuda a estruturar sistemas complexos, mantendo uma interface comum e adaptando apenas os detalhes que mudam.

Segundo Zandstra (2014), o polimorfismo é um dos recursos mais importantes da POO porque permite criar sistemas que podem evoluir e crescer sem a necessidade de grandes reescritas de código.


-->