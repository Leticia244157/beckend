<?php

require_once ("login.php");
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Via Uni</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Via Uni
      </a>
      <ul class="navbar-nav">
      <li class="nav-item">
        <button onclick="location.href='logoff.php'" class="botao-sair" type="button"> SAIR </button>
      </li>
    </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Faça seu orçamento conosco
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form action="registra_chamado.php" method="POST">
                    <div class="form-group">
                      <label>Email</label>
                      <input name="email" type="text" class="form-control">
                    </div>

                    <form action="registra_chamado.php" method="POST">
                    <div class="form-group">
                      <label>Nome</label>
                      <input name="nome" type="text" class="form-control">
                    </div>

                    <form action="registra_chamado.php" method="POST">
                    <div class="form-group">
                      <label>Telefone</label>
                      <input name="Telefone" type="namber" class="form-control" >
                    </div>

                    <form action="registra_chamado.php" method="POST">
                    <div class="form-group">
                      <label>Data</label>
                      <input name="Data" type="date" class="form-control" >
                    </div>

                    <form action="registra_chamado.php" method="POST">
                    <div class="form-group">
                      <input name="Hora" type="hour" class="form-control" placeholder="Hora">
                    </div>

                    <form action="registra_chamado.php" method="POST">
                    <div class="form-group">
                      <label>Numero de covidados</label>
                      <input name="Numero de covidados" type="namber" class="form-control" >
                    </div>
                    
                    <div class="form-group">
                      <label>Tipo de evento</label>
                      <select name="Tipo de evento" class="form-control">
                        <option>Festa infantil</option>
                        <option>Aniversario</option>
                        <option>Evento empresarial</option>
                        <option>Inalguração</option>
                        <option>Outros</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                      <a class="btn btn-lg btn-warning btn-block" href="painel.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>