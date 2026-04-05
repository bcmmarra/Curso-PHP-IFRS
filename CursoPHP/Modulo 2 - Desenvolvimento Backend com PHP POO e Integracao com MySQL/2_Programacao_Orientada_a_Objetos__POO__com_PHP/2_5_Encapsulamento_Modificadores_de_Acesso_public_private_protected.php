<!-- 
2.5 Encapsulamento: Modificadores de Acesso (public, private, protected)
Um dos conceitos mais importantes da Programação Orientada a Objetos é o encapsulamento. Ele consiste em proteger os dados de um objeto, definindo como e de onde eles podem ser acessados ou modificados. Isso evita que informações internas sejam manipuladas de maneira incorreta ou insegura.

Segundo Zandstra (2014), encapsular significa “colocar uma caixa em volta do objeto”, controlando as formas de interação com suas propriedades e métodos. Assim, o desenvolvedor garante que apenas partes autorizadas do programa tenham acesso direto aos dados mais sensíveis.

Imagine um Caixa Eletrônico. Você não abre a máquina e mexe diretamente nas notas (isso seria public). Você interage com a máquina através de botões e da tela (os métodos public). A máquina valida sua senha e seu saldo antes de entregar o dinheiro. Isso é o encapsulamento: proteger o "recheio" (dados) e oferecer uma interface segura (métodos).

2.5.1 O que são modificadores de acesso
No PHP, o encapsulamento é implementado por meio dos modificadores de acesso, que definem a visibilidade de propriedades e métodos. Existem três tipos principais (ULLMAN, 2018):

> public: pode ser acessado de qualquer lugar do código.
> private: só pode ser acessado dentro da própria classe.
> protected: pode ser acessado na classe onde foi definido e em classes que herdam dela.

Antes de aplicar modificadores de acesso, vamos imaginar uma classe Pessoa sem encapsulamento: 
-->
<?php
class Pessoa {
    public $nome;
    public $idade;
}
$p = new Pessoa();
$p->nome = "Ana";       // acesso direto
$p->idade = -5;         // valor inválido
echo $p->nome;          // Ana
echo $p->idade;         // -5 (incoerente!)
?>
<!-- 
Aqui vemos um problema: como as propriedades são públicas, qualquer parte do programa pode atribuir valores inválidos (por exemplo, idade negativa). Isso quebra a consistência do objeto.

2.5.2 Uso de getters e setters
Agora vamos corrigir o problema do exemplo anterior usando encapsulamento. Declaramos as propriedades como private e criamos métodos para acessá-las de forma controlada:
-->
<?php
class OutraPessoa {
    private $nome;
    private $idade;

    // Setter para definir o nome
    public function setNome($novoNome) {
        if (!empty($novoNome)) {
            $this->nome = $novoNome;
        } else {
            echo "Nome inválido!";
        }
    }

    // Getter para ler o nome
    public function getNome() {
        return $this->nome;
    }

    // Setter para definir a idade
    public function setIdade($novaIdade) {
        if ($novaIdade > 0 && $novaIdade < 120) {
            $this->idade = $novaIdade;
        } else {
            echo "Idade inválida!";
        }
    }

    // Getter para ler a idade
    public function getIdade() {
        return $this->idade;
    }
}

// Uso prático
$p = new OutraPessoa();
$p->setNome("Carlos");
$p->setIdade(25);

echo $p->getNome();  // Carlos
echo $p->getIdade(); // 25
?>

<!-- 
Observe neste exemplo que:

As propriedades $nome e $idade foram definidas como private, protegendo os dados de alterações externas.

O método setNome() define o valor do nome, mas somente se o texto não for vazio.
O método getNome() devolve o valor atual do nome.
O método setIdade() aceita apenas idades dentro de uma faixa lógica (1 a 119).
O método getIdade() permite a leitura segura da idade.

Assim, mesmo que alguém tente inserir uma idade inválida, o setter impede que isso aconteça. Como explica Zandstra (2014), esse controle centralizado garante que o objeto nunca entre em um estado incoerente.

Modificador protected
O modificador protected é o meio-termo. Ele bloqueia o acesso externo (como o private), mas permite que os "filhos" daquela classe acessem o dado. Veremos isso em detalhes na aula de Herança.

Além das propriedades o existem Métodos Privados para auxiliar a lógica interna da classe sem expô-la ao mundo

Exemplo:
class Validador {
    public function cadastrarSenha($senha) {
        if ($this->validarForca($senha)) { // Método interno
            // cadastrar...
        }
    }

    private function validarForca($s) {
        return strlen($s) > 8; // Regra interna que ninguém de fora precisa ver
    }
}
-->