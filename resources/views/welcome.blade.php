<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--CSS padrão da pagina-->
    <link rel="stylesheet" href="css/index.css">
    <!--Bootstrap usado-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="/lib/bootstrap.min.css">
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
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="on" checked>
            <label class="btn btn-outline-primary" for="btnradio1" ><a href="/" class="nav-link" style="color: white ;">Menu</a></label>


            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
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
<div class="margin">
    <div class="container">
       <img src="img/foto1.jpg" alt="Foto" id="img1"></li>
        <h2  id="lista">Sobre o Projeto</h2>
        <p  id="texto">
            Fruto do Projeto Integrador do IFRS Campus Ibirubá, tem o objetivo de facilitar a mobilidade urbana de
            forma organizada por meio da disponibilização de horários e rotas dos ônibus para os alunos do IFRS,
            pois percebe-se a falta de informações sobre os transportes públicos, como falta de informação sobre os
            trajetos percorridos pelo ônibus.
        </p>
        <hr>
        <!-- BOTÕES -->
        <div class="botao d-grid gap-2 d-md-flex justify-content-md-end" align="end">

                 <button class="btn btn-primary me-md-2" id="btnvoltar" onclick="voltar()">Voltar</button> 
                 <button class="btn btn-primary" id="btnproximo" onclick="proximo()">Proximo</button> 
      
        
        </div>
    </div>
</div>

<script src="js/index.js"></script>
</body>
<!--CSS de toda a div margin-->>
<style>
    
/*Container CSS*/

.container {
            padding: 10px;
            text-align: justify;
            border: 3px solid #002659;
            color: black;
            background-color: #ffffff;
            border-radius: 20px;
            width: 50%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container img {
            margin: 10px auto;
            border-radius: 10px;
            max-width: 50%;
            height: auto;
            display: block;
        }

        /* Margin CSS */
        .margin {
            margin-top: 3%;
        }

        /* Buttons CSS */
        .botao {
            padding: 10px;
            color: #002659;
            border-radius: 0 0 20px 20px;
            text-align: right;
        }

        .botao button {
            margin: 0 10px;
            border-radius: 8px;
            padding: 10px;
            font-size: 15px;
            background-color: #002659;
            color: #ffffff;
        }

        /* Responsiveness */
        @media screen and (max-width: 768px) {
            .container {
                margin-left: 90px;
                width: 70%;
                align-items: flex-start;
            }
            .container img {
                margin: 10px 0;
                max-width: 100%
            }
            .botao {
                text-align: center;
            }
        }
</style>
<script>
</script>
</html>
