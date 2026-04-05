<!-- 
2.4 Construtores e Destrutores
Quando criamos uma classe em PHP, muitas vezes precisamos inicializar o objeto com valores padrão ou realizar tarefas assim que ele é criado. Da mesma forma, pode ser necessário executar uma ação especial quando o objeto deixa de ser usado. Para essas situações, a linguagem PHP oferece dois métodos especiais: o construtor e o destrutor (ZANDSTRA, 2014).

2.4.1 O que é um construtor?
O construtor é um método especial chamado automaticamente no momento em que o objeto é criado. Sua principal função é inicializar as propriedades da classe, garantindo que o objeto comece a existir já com dados prontos para uso (ULLMAN, 2018).

No PHP, o construtor é definido pelo método __construct().

Vejamos abaixo um exemplo de uso: 
-->
<?php
class ExemploPessoa
{
    public $nome;
    public $idade;

    // Construtor da classe
 // public function __construct($nome, $idade = 18) 
 // {
    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar()
    {
        echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

// Criando um objeto já com valores
// Se não passarmos a idade, ela será 18 por padrão
//$p2 = new ExemploPessoa("Bruno");
$p = new ExemploPessoa("Ana", 22);
$p->apresentar();
?>

<!-- 
Nesse exemplo, ao criarmos um novo objeto Pessoa, o construtor é automaticamente chamado com os parâmetros "Ana" e 22. Isso torna o processo de criação de objetos mais direto e menos sujeito a erros, pois não precisamos configurar manualmente cada propriedade após a instância (PHP MANUAL, 2025).

Parâmetros Opcionais no Construtor
É muito comum que nem todos os dados sejam obrigatórios no momento da criação.
// Se não passarmos a idade, ela será 18 por padrão
$p2 = new ExemploPessoa("Bruno");

PHP 8: Promoção de Propriedades (Dica de Modernização)
O PHP 8 simplificou drasticamente o construtor. Isso reduz o código repetitivo ("boilerplate").

Como era:
Declara a propriedade -> Passa no parâmetro -> Atribui com $this.
public function __construct($nome, $idade = 18) {
    $this->nome = $nome;
    $this->idade = $idade;
}
Como pode ser agora:
public function __construct(
    public string $nome,
    public int $idade
) {} 
// As propriedades são criadas e atribuídas automaticamente!
Isso economiza linhas e é o padrão usado em frameworks modernos como Laravel.

2.4.2 O que é um destrutor?
O destrutor, por sua vez, é chamado automaticamente quando o objeto deixa de existir ou quando o script termina sua execução. Seu uso mais comum é a liberação de recursos, como fechar conexões com banco de dados, apagar arquivos temporários ou registrar logs de encerramento (POWERS, 2017).

No PHP, o destrutor é representado pelo método __destruct().

Vejamos um exemplo de uso:
-->
<?php
class Conexao
{
    private $conexao;

    public function __construct()
    {
        // Simulação de conexão
        $this->conexao = "Conexão estabelecida";
        echo "Conexão aberta.<br>";
    }

    public function __destruct()
    {
        // Encerrando a conexão
        echo "Conexão fechada.";
    }
}

$c = new Conexao();
// Quando o script termina, o destrutor é chamado automaticamente
?>

<!-- 
Quando o objeto $c deixa de existir, o destrutor é chamado e a mensagem "Conexão fechada." é exibida, simulando o fechamento da conexão.

Conexão com o Destrutor e unset()
Aqui é o lugar perfeito para aplicá-la na prática. O destrutor é chamado não só quando o script acaba, mas quando a variável é destruída manualmente.
Complemento prático para o exemplo da Conexão:
$c = new Conexao(); // Saída: Conexão aberta.

// Forçando o fechamento antes do fim do script
unset($c); // Saída imediata: Conexão fechada.

echo "O script ainda continua rodando aqui...";

2.4.3 Importância de construtores e destrutores
Observe que:

O construtor garante que o objeto seja criado em um estado válido desde o início.
O destrutor permite realizar uma limpeza organizada antes de o objeto ser removido da memória.

Segundo Holzner (2006), esses métodos especiais são fundamentais para estruturar aplicações mais robustas e confiáveis, especialmente quando lidamos com recursos externos como arquivos, conexões ou serviços.
-->