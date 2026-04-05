<!-- 
2.8 Palavra-chave static
2.8.1 Introdução
Na Programação Orientada a Objetos em PHP, a palavra-chave static é utilizada para definir propriedades e métodos que pertencem à classe em si, e não a um objeto específico. Isso significa que podemos acessar essas propriedades e métodos sem precisar criar uma instância da classe.

De acordo com Ullman (2018), os membros estáticos são úteis em situações em que um comportamento ou informação não depende de um objeto individual, mas sim da classe como um todo. Um exemplo clássico é o uso de contadores ou configurações globais.

2.8.2 Como funciona o static
O PHP permite que tanto propriedades quanto métodos sejam declarados como estáticos. Isso significa que eles podem ser acessados diretamente pela classe, sem a necessidade de criar objetos. Esse comportamento é bastante útil quando precisamos de valores ou ações que devem ser compartilhados entre todas as instâncias da classe.

Neste contexto:

1. Propriedades estáticas
1.1. São valores compartilhados entre todas as instâncias da classe.
1.2. São declaradas com a palavra-chave static.
1.3. Só podem ser acessadas usando Operador de Resolução de Escopo (::) self::$propriedade dentro da classe, ou NomeDaClasse::$propriedade fora dela.

O -> é a porta para entrar no mundo dos Objetos, enquanto o :: é a porta para entrar o mundo das Classes.

A restrição do $this (Importante!)
Um erro clássico é tentar usar o $this dentro de um método estático.
Atenção: Como métodos estáticos pertencem à classe e não a um objeto, a variável $this não existe dentro deles. Se você tentar usar $this->nome dentro de um static function, o PHP retornará um erro fatal.

2. Métodos estáticos
2.1. São funções ligadas à classe, e não ao objeto.
2.2. São chamados diretamente usando NomeDaClasse::nomeDoMetodo().
2.3. Dentro da própria classe, podem ser chamados com self::nomeDoMetodo().

2.8.3 Exemplo prático em PHP
Um bom exemplo é o caso de um contador: em vez de cada objeto armazenar seu próprio número, podemos criar uma propriedade estática que será compartilhada por todos. Assim, sempre que alguém aumentar o contador, esse valor ficará disponível para qualquer outra parte do programa que precise acessá-lo.

No próximo exemplo, vamos construir uma classe simples chamada Contador, que utiliza propriedades e métodos estáticos para ilustrar como esse recurso funciona na prática. 
-->
<?php
class Contador {
    // Propriedade estática
    public static $total = 0;

    // Método estático
    public static function incrementar() {
        self::$total++;
    }

    public static function mostrarTotal() {
        return "O total é: " . self::$total;
    }
}

// Não precisamos criar objetos
Contador::incrementar();
Contador::incrementar();

echo Contador::mostrarTotal(); // O total é: 2

// Podemos acessar diretamente a propriedade estática
echo "<br>";
echo "Valor atual de Contador: " . Contador::$total; // 2
?>

<!-- 
Vejamos a explicação deste exemplo:

> A classe Contador possui uma propriedade estática chamada $total, que começa em 0.
> O método estático incrementar() aumenta esse valor em 1.
> Chamamos os métodos diretamente pela classe (Contador::incrementar()), sem instanciar objetos.
> Como a propriedade é compartilhada, cada chamada afeta o mesmo valor $total.

Isso mostra que membros estáticos funcionam como recursos globais da classe, e não pertencem a objetos individuais.

2.8.4 Quando usar static?

Considere o uso de static:
> Para valores ou contadores globais, que precisam ser acessados sem instanciar objetos.
> Para funções auxiliares que não dependem do estado de um objeto (como funções matemáticas, conversões, utilitários).
> Em situações onde se deseja ter apenas uma única cópia de um valor, independente de quantos objetos sejam criados.

Segundo o Manual Oficial do PHP (PHP MANUAL, 2025), o uso de static deve ser feito com cautela: embora seja útil, seu uso excessivo pode ir contra os princípios da orientação a objetos, pois se aproxima da ideia de variáveis globais.

Exemplo de Classe Utilitária
Para reforçar o uso de static em "funções auxiliares", um exemplo de conversão de moeda ou formatação de data costuma ser muito eficaz.

Sugestão de exemplo complementar:

-->
<?php
class Conversor {
    public static $cotacaoDolar = 5.00;

    public static function paraReal($valorDolar) {
        return $valorDolar * self::$cotacaoDolar;
    }
}

echo "U$ 10,00 valem R$ " . Conversor::paraReal(10);
?>