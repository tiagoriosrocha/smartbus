<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartBus - Técnico Integrado em Informática - IFRS - Câmpus Ibirubá</title>
    <!--CSS padrão da pagina-->
    <link rel="stylesheet" href="css/index.css">
    <!--Bootstrap usado-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Script usado-->
    <script src="js/index.js"></script>
</head>
<body> 
<div class="todo">
    <div class="jumbotron " style=" margin-bottom: 0;">
        <div class="text-center">
        <h4 class="titulo-site">SmartBus</h4> 
        <p class="titulo-site2">Transporte Inteligente</p> 
        </div>
      </div>
      <div class="margin-normal radio1 border-danger">
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="on" >
            <label class="btn btn-outline-primary" for="btnradio1" ><a href="/" class="nav-link" style="color: white ;">Menu</a></label>


            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio2" ><a href="/onibus1" class="nav-link" style="color: white ;">Volmir</a></label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            </a><label class="btn btn-outline-primary" for="btnradio3" ><a href="/onibus2" class="nav-link" style="color: white ;">Airtom</a></label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio4" ><a href="/onibus3" class="nav-link" style="color: white ;">Cassio</a></label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio5"><a href="/onibus4" class="nav-link" style="color: white ;">Ari</a></label>

        </div>
        </div>
    <div>
        
    </div>
    <ul>
       <nav class="menu-lateral">
            <img src="img/Smartbussemfundo.png" alt="" id="imagem" class="img-fluid img">
                <li class="item-menu">
                    <a href="/">
                        <span class="icon"><i class="bi bi-house"></i></span>
                        <span class="txt-link">Menu</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-chat-square-text"></i></span>
                        <span class="txt-link">Suporte</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="">    
                        <span class="icon"><i class="bi bi-journal-plus"></i></span>
                    <span class="txt-link">Login</span>
                </a>
            </li>
        </nav>
    </ul>
</div>  

<div class="row">
    <div class="col-md-12">
    <div id="accordion">

      <div class="card semborda fundo margin-normal">
        <div class="card-header fundo semborda" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h5 class="mb-0">
            <p class="h4 letra">Volmir Ida:</p>
          </h5>
        </div>
    
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <div class="row">  
            
              <div class="col-md-6 col-sm-12">
                <iframe src="https://www.google.com/maps/d/embed?mid=11MwTpVGBBm_KqGp3o3z4dAN6n5-5q0M&ehbc=2E312F" width="100%" height="480"></iframe> 
              </div>
              <div class="col-md-6 col-sm-12">
                <h3>Rota:</h3>
                <ul class="list-group">
                  <li class="list-group-item">A-Mundial Lava Rápido - Rua General Osório</li>
                  <li class="list-group-item">B-R. Gen. Osório, 2497 - Jardim do Sol</li>
                  <li class="list-group-item">C-R. Gen. Osório, 3650 - Hermany, Ibirubá</li>
                  <li class="list-group-item">D-Escola hermany - Avenida Brasil</li>
                  <li class="list-group-item">E-SENAI - Hermany</li>
                  <li class="list-group-item">F-Central do Automóvel - Rua Mauá</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="card semborda fundo margin-normal">
        <div class="card-header fundo semborda" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <h5 class="mb-0">
            <p class="h4 letra">Volmir volta segunda, terça e quinta:</p>
          </h5>
        </div>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <div class="row"> 
              <div class="col-md-6 col-sm-12">
              <iframe src="https://www.google.com/maps/d/embed?mid=1j1Rp3nKwBgDc4CWf-MI8FKaoVCw-Quk&ehbc=2E312F" width="100%" height="480"></iframe> 
              </div>
              <div class="col-md-6 col-sm-12">
                  <h3>Rota:</h3>
                  <ul class="list-group">
                    <li class="list-group-item">A-IFRS - Rua Nelsi Ribas Fritsch</li>
                    <li class="list-group-item">B-Rua Mauá - Jardim</li>
                    <li class="list-group-item">C-Rua Porto Alegre - São Jacó</li>
                    <li class="list-group-item">D-Rua Francisco Weber N 138 I, 138 Jardim Ibirubá</li>
                    <li class="list-group-item">E-Escola Municipal Hermany</li>
                    <li class="list-group-item">F-Loteamento Coohabi</li>
                  </ul>
                </div>
            
        </div>
      </div>
    </div>
  </div>
    
  
      
      <div class="card semborda fundo margin-normal">
        <div class="card-header fundo semborda" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <h5 class="mb-0">
            <p class="h4 letra">Volmir volta quarta e sexta:</p>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <div class="row">  
              <div class="col-md-6 col-sm-12">
                <iframe src="https://www.google.com/maps/d/embed?mid=1j3wXw5XW39B05z3NweCOYx57g6df4YE&ehbc=2E312F" width="100%" height="480"></iframe>
              </div>
              <div class="col-md-6 col-sm-12">
                  <h3>Rota:</h3>
                  <ul class="list-group">
                    <li class="list-group-item">A-IFRS</li>
                    <li class="list-group-item">B-Clube Campestre Colibri</li>
                    <li class="list-group-item">C-Av. Brasil, 2837 - Hermany</li>
                    <li class="list-group-item">D-Escola Hermany</li>
                    <li class="list-group-item">E-Mundia Lava Rápido</li>
                    <li class="list-group-item">F-Escola General Osório</li>
                  </ul>
                </div>
                
        </div>
      </div>
    </div>
  </div>
          </div>
        </div>    
      </div>
    </div>
  </div>
    </div>
  </div>
  </div>
  </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>