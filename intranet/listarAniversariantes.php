<?php
    include 'componentes/topo.php';
    
    include_once 'bootstrap.php';
?>

	<div class="container-fluid ">
		<div class="col-sm-3">
		
		<div class="jumbotron">
			<div>	
                            <img alt="CEADIS" src="img/udtp_2.png"  class="img-rounded img-thumbnail img-responsive" />
			</div>
		</div>
						
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-share-alt"></span> LINKS DE ACESSO</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled">
					<?php 
						include_once 'links.php';
					?>					
					</ul>
				</div>
			<div class="panel-footer"></div>
		</div>

		<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-info-sign"></span> INFORMAÇÕES</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled">
				<?php 
					include_once 'linksRamais.php';
				?>
					
					</ul>
				</div>
			<div class="panel-footer"></div>
		</div>
                    
                <div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-gift"></span> ANIVERSARIANTES</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled">				
					                                                        
                                            <?php
                                            include_once 'listaraniversariantes.php';
                                            ?>
	
					</ul>
				</div>
			<div class="panel-footer"></div>
		</div>        
		
                <div class="panel panel-primary">
		       <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-wrench"></span> SISTEMAS DE HOMOLOGAÇÃO</h3>
		       </div>
				<div class="panel-body">
					<ul class="list-unstyled">
									
					<li><a href="http://172.17.0.13" target="_blank"><span class="glyphicon glyphicon-share-alt"></span> WMS - Lois Homologação</a></li>
                                            
					</ul>
				</div>
			<div class="panel-footer"></div>
		</div>

	</div>
	<div class="container col-sm-9">
	
		<div class="jumbotron ">

			
    <?php
/*
    $ID = base64_encode(date('d-m-Y').'M');
    $Unidade = '2';
    $Host = 'localhost';
   // $Host = '187.62.217.158';

    $RemoteUrl = 'http://'. $Host .'/sga/services/listadeaniversariante.php?id='. $ID .'&unidade='. $Unidade;

    $dados = file_get_contents($RemoteUrl);

    $dados = json_decode($dados);

    $grid = new \app\core\Grid();
    $grid->setCabecalho(array('Dia','Nome','Setor'))
         ->setDados($dados);
    
    $painel = new app\core\Painel();
    $painel->setPainelTitle('<span class="glyphicon glyphicon-gift"></span> Aniversáriantes do Mês')
           ->addGrid($grid)
           ->setPainelColor('primary')
           ->show();
*/
    
    ?>
			
		</div>		
	</div>
</div>
	
	<?php
             include 'componentes/footer.php';
        ?>

        

