<?php

  $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_projeto','root','');
  $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
  $sobre->execute();
  $sobre = $sobre->fetch()['sobre'];
  
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Projeto Bootstrap</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>MD</b>website</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="sobre">Sobre</a></li>
            <li><a href="contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="box">
        <section class="banner">
            <div class="overlay"></div>
            <div class="container chamada-banner">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2><?php echo htmlentities('<'); ?><b>MD</b>website<?php echo htmlentities('>'); ?></h2>
                        <p>Empresa voltada para o desenvolvimento web e marketing digital</p>
                        <a href="">Saiba Mais</a>
                    </div><!--col-->
                </div><!--row-->    
            </div><!--container-->
        </section><!--banner-->
        <section class="cadastro-lead">
            <div class="container">
                <div class="row text-center">
                     <div class="col-md-6">
                        <h2><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> Entre na nossa lista!</h2>
                     </div>
                     <div class="col-md-6">
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Seu email..." required /><input type="submit" value="Cadastrar" name="acao">
                            
                        </form>
                     </div>
                </div><!--row-->
            </div><!--container-->
        </section><!--cadastro-->
        <section class="depoimento text-center">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2>Depoimentos</h2>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam modi magnam cum cupiditate labore possimus sint, ad eligendi asperiores atque in nihil sit at, nulla beatae veniam doloremque soluta est. Ipsam modi magnam cum cupiditate labore possimus sint, ad eligendi asperiores atque in nihil sit at, nulla beatae veniam doloremque soluta est, ad eligendi asperiores atque in nihil sit at, nulla beatae veniam doloremque soluta est. Ipsam modi magnam cum cupiditate labore possimus sint.</p>
                  </blockquote>
                </div><!--col-->
              </div><!--row-->
            </div><!--container-->
        </section><!--depoimento-->
        <section class="diferenciais text-center">
          
        <h2>Conheça nossa empresa!</h2>
          <div class="container">
            <div class="row dif-container">
              <?php echo $sobre;?>
            </div><!--row-->
          </div><!--container-->
        </section><!--diferenciais-->
        <section class="equipe">
          <h2>Equipe</h2>
          <div class="container equipe-container">
            <div class="row">
              <?php

                $equipe = $pdo->prepare("SELECT * FROM `tb_equipe`");
                $equipe->execute();
                $equipe = $equipe->fetchAll();
                foreach($equipe as $key => $value){
              
              ?>
              <div class="col-md-6">
                <div class="equipe-single">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="user-picture">
                        <div class="user-picture-child">
                        <span class="glyphicon glyphicon-user"></span>
                      </div>
                      </div>
                    </div>
                    <div class="col-md-10">
                      <h3><?php echo $value['nome']; ?></h3>
                      <p><?php echo $value['descricao'];  ?></p>
                    </div>
                  </div>
                </div><!--equipe-single-->
              </div><!--col-md-6-->
              
              <?php } ?>
              
            </div><!--row-->
          </div><!--container-->
        </section><!--equipe-->
        <section class="final-site">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
              <h2>Fale conosco</h2>
              <form method="post">
                <div class="form-group">
                  <label for="email">Nome:</label>
                  <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome...">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Seu email...">
                </div>
                <div class="form-group">
                  <label for="email">Mensagem</label>
                  <textarea class="form-control" placeholder="Sua mensagem..."></textarea>
                </div>
                
                
                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
              </div><!--col-->
              <div class="col-md-6">
                <h2>Nossos planos</h2>        
                <table class="table">
                  <thead>
                    <tr>
                      <th>Plano semanal</th>
                      <th>Plano diário</th>
                      <th>Plano Anual</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>50 canais</td>
                      <td>12 canais</td>
                      <td>100 canais</td>
                    </tr>
                    <tr>
                      <td>R$199,00</td>
                      <td>R$299,00</td>
                      <td>R$399,00</td>
                    </tr>
                  </tbody>
                </table>
              </div><!--col-->
            </div><!--row-->
          </div><!--container-->
        </section><!--final-site-->

        <footer class="text-center">
          <p>Todos os direitos reservados</p>
        </footer>
    </div><!--box-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>