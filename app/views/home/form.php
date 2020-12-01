

<form action="" method="post" id="contato"> 


<form-ac class="form-horizontal">

  <fieldset>

    <!-- Form Name -->
    <legend>Faça seu sistema conosco</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="txtEmail">Email</label>  
        <div class="col-md-5">
          <input id="txtEmail" name="txtEmail" type="email" placeholder="Insira o seu email aqui" class="form-control input-md" required="required" type="submit">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="nome">Nome</label>  
      <div class="col-md-5">
        <input id="nome" name="nome" type="text" placeholder="Insira o Nome aqui" class="form-control input-md" type=submit required> 
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtDescricao">Descreva aqui a sua demanda</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="txtDescricao" name="txtDescricao" placeholder="Digite a sua demanda nessse espaço" type=submit required></textarea>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="btnContato"></label>
      <div class="col-md-4">
        <button id="btnContato" name="btnContato" type=submit class="btn btn-primary">Enviar</button>

      </div>
    </div>
  </fieldset>
</form>




<!--
<form name="cadastro" action="http://localhost:8080/contact/adicionaAluno" method="POST">
  <div class="form-group row">
    <label class="col-4 col-form-label" for="nome">Nome</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nome" name="nome" placeholder="informe seu nome" type="text" class="form-control" aria-describedby="nomeHelpBlock" required="required">
      </div> 
      <span id="nomeHelpBlock" class="form-text text-muted">Informe seu nome completo</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="idade" class="col-4 col-form-label">Idade</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-bullseye"></i>
          </div>
        </div> 
        <input id="idade" name="idade" placeholder="informe sua idade" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Sexo</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="masc"> 
        <label for="radio_0" class="custom-control-label">Masculino</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="fem"> 
        <label for="radio_1" class="custom-control-label">Feminino</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
-->