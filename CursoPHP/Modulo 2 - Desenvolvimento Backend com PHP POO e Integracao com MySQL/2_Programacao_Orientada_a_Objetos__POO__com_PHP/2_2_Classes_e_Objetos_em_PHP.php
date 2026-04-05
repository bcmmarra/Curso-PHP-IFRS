<!-- 
2.2 Classes e Objetos em PHP
A classe é a estrutura fundamental da Programação Orientada a Objetos. Ela funciona como um molde ou modelo que descreve quais informações (propriedades ou atributos) e quais comportamentos (métodos) um objeto terá. Já o objeto é a concretização desse molde, ou seja, a criação de uma entidade real com base na definição feita pela classe.

Podemos comparar a classe a uma receita culinária: ela explica quais ingredientes usar e qual o modo de preparo, mas a receita sozinha não é comida. Para obter o prato, é preciso seguir a receita e produzir algo real. De forma semelhante, a classe sozinha não executa nada; apenas quando instanciamos um objeto é que passamos a ter algo concreto que pode armazenar dados e executar ações.

2.2.1 Definindo uma Classe
Em PHP, criamos uma classe utilizando a palavra-chave class, seguida pelo nome da classe. Dentro dela, declaramos as propriedades e os métodos que representarão as características e os comportamentos do objeto.

Veja abaixo um exemplo: 
-->
<?php
// Definindo a classe Pessoa
class Pessoa
{
    public $nome;   // Propriedade (atributo)
    public $idade;  // Propriedade (atributo)

    // Método (comportamento)
    public function apresentar()
    {
        echo "Olá! Meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

// Neste trecho, criamos a classe Pessoa, que possui duas propriedades ($nome e $idade) e um método (apresentar()). A palavra-chave public indica que essas propriedades e métodos podem ser acessados de fora da classe.

// As propriedades podem ter valores padrão: configurações pré-definidas

// Exemplo:

class Carro
{
    public $modelo = "Sem Definição"; // Valor padrão
    public $ano_Fabricacao = 0; // Valor padrão
    // ... restando do código
}

// 2.2.2 Criando Objetos
// Para usar uma classe, precisamos criar um objeto. Em PHP, fazemos isso utilizando a palavra-chave new. Cada objeto pode armazenar valores diferentes para as mesmas propriedades, mas todos compartilham a estrutura definida pela classe.

// Criando o primeiro objeto da classe Pessoa
$p1 = new Pessoa();
$p1->nome = "João";
$p1->idade = 25;

// Criando o segundo objeto da classe Pessoa
$p2 = new Pessoa();
$p2->nome = "Maria";
$p2->idade = 30;

// Chamando os métodos de cada objeto
$p1->apresentar(); // Saída: Olá! Meu nome é João e tenho 25 anos.
echo "<br><br>";
$p2->apresentar(); // Saída: Olá! Meu nome é Maria e tenho 30 anos.
?>
<!-- 
Observe que tanto $p1 quanto $p2 são objetos da classe Pessoa. Cada um possui seus próprios valores para as propriedades nome e idade, mas ambos utilizam o mesmo método apresentar().

Objeto (Instância)  |Propriedade $nome  |Propriedade $idade |Método apresentar() |
--------------------|-------------------|-------------------|--------------------|
$p1                 |"João"             |25                 |Usa os dados de $p1 |
$p2                 |"Maria"            |30                 |Usa os dados de $p2 |

No PHP, o erro mais comum é tentar acessar propriedades usando o cifrão dentro do objeto (ex: $p1->$nome).

Atenção à Sintaxe: Note que ao acessar uma propriedade fora da classe, usamos $p1->nome (sem o cifrão no nome da propriedade). O cifrão é usado apenas na variável que representa o objeto ($p1).

2.2.3 Benefícios práticos para o desenvolvedor
Trabalhar com classes e objetos em PHP traz vantagens como:

Organização: o código fica mais claro e dividido em partes lógicas.
Reutilização: a mesma classe pode ser usada em diferentes partes do sistema.
Manutenção: mudanças na definição da classe afetam todos os objetos de forma consistente.
Escalabilidade: facilita a criação de projetos maiores, permitindo dividir responsabilidades em várias classes.
-->