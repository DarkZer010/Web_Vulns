<?php

if (!isset($_GET["id"])) {
    header("Location: ?id=1");
    exit;
}

if (isset($_GET['file'])) {
    $files = $_GET["file"];
    include($files);
} else {
    echo "nenhum arquivo!";
}

$id = $_GET['id'] ?? 1;
switch ($id) {
    case 1:
        $dados1 = "seus dados pessoais id 1: dev";
        break;
        
    case 2:
        $dados1 = "dados pessoais de outra pessoa id 2: hacker";
        break;
        
    case 3:
        $dados1 = "dados pessoais do adm id 3: profissional hacker";
        break;
        
    default:
        $dados1 = "dados pessoais inexistente";
        break;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CarameloVuln</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #2c3e50;
            }
            .container {
                width: 80%;
                margin: 40px auto;
                padding: 20px;
                background-color: #ecf0f1;
                border: 1px solid #bdc3c7;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                color: #3498db;
                text-align: center;
            }
            p {
                text-align: center;
                color: #666;
            }
            form {
                margin-top: 20px;
            }
            .form-group {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }
            .form-group label {
                margin-right: 10px;
            }
            textarea {
                width: 66%;
                height: 18px;
                padding: 10px;
                font-size: 14px;
                border: 1px solid #ccc;
            }
            input[type="button"] {
                width: 20%;
                height: 30px;
                background-color: #13a7f5dd;
                color: #fff;
                padding: 5px;
                font-size: 14px;
                border: none;
                cursor: pointer;
                margin-left: 10px;
            }
            input[type="button"]:hover {
                background-color: #909090dd;
            }
            #resultado {
                margin-top: 20px;
                padding: 10px;
                border: 1px solid #ccc;
                background-color: white;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Digite uma mensagem</h1>
            <form id="meuForm">
                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem"></textarea>
                    <input type="button" value="Enviar" onclick="enviarFormulario()">
                </div>
            </form>
            <div id="resultado"></div>
            <h1 style="margin-top: 40px;">Seus dados</h1>
            <p><?php echo $dados1; ?></p>
        </div>
        <script>
            function enviarFormulario() {
                var mensagem = document.getElementById("mensagem").value;
                var resultado = document.getElementById("resultado");
                resultado.innerHTML = mensagem;
                var scripts = resultado.getElementsByTagName('script');
                for (var i = 0; i < scripts.length; i++) {
                    eval(scripts[i].innerHTML);
                }
            }
        </script>
    </body>
</html>
