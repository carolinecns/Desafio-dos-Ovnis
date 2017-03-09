    <?php 
        require_once('inc/resultado.php');
        
        $resultado = new Resultado();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Desafio dos OVNIs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/jquery-3.1.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <style>   
        /* Add a gray background color and some padding to the footer */
        footer {
          background-color: #f2f2f2;
          padding: 25px;
        }
        body{
            width: 1200px;
            margin-right: auto;
            margin-left: auto;
            border:1px solid #000;
            border: 1px solid #ccc;
        }
      </style>
    </head>
    <body>
    <div class="jumbotron">
      <div class="container">
        <h2 class="text-center">Teste para Desenvolvedor na Fundação Casper Líbero</h2>      
        <h3 class="text-center">Desafio dos OVNIs</h3>  
      </div>
    </div>
      <div class="container text-justify">
        <p>Dizem que por detrás de cada cometa há um OVNI. Esses OVNIs tem por objetivo buscar bons desenvolvedores na Terra.</p>

          <p>Infelizmente, só há espaço suficiente para levar um grupo de desenvolvedores por vez. Afim de selecioná-los, há um engenhoso esquema, da associação do nome do cometa ao nome do grupo, que possibilita a cada grupo saber se será levado ou não.</p>

          <p>Os dois nomes, do grupo e do cometa, são convertidos em um número que representa o produto das letras do nome, onde "A" é 1 e "Z" é 26. Assim, o grupo "LARANJA" seria 12 * 1* 18 * 1 * 14 * 10 * 1 = 30240.</p>

          <p>Se o resto da divisão do número do grupo por 45 for igual ao resto da divisão do número do cometa por 45, então o grupo será levado.</p>

          <p>Para os cometas e grupos abaixo, você deverá desenvolvedor um programa ao qual dirá o grupo que <b>não</b> será levado?</p>
      </div>
     <br>
    <div class="container-fluid bg-2 text-center" style="width: 400px;">    
      <div class="row" style="border-bottom:1px solid #ccc">
        <div class="col-sm-6">
          <p><strong>Cometa</strong></p>
        </div>
        <div class="col-sm-6"> 
          <p><strong>Grupo</strong></p>
        </div>
      </div>
      <div class="row" style="border-bottom:1px solid #ccc">
        <div class="col-sm-6">
          <p>HALLEY</p>
        </div>
        <div class="col-sm-6"> 
          <p>AMARELO</p>
        </div>
      </div>
      <div class="row" style="border-bottom:1px solid #ccc">
        <div class="col-sm-6">
          <p>ENCKE</p>
        </div>
        <div class="col-sm-6"> 
          <p>VERMELHO</p>
        </div>
      </div>
      <div class="row" style="border-bottom:1px solid #ccc">
        <div class="col-sm-6">
          <p>WOLF</p>
        </div>
        <div class="col-sm-6"> 
          <p>PRETO</p>
        </div>
      </div>
      <div class="row" style="border-bottom:1px solid #ccc">
        <div class="col-sm-6">
          <p>KUSHIDA</p>
        </div>
        <div class="col-sm-6"> 
          <p>AZUL</p>
        </div>
      </div>
    </div>
    <hr>

    <div class="container-fluid text-center" style="background-color: #f2f2f2;">
      <h3>Resultado</h3>
    </div>
    <br>
    <?php 
        $resultado->ExibeResultado('')
    ?>
    <div class="container">
        <div class="container text-center">
          <h4>Grupos que não serão levados pelos Cometas</h4>
        </div>
        <br>
    <div class="container-fluid bg-2 text-left" style="width: 400px; ">    
      <div class="row" style="border-bottom:1px solid #ccc">
        <div class="col-sm-3">
          <p><strong>Cometa</strong></p>
        </div>
        <div class="col-sm-7">
          <p><strong>Grupo</strong></p>
        </div>
      </div>
      <div class="row" style="border-bottom:1px solid #ccc">
        <div class="col-sm-3">
          <p><strong>HALLEY</strong></p>
        </div>
        <div class="col-sm-7"> 
          <p><?=$resultado->ExibeResultado('HALLEY')?></p>
        </div>
      </div>
      <div class="row" style="border-bottom:1px solid #ccc">
        <div class="col-sm-3">
          <p><strong>ENCKE</strong></p>
        </div>
        <div class="col-sm-7">
          <p><?=$resultado->ExibeResultado('ENCKE')?></p>
        </div>
      </div>
      <div class="row" style="border-bottom:1px solid #ccc">
        <div class="col-sm-3">
          <p><strong>WOLF</strong></p>
        </div>
        <div class="col-sm-7">
          <p><?=$resultado->ExibeResultado('WOLF')?></p>
        </div>
      </div>
      <div class="row" style="border-bottom:1px solid #ccc">
        <div class="col-sm-3">
          <p><strong>KUSHIDA</strong></p>
        </div>
        <div class="col-sm-7">
          <p><?=$resultado->ExibeResultado('KUSHIDA')?></p>
        </div>
      </div>
    </div>
    </div>
    <br><br>

    <footer class="container-fluid text-center">
    <div>
        <h5>
          <strong>Nome: </strong>Caroline Costa<br>
          <strong>Telefone:  </strong>(13) 99712-3510<br>
          <strong>E-mail:  </strong>caroline_cns@yahoo.com.br
        </h5>
    </div>
    </footer>

    </body>
    </html>
