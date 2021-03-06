<?php
include_once 'componentes/topo.php';
?>

<?php
include_once 'paineis.php';
?> 

<div class="container col-sm-9">

    <h3>Fique por dentro das novidades e dos acontecimentos da UDTP.</h3>
    <br>	    		    	    	    	   		   	
    <div class="jumbotron">					

        <div class="container">
            <!-- Inicio Slider -->

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/udtp.png" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <?php
                    $dir = new DirectoryIterator('img/slides');

                    foreach ($dir as $file) {

                        if ($file->isDot()) {
                            continue;
                        }
                        ?>
                        <div class="item">
                            <img src="img/slides/<?php echo $file->getFilename(); ?>" alt="...">
                            <div class="carousel-caption">

                            </div>
                        </div>
                    <?php } ?>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div><!-- /.container -->
    </div>

    <div class="col-sm-6"></div><!-- Apenas um espaço aqui -->

    <div class="col-sm-6">
        <img class="img-responsive" src="img/laborfit.png">
        <br>
        <a href="arquivos/PAC_-_Fevereio_2015.pdf" target="_blank" title="Clique Para Vizualizar"><p>PAC - Projeto Ações de Conscientização / Fevereiro 2015</p></a>
        <a href="arquivos/PAC Março.pdf" target="_blank" title="Clique Para Vizualizar"><p>PAC - Projeto Ações de Conscientização / Março 2015</p></a>
        <a href="arquivos/PAC Junho 2015.pdf" target="_blank" title="Clique Para Vizualizar"><p>PAC - Projeto Ações de Conscientização / Junho 2015</p></a>
        <a href="arquivos/PAC Julho 2015.pdf" target="_blank" title="Clique Para Vizualizar"><p>PAC - Projeto Ações de Conscientização / Julho 2015</p></a>
    </div>

</div>                                                                

<?php
include_once 'componentes/footer.php';
?>




