<html>
<?

echo("olá Henrique o melhor professor do mundo !"); 

function fibonacci(int $numTermos): void
{
    // Valida se o número de termos é positivo
    if ($numTermos <= 0) {
        echo "O número de termos deve ser um valor positivo.";
        return;
    }

    $termo1 = 0;
    $termo2 = 1;

    // Se a sequência tiver apenas 1 termo, exibe 0
    if ($numTermos === 1) {
        echo $termo1;
        return;
    }

    echo "$termo1, $termo2";

    // Loop para gerar e exibir os termos restantes
    for ($i = 2; $i < $numTermos; $i++) {
        $proximoTermo = $termo1 + $termo2;
        echo ", $proximoTermo";

        // Atualiza os termos para a próxima iteração
        $termo1 = $termo2;
        $termo2 = $proximoTermo;
    }
}

?>
</html>
