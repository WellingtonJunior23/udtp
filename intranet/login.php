<?php
session_start();
    
    if($_POST){

    $needle = filter_var($_POST['usuario'],FILTER_SANITIZE_STRING);
    $haystack = array('marcio','camila','wellington','jessica');

    $needleSenha = filter_var($_POST['senha'],FILTER_SANITIZE_STRING);
    $haystackSenha = array('@ceadisIntranet','@udtpIntranet');

            if(in_array($needle, $haystack)){

                if(in_array($needleSenha,$haystackSenha)) {
                    $_SESSION['permissao_gi'] = $needle;
                    header('Location: gi.php');
                    //$erro = 'Usuário Encontrado';
                }else{
                    $erro = 'Senha incorreta';
                }

            }  else { 
                $erro = 'Usuário não Encontrado';
                //header('Location: login.php');
        }
    
    }
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>GESTÃO DE IMAGENS INTRANET</title>
<link rel="stylesheet" href="css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='shortcut icon' href=''>
</head>

<body>
    
    <div class="container">
        <div class="col-sm-5 col-sm-offset-3"> 
            <br>
            <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> LOGIN</h3>
        </div>
        <div class="panel-body">
            
            
            <form method="post"> 
                                                
                <h3 class="text-info">Usuário e Senha:</h3>                
                <div class="form-group">                    
                    <input type="text" class="form-control" id="usuario" placeholder="Usuário" name="usuario" required>
                </div>
  
                <div class="form-group">                    
                    <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
                </div>                                  
                
                <button type="submit" class="btn btn-primary"> Entrar</button> 
                <span><?php echo $erro; ?></span>
                <br>
                <br>
                
            </form>
              
        </div>
               <div class="panel-footer"><span class="text-warning">Tecnologia da Informação - <?php echo date('Y');?></span></div> 
            </div>        
        </div>
            
        </div>        
</body>       
</html>

