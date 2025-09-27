<?php

if (isset($_GET['file'])) {
    include($_GET['file']);
} else {
    echo "nenhum arquivo!";
}

$id = $_GET['id'] ?? 1;

switch ($id) {
  case 1:
        $dados1 = "dados pessoais id 1: dev";
        break;
    case 2:
        $dados1 = "dados pessoais id 2: hacker";
        break;
    case 3:
      $dados1 = "dados pessoais id 3: profissional hacker";
      break;
    default:
        $dados1 = "dados pessoais inexistente";
        break;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>site com vulnerabilidades</title>
    <style>
        textarea {
            width: 300px;
            height: 23px;
        }
    </style>
</head>
<body>
    <h1>XSS</h1>
    <form id="meuForm">
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem"></textarea><br><br>
        <input type="button" value="Enviar" onclick="enviarFormulario()">
    </form>
    <div id="resultado"></div>
    
    <h1>IDOR</h1>
    <p><? echo $dados1 ?></p>
    <p>2 dados pessoais bloqueados</p>
    
    <h1>LFI/RFI</h1>
    <p>coloque o parametro (?file=)</p>
    
    <script>
        function enviarFormulario() {
            var mensagem = document.getElementById("mensagem").value;
            var resultado = document.getElementById("resultado");
            resultado.innerHTML = mensagem;
            var scripts = resultado.getElementsByTagName("script");
            for (var i = 0; i < scripts.length; i++) {
                eval(scripts[i].innerHTML);
            }
        }
    </script>
</body>
</html>
