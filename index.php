<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
<div>
    <pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';

        $p[0] = new Pessoa("Pedro", 22, "M");
        $p[1] = new Pessoa("Maria", 31, "E");

        $l[0] = new Livro("PHP BÁSICO", "Jose da silva", 300, $p[0]);
        $l[1] = new Livro("POO com PHP", "Maria de souza", 500, $p[0]);
        $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);

        $l[0]->abrir();
        $l[0]->folhear(80);
        $l[0]->detalhes();
    ?>
    </pre>
</div>
</body>
</html>