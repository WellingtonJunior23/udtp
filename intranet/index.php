<?php
    include 'componentes/topo.php';
?>
	
<div class="container-fluid "> 
		<div class="col-sm-3">
		
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
	                
            <h3>Fique por dentro das novidades e dos acontecimentos da UDTP.</h3>
	    <br>	    		    	    	    	   		   	
		<div class="jumbotron">					

		<?php 
                    include_once 'js/js.php';
		?>
        </div>
		
                    <div class="col-sm-6">               
                    <a href="img/Quick.png" target="_blank" title="Clique Para Ampliar"><img src="img/Quick.png" class="img-thumbnail" alt="Responsive Image"></a>                   
                    </div>
                    
                    <div class="col-sm-6">
                        <img class="img-responsive" src="img/laborfit.png">
                        <br>
                        <a href="arquivos/PAC_-_Fevereio_2015.pdf" target="_blank" title="Clique Para Vizualizar"><p>PAC - Projeto Ações de Conscientização / Fevereiro 2015</p></a>
                        <a href="arquivos/PAC Março.pdf" target="_blank" title="Clique Para Vizualizar"><p>PAC - Projeto Ações de Conscientização / Março 2015</p></a>
                        <a href="arquivos/PAC Junho 2015.pdf" target="_blank" title="Clique Para Vizualizar"><p>PAC - Projeto Ações de Conscientização / Junho 2015</p></a>
                        <a href="arquivos/PAC Julho 2015.pdf" target="_blank" title="Clique Para Vizualizar"><p>PAC - Projeto Ações de Conscientização / Julho 2015</p></a>
                    </div>
                    
		</div>                                                                
                                                
	</div>
                            
</div>	
                 
        <?php
            include 'componentes/footer.php';
        ?>

        


