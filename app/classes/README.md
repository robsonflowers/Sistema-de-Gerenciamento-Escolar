padrao-de-projetos-php
======================

Aqui você adiciona as classes que irá utilizar em seu projeto.

Já contém a classe WideImage que é uma ótima classe para tratamento de imagens.
Você pode ver mais sobre seu funcionamento no site: http://wideimage.sourceforge.net

A classe Utils é onde eu coloco as funções básicas dos projetos, funções que podem ser usadas a qualquer momento por qualquer página do site.
Já deixei uma função que eu uso bastante para criar URL Amigável.
Utilizo ela da seguinte forma:
$Utils->cleanWords('url aqui'); # Retornaria: url-aqui

Você pode adicinar quantas classes quiser, basta depois dar include e instanciar ela no default.php que está na pasta /app.