<!-- 
2.3 Propriedades e Métodos
Na Programação Orientada a Objetos (POO), cada classe é composta por dois elementos fundamentais: propriedades (também chamadas de atributos) e métodos. Esses elementos representam, respectivamente, as características e os comportamentos de um objeto (ZANDSTRA, 2014).

De acordo com Holzner (2006), as propriedades permitem armazenar dados específicos de cada instância da classe, enquanto os métodos são responsáveis por manipular esses dados ou executar operações relacionadas. Assim, as classes em PHP funcionam como unidades organizadas que reúnem dados e ações em um mesmo contexto.

2.3.1 O que são propriedades (atributos)
As propriedades são variáveis definidas dentro de uma classe, responsáveis por descrever o estado de cada objeto. Cada instância de uma classe terá seus próprios valores para essas variáveis.

Veja abaixo um exemplo: 
-->
<?php
class Pessoa {
    public $nome;     // Propriedade: nome da pessoa
    public $idade;    // Propriedade: idade da pessoa
}

// Ao criar objetos a partir dessa classe, cada um poderá conter informações próprias:

$p1 = new Pessoa();
$p1->nome = "João";
$p1->idade = 25;

$p2 = new Pessoa();
$p2->nome = "Maria";
$p2->idade = 30;

echo $p1->nome; // João
echo $p2->nome; // Maria

// Essa capacidade de personalização é o que torna os objetos poderosos na modelagem do mundo real (ULLMAN, 2018).
?>

<!-- 
2.3.2 O que são métodos
Os métodos são funções definidas dentro de uma classe. Eles expressam ações que um objeto pode realizar e geralmente utilizam as propriedades para produzir resultados (POWERS, 2017).

Veja abaixo um exemplo:
-->
<?php
class Carro {
    public $modelo;
    public $cor;
    public $velocidade = 0; // O carro começa parado

    public function acelerar($km) {
        $this->velocidade += $km;
        echo "O {$this->modelo} acelerou. Velocidade atual: {$this->velocidade} km/h.<br>";
    }

    public function frear() {
        $this->velocidade = 0;
        echo "O carro parou.<br>";
    }
}

$meuCarro = new Carro();
$meuCarro->modelo = "Argo";
$meuCarro->acelerar(20); // Saída: O Argo acelerou. Velocidade atual: 20 km/h.
$meuCarro->acelerar(30); // Saída: O Argo acelerou. Velocidade atual: 50 km/h.
$meuCarro->frear();      // Saída: O carro parou.
?>

<!-- 
Aqui vemos que o método "lembra" o valor anterior da propriedade. Se eu acelero 20 e depois 30, a propriedade $velocidade agora vale 50. Isso é a essência da POO: manter o estado do objeto.

Segundo o PHP Manual (2025), métodos permitem que objetos deixem de ser apenas coleções de dados e passem a ter comportamento, tornando-se mais dinâmicos e funcionais.

2.3.3 A relação entre propriedades e métodos
Observe que:

As propriedades guardam o estado de cada objeto.
Os métodos usam esse estado para realizar ações ou modificá-lo.

Juntos, tornam os objetos entidades completas, que possuem informações próprias e sabem como agir. Essa combinação é essencial para modelar situações do mundo real em sistemas de software (HOLZNER, 2006).

Veja um outro exemplo abaixo:
-->
<?php
class OutroExemploPessoa {
    public $nome;
    public $idade;

    // Método que incrementa a idade
    public function aniversario() {
        $this->idade++;
    }

    // Método que retorna um resumo
    public function resumo() {
        return "{$this->nome}, {$this->idade} anos. {$this->verificarMaioridade()}";
    }

    public function verificarMaioridade() {
    if ($this->idade >= 18) {
        return "{$this->nome} é maior de idade.";
    } else {
        return "{$this->nome} é menor de idade.";
    }
}
}

$p = new OutroExemploPessoa();
$p->nome = "Carlos";
$p->idade = 29;
$p->aniversario(); // idade passa a ser 30
$p->verificarMaioridade();
echo $p->resumo(); // Saída: Carlos, 30 anos. Carlos é maior de idade.
?>

<!-- 
Neste exemplo, o método aniversario() altera uma propriedade do objeto, enquanto o método resumo() retorna uma informação formatada. Assim, a classe combina dados e comportamentos de forma organizada.

As propriedades podem ser usadas para tomar decisões dentro dos métodos (lógica de controle).
As propriedades não servem apenas para "exibir", mas para definir o comportamento do sistema.
-->
