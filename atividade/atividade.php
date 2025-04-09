<?php
// Verificar se o cookie 'cookieKaique3' está disponível
if (isset($_COOKIE['cookieKaique3'])) {
    echo "Cookie 'cookieKaique3' acessado! Valor: " . $_COOKIE['cookieKaique3'];
} else {
    echo "Cookie 'cookieKaique3' não disponível ou não pertence a este caminho.";
}
?>