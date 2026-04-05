<!-- 
2.9 Tipos de dados para métodos e propriedades
2.9.1 Introdução
O PHP é uma linguagem de tipagem dinâmica, ou seja, normalmente não exige que você declare o tipo dos dados ao criar variáveis, atributos ou métodos. No entanto, desde o PHP 7 e com avanços no PHP 8, foi introduzido o recurso de declaração de tipos (type declarations). Isso permite indicar de forma explícita quais tipos de dados uma propriedade pode armazenar ou que tipo de dado um método deve receber e retornar.

Segundo Ullman (2018), esse recurso ajuda a prevenir erros e torna o código mais legível e confiável, já que força a consistência no uso dos dados.

2.9.2 Tipagem em propriedades
As propriedades tipadas garantem que os atributos da classe só armazenem valores do tipo definido.

Considere o seguinte exemplo abaixo: 
-->
<?php
class Pessoa {
    public string $nome;
    public int $idade;
    public float $altura;
}

$p1 = new Pessoa();
$p1->nome = "Maria";  // OK
$p1->idade = 20;      // OK
$p1->altura = 1.65;   // OK

// $p1->idade = "vinte"; // ERRO: string não pode ser atribuída a int
?>

<!-- 
2.9.3 Tipagem em parâmetros de métodos
Ao definir métodos, também podemos especificar o tipo esperado para cada parâmetro.
-->
<?php
class Calculadora {
    public function somar(int $a, int $b): int {
        return $a + $b;
    }
}

$c = new Calculadora();
echo $c->somar(5, 3);      // OK
echo $c->somar("5", "3");  // O PHP converte automaticamente em int
//echo $c->somar("cinco", 3); // ERRO
?>

<!-- 
Aqui, o método somar() só aceita números inteiros (int).

2.9.4 Tipagem no retorno de métodos
Além dos parâmetros, também podemos indicar o tipo de dado que será retornado pelo método.
-->
<?php
class Saudacao {
    public function mensagem(string $nome): string {
        return "Olá, $nome!";
    }
}

$s = new Saudacao();
echo $s->mensagem("Carlos"); // Olá, Carlos!
?>

<!-- 
Nesse caso, o método mensagem() sempre retornará uma string.

2.9.5 Benefícios da tipagem
Vejamos abaixo alguns benefícios da tipagem:

> Mais segurança: evita que dados errados sejam usados em atributos ou funções.
> Código mais legível: ao olhar a assinatura do método, já sabemos o que esperar.
> Menos erros em projetos grandes: especialmente quando várias pessoas trabalham no mesmo sistema.

De acordo com Zandstra (2014), a tipagem ajuda a alinhar o código PHP com práticas de linguagens mais rígidas (como Java e C#), mas sem perder a flexibilidade do PHP.

O Modo Estrito (declare(strict_types=1);)
Por padrão, o PHP tenta converter os tipos (como mostrou no exemplo da Calculadora, onde "5" vira 5). Para que o erro aconteça de verdade e o PHP pare de "tentar ajudar", precisamos ativar o modo estrito.

Dica de Ouro: Adicione no topo do seu arquivo PHP o comando declare(strict_types=1);. Isso obriga o PHP a exigir exatamente o tipo declarado, sem conversões automáticas. É a prática recomendada para projetos profissionais.

Tipos de União (PHP 8+)
Às vezes uma propriedade pode aceitar mais de um tipo (ex: um ID que pode ser int ou string). No PHP 8, usamos o caractere |.

Exemplo de Complemento:
class Produto {
    public int|float $preco; 
}

int|float indica que aceita tanto inteiro quanto decimal

Visualização da Assinatura de um Método
    public function somar(int $a, int $b): int {

Parte do Código     |Significado                                    |
--------------------|-----------------------------------------------|
public              |Visibilidade (quem pode ver)                   |
function somar      |Nome da ação                                   |
(int $a, int $b)    |Entrada: O que o método exige para trabalhar   |
: int               |Saída: O que o método promete devolver         |
-->