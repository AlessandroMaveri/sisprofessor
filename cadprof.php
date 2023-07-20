<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>

  <div class="fundo">
    <div class="planodefundo">
      <form method="GET" action="crudprofessor.php" class="form-cadastro">

        <div class="preenchimento-dados">
          <label for="nomeprofessor">Nome:
          <input type="text" name="nomeprofessor" id="um"></label>
        
        <label for="idade">Idade:
        <input type="number" name="idade" id="um"></label>
     </div>
      <div class="preenchimento-dados">
        <label for="cpf">CPF:
        <input type="text" name="cpf" id="um"></label>

        <label for="endereco">Endereço:
        <input type="text" name="endereco" id="um"></label>
      </div>
      <div class="radio">

        <label for="datanascimento">datanascimento:
        <input type="date" name="datanascimento" id="um"></label>

        <label for="ativo">estatus:
          <input type="radio" name="estatus"  value="ativo" id="ativo">Ativo</label>
          <label for="naoativo">
          <input type="radio" name="estatus"  value="naoativo" id="naoativo">Não Ativo</label>

      </div>
<div class="sbutton">
        <input type="submit" name="cadastrar" value="Cadastrar" id="cadastrar">
        <button class="button"><a href="index.php">Voltar</a></button>
     </div> 
    </form>


    </div>
  </div>
</body>

</html>

</html>