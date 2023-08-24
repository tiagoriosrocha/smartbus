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
    <!-- <link rel="stylesheet" href="/lib/bootstrap.min.css"> -->
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
        <ul>
            <li align="middle"><img src='img\foto1.jpg' margin-bottom="100px" id="img1"></li>
            <li><h2 id="lista">Sobre o Projeto</h2> <p id="texto">
                Fruto do Projeto Integrador do IFRS Campus Ibirubá, tem o objetivo de facilitar a mobilidade urbana de forma organizada por meio da disponibilização de horários e rotas dos ônibus para os alunos do IFRS, pois percebe-se a falta de informações sobre os transportes públicos, como falta de informação sobre os trajetos percorridos pelo ônibus.</p>
            </li> 
        </ul>
    </div>
</div>
<!--BOTÕES-->
    <div class="botao d-grid gap-2 d-md-flex justify-content-md-end" align="end">
        <ul>
            <li> <button class="btn btn-primary me-md-2" id="btnvoltar" onclick="voltar()">Voltar</button> </li>
            <li> <button class="btn btn-primary" id="btnproximo" onclick="proximo()">Proximo</button> </li>
        </ul>
    
    </div>

        <script href="js/index.js"></script>
</body>
<!--CSS de toda a div margin-->>
<style>
    
/*Container CSS*/
    .container{
        padding-top: 20px;
        text-align: justify;
        margin: 0 auto;
        border: 3px solid  #002659;
        color: black;
        background-color: #ffffff;;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 0px;
        border-bottom-right-radius: 0px;
        width: 60%;
        height: 245px;
        margin: 0 auto;
    }
    .container li{
            width: 44.5%;
            display: inline-block;
            align-content: center;
    }     
/*Imagens CSS*/
        #img1{
            margin-left: -55px;
            margin-top: -21px;
            margin-bottom: 30px;
            border-top-left-radius: 15px;
            height: 241px;
            max-width: 100%;
        }    
/*Margem CSS*/
        .margin{
            margin-top: 3%;
        }
       
/*END Container CSS*/
/*Botões CSS*/
        .botao{
            padding-top: 2px;
            padding-bottom: 0.5px;
            margin: 0 auto;
            display:block;
            justify-content: right;
            align-items: right;
            background:  #002659;
            color: #ffffff;
            align-items:bottom;
            width: 60%;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        } 
        .botao li{
            display: inline-block;
            margin: 0 20px;
        }
        .botao li a{
            font-size:24px;
            text-decoration: none;
            text-transform: uppercase;
            padding: 5px 5px;
        }

/*Voltar#btnvoltar{
        margin-bottom: 1px;
        padding: 2px 2px 2px 2px;
        border-radius: 10px;
        color: #002659;
        font-size: 15px;
        box-shadow: none;
        cursor:pointer;
        overflow: hidden;
        border: none;
        background-color: #ffffff;
    }
/*Proximo    #btnproximo{ 
        padding: 2px 2px 2px 2px;
        border-radius: 10px;
        color:  #002659;
        font-size: 15px;
        box-shadow: none;
        cursor:pointer;
        overflow: hidden;
        border: none;  
        background-color: #ffffff
    }
/*END Botões CSS*/

/*Responsividade*/
        @media screen and (max-width: 1060px) { /*Celular*/
            .container li{
                width: 100%;
                display: list-item;
            }
            
            #img1{
                border-radius: 20px;
                height: 240px;
                margin-bottom: -20px;
                margin-top: -22.0px;
                margin-left: -5px;
                border: 5px solid transparent;    
            }
            .container{
                overflow-y: auto;
                margin-left: 30%;
                margin-bottom: 0px;
                border-top-right-radius: 20px;
                border-top-left-radius: 20px;
                border-bottom-left-radius: 0px;
                border-bottom-right-radius: 0px;
            }
            #lista{
                margin-top: 30%;
            }
           .botao{
            margin-left: 30%;
           }
   }
</style>
<script>
</script>
</html>
