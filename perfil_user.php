<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Formulario de perfil</title>
</head>
<body>
    <form action="perfil_user.html" method="POST">

    <div class="row mb-3">
        <p>Qual é a sua faixa etária?</p>
        <label for="18-25">
          <input type="radio" id="opcao1" name="jovem" value="opcao1"> 18-25 anos
        </label><br>
        <label for="26-33">
          <input type="radio" id="opcao2" name="jovem_adulto" value="opcao2"> 26-33
        </label><br>
        <label for="34-39 anos">
          <input type="radio" id="opcao3" name="experiente" value="opcao3"> 34-39 
        </label><br>
</div>

      <div class="row mb-3">
        <p>Qual é a sua renda mensal?</p>
        <label for="estagiario">
          <input type="radio" id="opcao1" name="escolha" value="opcao1"> Menos de R$ 1.320,00
        </label><br>
        <label for="renda_media">
          <input type="radio" id="opcao2" name="escolha" value="opcao2"> R$ 1.321,00 - R$ 2.737,00
        </label><br>
        <label for="acima_da_media">
          <input type="radio" id="opcao3" name="escolha" value="opcao3"> Mais de R$ 2.500,00
        </label><br>
      </div>

      <div class="row mb-3">
        <p>Você tem alguma dívida?</p>
        <label for="moderado">
          <input type="radio" id="opcao1" name="escolha" value="opcao1"> Sim, divida de financeiro (carro ou imóvel)
        </label><br>
        <label for="endividado">
          <input type="radio" id="opcao2" name="escolha" value="opcao2"> Sim, dividas de cheque especial, cartão de crédito ou empréstimo
        </label><br>
        <label for="controlado">
          <input type="radio" id="opcao3" name="escolha" value="opcao3"> Não tenho dividas
        </label><br>
      </div>

      <div class="row mb-3">
        <p>Como você costuma gerenciar seu dinheiro?</p>
        <label for="descontrolado">
          <input type="radio" id="opcao1" name="escolha" value="opcao1"> Gasto todo meu dinheiro e não economizo nada
        </label><br>
        <label for="26-33">
          <input type="radio" id="opcao2" name="escolha" value="opcao2"> Economizo um pouco, mas não tenho um plano financeiro específico
        </label><br>
        <label for="34-39 anos">
          <input type="radio" id="opcao3" name="escolha" value="opcao3"> Tenho um plano financeiro bem estruturado que inclui economias, investimentos e metas financeiras específicas
        </label><br>
      </div>

      <div class="row mb-3">
        <p>Qual é a sua experiência em investimentos financeiros?</p>
        <label>
          <input type="radio" id="opcao1" name="escolha" value="opcao1"> Nenhuma experiência
        </label><br>
        <label>
          <input type="radio" id="opcao2" name="escolha" value="opcao2"> Alguma experiência, investimentos basicos ou moderados
        </label><br>
        <label>
          <input type="radio" id="opcao3" name="escolha" value="opcao3"> Experiência significativa, investimentos avançados
        </label><br>
      </div>

      <div class="row mb-3">
        <p>Como você se sente em relação ao risco financeiro?</p>
        <label for="conservador">
          <input type="radio" id="opcao1" name="escolha" value="opcao1"> Não gosto de correr riscos e evito investimentos arriscados
        </label><br>
        <label for="moderado">
          <input type="radio" id="opcao2" name="escolha" value="opcao2"> Não me importo de assumir riscos moderados em investimentos que têm um potencial de retorno significativo
        </label><br>
        <label for="arrojado">
          <input type="radio" id="opcao3" name="escolha" value="opcao3"> Sou muito confortável com riscos financeiros e investimentos agressivos
        </label><br>
</div>

      <div class="row mb-3">
        <p>Qual é o seu conhecimento sobre finanças pessoais?</p>
        <label for="inexperiente">
          <input type="radio" id="opcao1" name="escolha" value="opcao1"> Não tenho conhecimento sobre finanças pessoais
        </label><br>
        <label for="moderado">
          <input type="radio" id="opcao2" name="escolha" value="opcao2"> Tenho um conhecimento razoável sobre finanças pessoais
        </label><br>
        <label for="experiente">
          <input type="radio" id="opcao3" name="escolha" value="opcao3"> Tenho um conhecimento avançado sobre finanças pessoais e investimentos
        </label><br>
      </div>
        <input type="submit" value="Enviar">
      </form>
</body>