<!-- 📝 Desafio de Fixação (Mão na Massa!)
Para a próxima aula, quero que você altere seu arquivo index.php e crie um pequeno script que:

Crie duas variáveis: $receita e $despesa.
Crie uma variável $saldo que subtrai a despesa da receita.

Use um if para verificar:
Se o saldo for maior que 0, mostre: "Saldo Positivo: R$ [valor]".
Se for menor que 0, mostre: "Saldo Negativo: R$ [valor]".
Se for exatamente 0, mostre: "Cuidado, você está no limite!".

Dica: Use echo para exibir os resultados no navegador.

Assim que terminar esse código e ele rodar no seu localhost/myfinance, me envie ele aqui para eu corrigir e passarmos para a Aula de Integração com HTML! Fechado? -->

<?php
$receita = 4500.00;
$despesa = 500.00;
$saldo = $receita - $despesa;

if ($saldo > 0){
    echo "Saldo Positivo: R$ ".$saldo;
} elseif ($saldo == 0) {
    echo "Cuidado, você está no limite!";
} else {
    echo "Saldo Negativo: R$ ".$saldo;
}