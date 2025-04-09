<?php
//2  - Verificar se Cookie Existe
if (isset($_COOKIE['cookieKaique'])) {

}

    //3 - Deletar Cookie, setar um valor negativo(entende que cookie já expirou e ele é deletado)
    setcookie("cookieKaique", "kaique", time() - 1, "/");

    //4 - Criar Cookie com valor de tempo especifico, setar expires_or_option com valor a mais
    setcookie("cookieKaique",  "kaique",time() + 1000, "/");

    //5 - Criar cookie que feche com o navegador, definir o tempo de expiração como 0 ou omitir seu valor
    setcookie("cookieKaique2", "kaique2", expires_or_options: 0, path: "/");

    //6 - Definir o caminho e o domínio de um cookie, passar valor em path e em domain
    setcookie("cookieKaique3", "kaique3", 0, "/atividade/", "localhost");

    //7 -  Acessar váriavel de cookie atraves da variável global $_COOKIE
    echo 'Cookie: '. $_COOKIE["cookieKaique"];        

    //8 - Alterar valor de cookie, criar novamente com um novo valor
    setcookie( "cookieKaique", "junior", time() + 1000,  "/");

    // 10 -  Verificar se existe o cookie, através da variável $_COOKIE, usando isset
    if (isset($_COOKIE['meu_cookie'])) {
        echo "O cookie ainda está ativo: " . $_COOKIE['meu_cookie'];
    } else {
        echo "O cookie expirou ou não existe.";
    }   

    // 11 - Salvar JSON em cookie, usando json_encode
    $dados = [
        'nome' => 'João',
        'idade' => 30,
        'logado' => true
    ];
    
    $cookie_json = json_encode($dados);
    setcookie('usuario', $cookie_json, time() + 3600); 

    // 12 - recolher esses dados usando json_decode
    if (isset($_COOKIE['usuario'])) {
        $usuario = json_decode($_COOKIE['usuario'], true);
        echo "Nome: " . $usuario['nome'] . "<br>";
        echo "Idade: " . $usuario['idade'] . "<br>";
        echo "Logado? " . ($usuario['logado'] ? 'Sim' : 'Não');
    } else {
        echo "Cookie 'usuario' não encontrado.";
    }
        

?>