<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    Now UI Dashboard by Creative Tim
    </title>
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
  <body onload="somarValores()">
    <div class="wrapper ">
      <div class="sidebar" data-color="orange">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
        -->
        <div class="logo">
          <!-- <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            TAZ
          </a><--></-->
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
            
            <!--<li>
              <a href="./user.html">
                <i class="now-ui-icons users_single-02"></i>
                <p>User Profile</p>
              </a>
            </li>
            <li>
              <a href="./tables.html">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>Table List</p>
              </a>
            </li>
            <li>
              <a href="./typography.html">
                <i class="now-ui-icons text_caps-small"></i>
                <p>Typography</p>
              </a>
            </li>-->
          </ul>
         <div class="logo">
          <h4 class="simple-text logo-normal">Área Administrativa</h4>
          </div>

        <div class="">
          <ul class="nav">
            <li   class="active">
              <a href="evento.php">
                <i class="now-ui-icons ui-1_calendar-60"></i>
                <p>Cadastro Evento</p>
              </a>
            </li>
             <li>
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
      </div>
      <!-- Fim Navbar -->
          <!--INICIO FORMULARIO-->

      <div class="content  mt-5"> 


  <div class="row"> <!-- LINHA-->

          <div class="col-sm-12 col-lg-12 mt-5"><!--1º CARD-->
            <div class="card">
              <div class="card-header">
                <h5 class="title">Cadastro de Evento</h5>
              </div>
              <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                  <!--LINHA DOS CAMPOS NOME E IDENTIFICACAO-->
                 
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile">Selecione a imagem</label>
                        </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-4">
                         <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo">
                      </div>
                      </div>
                      <div class="col-sm-12 col-md-4">
                         <div class="form-group">
                           <label for="categoria">Categoria</label>
                            <select class="form-control" id="categoria">
                             <option></option>
                              <option>Comedia</option>
                              <option>Música</option>
                              <option>Drama</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-4">
                         <div class="form-group">
                           <label for="status">Status</label>
                            <select class="form-control" id="status">
                             <option></option>
                              <option value="1">Ativo</option>
                              <option value="0">Inativo</option>
                            </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                           <label for="exampleFormControlTextarea1">Descrição</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="digite algo sobre o evento"   rows="3"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row"  id="origem">
                         <div class="col-sm-12 col-md-4">
                           <div class="form-group">
                            <label for="data">Data</label>
                             <input type="date" class="form-control date-picker" id="data" name="data[]">
                          </div>
                        </div>

                         <div class="col-lg-2 col-sm-12">
                             <label for="validationAdd" >Remover</label>
                               <button type="button" class="btn btn-danger btn-sm btn-block" onclick="removerCampos(this);">
                                 <i class="fas fa-trash-alt"></i>
                               </button>
                        </div>
                    </div>

                     <div  id="destino"></div>

                      <div class="row">
                         <div class="col-lg-2 col-sm-12">
                           <label for="validationAdd">Adcionar Data</label>
                              <button type="button" class="btn btn-primary btn-sm btn-block" onclick="duplicarCampos();">
                                <i class="fas fa-plus"></i>
                             </button>
                        </div>
                      </div>

                       <div class="row align-self-center">
                         <div class="col-sm-12 col-md-12">
                          <button class="btn btn-info btn-block" type="submit">Salvar</button>
                         </div>
                      </div>                                       
                </form>
              </div>
            </div>
          </div><!--1º COLUNA-->
  </div><!-- LINHA-->





<!--CADASTRO DAS HORAS DOS EVENTOS-->

  <div class="row"> <!-- LINHA-->

          <div class="col-sm-12 col-lg-12 mt-2"><!--1º CARD-->
            <div class="card">
              <div class="card-header">
                <h5 class="title">Cadastro de Horarios dos Eventos</h5>
              </div>
              <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                  <!--LINHA DOS CAMPOS NOME E IDENTIFICACAO-->
                 
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                           <label for="categoria">Eventos Cadastrados</label>
                            <select class="form-control" id="categoria">
                             <option></option>
                              <option>Tirulipa junior</option>
                              <option>Seu Jorge</option>
                              <option>Madalena</option>
                          </select>
                        </div>
                    <div class="row ">
                      <div class="col-sm-12 col-md-4">
                         <div class="form-group">
                           <label for="categoria">Data do Evento</label>
                            <select class="form-control" id="categoria">
                             <option></option>
                              <option>13/06/2018</option>
                              <option>14/06/2018</option>
                              <option>16/06/2018</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row" id="origem_dois"> 

                       <div class="col-sm-12 col-md-4" >
                          <div class="form-group">
                        <label for="hora">Horario</label>
                        <input type="time" class="form-control" id="hora" name="hora[]">
                      </div>
                      </div>

                        <div class="col-lg-4 col-sm-12">
                             <label for="validationAdd" >Remover</label>
                               <button type="button" class="btn btn-danger btn-sm btn-block" onclick="removerCampos_dois(this);">
                                 <i class="fas fa-trash-alt"></i>
                               </button>
                        </div>
                    </div>


                  <div  id="destino_dois"></div>
                                  
           
                      <div class="row">
                         <div class="col-lg-4 col-sm-12">
                           <label for="validationAdd">Adcionar Horario</label>
                              <button type="button" class="btn btn-primary btn-sm btn-block" onclick="duplicarCampos_dois();">
                                <i class="fas fa-plus"></i>
                             </button>
                        </div>
                      </div>

                       <div class="row align-self-center">
                         <div class="col-sm-12 col-md-12">
                          <button class="btn btn-info btn-block" type="submit">Salvar</button>
                         </div>
                      </div>                                       
                </form>
              </div>
            </div>
          </div><!--1º COLUNA-->
  </div><!-- LINHA-->


      </div> <!--FIM FORMULARIO-->
      </div><!-- FIM PAINEL-->

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


      <!--Script para duplicar os campos-->

      <script type="text/javascript">
        
        function duplicarCampos(){
           var clone = document.getElementById('origem').cloneNode(true);
           var destino = document.getElementById('destino');

              destino.appendChild (clone);
                var camposClonados = clone.getElementsByTagName('input');
                  for(i=0; i<camposClonados.length;i++){
                    camposClonados[i].value = '';
                  }
              }

              function removerCampos(id){
                var node1 = document.getElementById('destino');
                  node1.removeChild(node1.childNodes[0]);
              }





               function duplicarCampos_dois(){
           var clone_dois = document.getElementById('origem_dois').cloneNode(true);
           var destino_dois = document.getElementById('destino_dois');

              destino_dois.appendChild (clone_dois);
                var camposClonados_dois = clone_dois.getElementsByTagName('input');
                  for(i=0; i<camposClonados_dois.length;i++){
                    camposClonados_dois[i].value = '';
                  }
              }
              
              function removerCampos_dois(id){
                var node1 = document.getElementById('destino_dois');
                  node1.removeChild(node1.childNodes[0]);
              }

      </script>


      <!--Script para alterar layout do input data-->
      <script>
        $('.date-picker').each(function(){
    $(this).datepicker({
        templates:{
            leftArrow: '<i class="now-ui-icons arrows-1_minimal-left"></i>',
            rightArrow: '<i class="now-ui-icons arrows-1_minimal-right"></i>'
        }
    }).on('show', function() {
            $('.datepicker').addClass('open');

            datepicker_color = $(this).data('datepicker-color');
            if( datepicker_color.length != 0){
                $('.datepicker').addClass('datepicker-'+ datepicker_color +'');
            }
        }).on('hide', function() {
            $('.datepicker').removeClass('open');
        });
});
      </script>


    </body>
  </html>