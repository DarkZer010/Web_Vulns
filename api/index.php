<?php

se (conjunto de é($_OBTER['arquivo'])) {
    incluir($_OBTER['arquivo']);
} outro {
    ecológico "nenhum arquivo!";
}

$id = $_OBTER['id'] ?? 1;

interruptor ($id) {
  caso 1:
        $dados1 = "dados pessoais id 1: dev";
        quebrar;
    caso 2:
        $dados1 = "dados pessoais id 2: hacker";
        quebrar;
    caso 3:
      $dados1 = "dados pessoais id 3: hacker profissional";
      quebrar;
    padrão:
        $dados1 = "dados pessoais inexistentes";
        quebrar;
}

?>

<!DOCTYPE html>
<HTML>
<caboça>
    <título>vulnerabilidades do site</título>
    <estilo>
 área de texto {
 largura: 300px;
 alta: 23px;
        }
    </estilo>
</caboça>
<corpo>
    <h1>XSS</h1>
    <forma id="meuFormulário">
        <rótulo parágrafo="mensagem">Mensagem:</rótulo>
        <área de texto id="mensagem" nome="mensagem"></textarea><br><br>
        <entrada tipo="botão" valentia="Enviar" clicar em="enviarFormulario()">
    </forma>
    <dividir id="resultado"></dividir>
    
    <h1>IDOR</h1>
    <p><? ecológico $dados1 ?></p>
    <p>2 dados pessoais bloqueados</p>
    
    <h1>LFI/RFI</h1>
    <p>coloque o parâmetro (?arquivo=)</p>
    
    <roteiro>
 função emviarFormulario() {
 var mensagem = documento.obterElementoPorId("mensagem").valor;
 var resultado = documento.obterElementoPorId("resultado");
 resultado.HTML interno = mensagem;
 var scripts = resultado.obterElementosPorNomeDaEtiqueta("script");
 para (var i = 0; i < scripts.comprimento; eu++) {
                avaliação(scripts[i].HTML interno);
            }
        }
    </roteiro>
</corpo>
</HTML>
