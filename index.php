<?php 
include_once('app/default.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Robson Flores">
  <meta name="description" content="">
  
  <title><?php echo $title;?></title>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo BASE_URL; ?>files/js/jquery.js"></script>
  <?php 
    if($page=='index'){
        echo '<link href="'.BASE_URL.'files/jgallery/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>';
        echo '<link href="'.BASE_URL.'files/jgallery/css/jgallery.min.css" rel="stylesheet" type="text/css"/>';
        echo '<script type="text/javascript" src="'.BASE_URL.'files/jgallery/js/tinycolor-0.9.16.min.js"></script>';
        echo '<script type="text/javascript" src="'.BASE_URL.'files/jgallery/js/jgallery.min.js"></script>';
        echo ' 
            <script type="text/javascript">
                $( function() {
                    var $random = Math.ceil(Math.random()*3);
                    $( "#gallery").jGallery( {
                        mode: "standard",
                        "autostart": true,
                        "autostartAtAlbum":$random,
                        "canClose": false
                    } );
                } );  
            </script>';
    }
    if($page=='pagina-nao-encontrada'){
        echo '<link href="'.BASE_URL.'files/css/pagina-nao-encontrada.css" rel="stylesheet" type="text/css"/>';
    }
  ?>
  <link href="<?php echo BASE_URL; ?>files/css/estilo.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo BASE_URL; ?>files/css/mainstyle.css" rel="stylesheet" type="text/css"/>
  
  <link href="<?php echo BASE_URL; ?>files/css/navegacao-por-abas.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo BASE_URL; ?>files/css/estilo-listas.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo BASE_URL; ?>files/css/janela-modal.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo BASE_URL; ?>files/css/alunos.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo BASE_URL; ?>files/css/turmas.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo BASE_URL; ?>files/css/perfil-aluno.css" rel="stylesheet" type="text/css"/>

  <!--<link href="calendario.css" rel="stylesheet" type="text/css"/>-->
  <!-- Bootstrap -->
  <!--<link href="<?php echo BASE_URL; ?>files/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
  <!-- <link rel="shortcut icon" href="../../assets/ico/favicon.png"> -->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo BASE_URL; ?>files/js/html5shiv.js"></script>
      <script src="<?php echo BASE_URL; ?>files/js/respond.min.js"></script>
      <![endif]-->
</head>
    <body>
     <!-- Start codin' -->
<!--     <div class="container">-->
        <?php 
            include_once(BASE_PATH . 'app/components/header.php');
            if($page!='index'){
                include_once(BASE_PATH . 'app/components/nav.php'); 
                echo 
                '<main>
                    <div id="titulo-pagina"><span>'.$title.'</span></div>
                    <div id="conteudo-pagina">';
                    include_once(BASE_PATH . 'pages/' . $page . '.php');
                echo
                '   </div>
                </main>';
            }
            else{
                include_once(BASE_PATH . 'pages/' . $page . '.php');
            }
        ?>
        <!--</div>-->
        <!-- /.container -->

        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!--<script src="<?php echo BASE_URL; ?>files/js/bootstrap.min.js"></script>-->
    </body>
</html>