<?php
ob_start();

setcookie("cookie1", "", time() - 3600, "/"); 

// 2 - Verificar se Cookie Existe
if (isset($_COOKIE['cookie1'])) {
    echo "Cookie 'cookie1' existe!<br>";
} else {
    echo "Cookie 'cookie1' não existe!<br>";
}

// 3 - Deletar Cookie, setar um valor negativo (entende que cookie já expirou e ele é deletado)
setcookie("cookie1", "", time() - 3600, "/");

// 4 - Criar Cookie com valor de tempo específico, setar expires com valor a mais
setcookie("cookieKaique", "kaique", time() + 1000, "/");

// 5 - Criar cookie que feche com o navegador, definir o tempo de expiração como 0 ou omitir seu valor
setcookie("cookieKaique2", "kaique2", 0, "/");

// 6 & 15 - Definir o caminho e o domínio de um cookie, passar valor em path e em domain.

setcookie("cookieKaique3", "kaique3", 0, "/atividade/", "localhost");

echo "<a href='/atividade/atividade.php'>Clique aqui para verificar o 6</a>";

// 7 - Acessar variável de cookie através da variável global $_COOKIE
if (isset($_COOKIE["cookieKaique"])) {
    echo 'Cookie (cookieKaique): ' . $_COOKIE["cookieKaique"] . "<br>";
} else {
    echo 'Cookie (cookieKaique) ainda não está disponível (provavelmente foi recriado e não recarregou a página).<br>';
}

// 8 - Alterar valor de cookie, criar novamente com um novo valor
setcookie("cookieKaique", "junior", time() + 1000, "/");

// 10 - Verificar se existe o cookie, através da variável $_COOKIE, usando isset
if (isset($_COOKIE['cookieKaique4'])) {
    echo "O cookie ainda cookieKaique4 está ativo: " . $_COOKIE['cookieKaique4'] . "<br>";
} else {
    echo "O cookie cookieKaique4 expirou ou não existe.<br>";
}

// 11 - Salvar JSON em cookie, usando json_encode
$dados = [
    'nome' => 'João',
    'idade' => 30,
];

$cookie_json = json_encode($dados);
setcookie('usuario', $cookie_json, time() + 3600, "/");

// 12 - Recolher esses dados usando json_decode
if (isset($_COOKIE['usuario'])) {
    $usuario = json_decode($_COOKIE['usuario'], true);
    echo "Nome: " . $usuario['nome'] . "<br>";
    echo "Idade: " . $usuario['idade'] . "<br>";
} else {
    echo "Cookie 'usuario' não encontrado.<br>";
}
// 13 - diferença secure e httponly
setcookie("meu_cookie", "valor", ["secure" => true]);

setcookie("meu_cookie", "valor", ["httponly" => true]);
?>
