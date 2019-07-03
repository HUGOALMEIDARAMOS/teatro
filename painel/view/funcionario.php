<?php

session_start();

//Requisições  do Controller que comanda as ações

require_once("../controller/CategoriaDao.php");
require_once("../controller/funcionarioDao.php");

$categoriaDao =  new CategoriaDao();
$funcionarioDao= new funcionarioDao();


//Requisições  do Model que faz a comunicação entre a view e controller
require_once("../model/CategoriaModel.php");
require_once("../model/FuncionarioModal.php");


$categoria = new CategoriaModel();
$funcionario = new FuncionarioModal();

?>




<!DOCTYPE html>
    <html lang="pt-br">
      <head>
        <meta charset="utf-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
          <title>TEATRO ARTHUR AZEVEDO</title>
          <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
          <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
          <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- CSS Files -->
          <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
          <link href="../assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
          <!-- CSS Just for demo purpose, don't include it in your project -->
          <link href="../assets/demo/demo.css" rel="stylesheet" />
      </head>
      <body>
           <div class="wrapper ">
              <div class="sidebar" data-color="orange">

                <div class="logo">

                  <a href="#" class="simple-text logo-normal">
                    Teatro Arthur Azevedo
                  </a>
                </div>
                <div class="sidebar-wrapper">
                  <ul class="nav">
                    <li>
                      <a href="venda.html">
                        <i class="now-ui-icons shopping_cart-simple"></i>
                        <p>Vendas</p>
                      </a>
                    </li>
                    <li>
                      <a href="preco.html">
                        <i class="now-ui-icons business_money-coins"></i>
                        <p>Preços</p>
                      </a>
                    </li>
                    <li>
                      <a href="lista.html">
                        <i class="now-ui-icons files_paper"></i>
                        <p>Lista Eventos</p>
                      </a>
                    </li>

                  </ul>
                 <div class="logo">
                  <h4 class="simple-text logo-normal">Área Administrativa</h4>
                  </div>

                <div class="">
                  <ul class="nav">
                    <li class="">
                      <a href="evento.php">
                        <i class="now-ui-icons ui-1_calendar-60"></i>
                        <p>Cadastro Evento</p>
                      </a>
                    </li>
                     <li  class="active">
                      <a href="funcionario.php">
                        <i class="now-ui-icons business_badge"></i>
                        <p>Cadastro Funcionário</p>
                      </a>
                    </li>
                    <li>
                      <a href="relatorio.html">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Relatórios de Vendas</p>
                      </a>
                    </li>
                  </ul>
                </div>

                </div>
              </div>

              <div class="main-panel">
                <!-- Inicio Navbar -->
                <div class="row">
                  <nav class="navbar navbar-expand-lg   navbar-absolute  bg-default fixed-top"> <!-- navbar-transparent -->
                  <div class="container-fluid">
                    <div class="navbar-wrapper">
                      <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                        </button>
                      </div>
                      <a class="navbar-brand" href="#pablo">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                      <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons users_single-02"></i>
                             <p>
                            <span class="d-lg-none d-md-block">Some Actions</span>
                          </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Hugo Almeida</a>
                          <a class="dropdown-item" href="#">carlos@gmail.com</a>
                          <a class="dropdown-item" href="#">Vendedor</a>
                        </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </div> <!-- Fim Navbar -->


     <!--
     ===========================================================================================================================
                                                     INICIO FORMULARIO
     ===========================================================================================================================
     -->

              <div class="content  mt-5">


          <div class="row"> <!-- LINHA-->



                  <div class="col-sm-12 col-lg-12 mt-5"><!--1º CARD-->
                           <div class="card">
                      <div class="card-header">
                        <h5 class="title">Cadastro de Funcionário</h5>
                      </div>

                               <div>
                                   <?php
                                   if(isset($_SESSION['msg_cat'])){
                                       echo $_SESSION['msg_cat'];
                                       unset($_SESSION['msg_cat']);
                                   }
                                   ?>
                               </div>

                      <div class="card-body">
                        <form class="formulario" method="post" enctype="multipart/form-data">
                          <!--LINHA DOS CAMPOS NOME E IDENTIFICACAO-->
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="identificacao">Identificação</label>
                                <input type="text" class="form-control" id="identificacao" name="identificacao" placeholder="Digite a identificação" required>
                              </div>
                            </div>
                          </div>
                              <!--LINHA DO ENDERECO-->
                           <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco"  placeholder="Digite seu endereço" required>
                              </div>
                            </div>
                          </div>

                            <!--LINHA DOS CAMPOS NOME E IDENTIFICACAO-->

                            <div class="row">

                              <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                   <label for="login">Login</label>
                                   <input type="text" class="form-control" id="login" name="login" placeholder="Digite seu login" required>
                                </div>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                 <div class="form-group">
                                   <label for="senha">Senha</label>
                                   <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
                                </div>
                              </div>

                                  <div class="col-md-2 col-sm-12">
                                     <div class="form-group">
                                       <label for="categoria">Categoria</label>
                                        <select class="form-control" id="categoria" name="categoria" required>
                                            <option></option>
                                            <?php
                                            foreach($categoriaDao->listarcategoria() as $resultado):?>
                                                <option value="<?=$resultado['idtipo_funcionario'];?>"><?=$resultado['nivel'];?></option>
                                            <?php  endforeach;?>
                                        </select>
                                    </div>
                                  </div>


                                <div class="col-sm-12  col-md-2 pt-3 ">
                                    <div class="form-group">
                                        <button type="button" class="btn w-100 btn-primary" data-toggle="modal" data-target="#modalCategoria">Add categoria</button>
                                    </div>
                                </div>

                            </div>
                            <!--BOTAO DO FORMULARIO-->
                            <div class="row align-self-center">
                               <div class="col-sm-12 col-md-12">

                                  <button type="submit" class="btn btn-info btn-block"  name="btnSubmitFun">Salvar</button>
                            </div>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div><!--1º COLUNA-->
          </div><!-- LINHA-->


              </div> <!--FIM FORMULARIO-->
              </div><!-- FIM PAINEL-->




    <!--
    ================================================================================================================================
                                          MODAL PARA CADASTRAR CATEGORIA
    ================================================================================================================================
    -->


            <div class="modal fade" id="modalCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nível de acesso</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form  class="formulario" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="titulo" class="col-form-label">Descrição do nível</label>
                                    <input type="text" class="form-control" placeholder="titulo do album" name="titulo" id="titulo">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="btnSubmitModal">cadastrar</button>
                                </div>
                            </form>
                        </div>
                     </div>
                 </div>
            </div>






          <!--   Core JS Files   -->
          <script src="../assets/js/hugo.js"></script>
          <script src="../assets/js/core/jquery.min.js"></script>
          <script src="../assets/js/core/popper.min.js"></script>
          <script src="../assets/js/core/bootstrap.min.js"></script>
          <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
          <!--  Google Maps Plugin    -->
          <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
          <!-- Chart JS -->
          <script src="../assets/js/plugins/chartjs.min.js"></script>
          <!--  Notifications Plugin    -->
          <script src="../assets/js/plugins/bootstrap-notify.js"></script>
          <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
          <script src="../assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
          <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
          <script src="../assets/demo/demo.js"></script>



          <!--Script para validadar os campos-->
          <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
          'use strict';
          window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
          }
          form.classList.add('was-validated');
          }, false);
          });
          }, false);
          })();
          </script>





        </body>

          <?php


          //CADASTRO DO FUNCIONÁRIO

                  if(isset($_POST['btnSubmitFun'])){
                       $funcionario->setNomefncionario($_POST['nome']);
                       $funcionario->setIdentificacao($_POST['identificacao']);
                       $funcionario->setEndereco($_POST['endereco']);
                       $funcionario->setLoginEmail($_POST['login']);
                       $funcionario->setSenha($_POST['senha']);
                       $funcionario->setTipoFuncionario($_POST['categoria']);


                       if(!$funcionarioDao->consultarFuncionario($_POST['identificacao'])){

                       if($funcionarioDao->cadastrarFuncionario($funcionario)){
                           echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=funcionario.php'>";
                           $_SESSION['msg_cat'] = "<div class='alert alert-success' role='alert' id='alerta'>Funcionário cadastrado com sucesso.</>";
                       }

                        }else{

                              echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=funcionario.php'>";
                               $_SESSION['msg_cat'] = "<div class='alert alert-danger' role='alert' id='alerta'>Funcionário já existe.</>";
                          }

                  }


           //CADASTRO DA CATEGORIA

              if(isset($_POST['btnSubmitModal'])){
                  $categoria->setNivel($_POST['titulo']);

                  if(!$categoriaDao->consultarcategoria($_POST['titulo'])) {

                      if ($categoriaDao->cadastrar($categoria)) {
                          echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=funcionario.php'>";
                          $_SESSION['msg_cat'] = "<div class='alert alert-success' role='alert' id='alerta'>Categoria cadastrada com sucesso.</>";

                      }
                  }else{
                      $_SESSION['msg_cat'] = "<div class='alert alert-danger' role='alert' id='alerta'>Categoria já existe.</>";
                      echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=funcionario.php'>";

                  }
              }

          ?>

      </html>