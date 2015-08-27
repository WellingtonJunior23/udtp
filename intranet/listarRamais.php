<?php
include_once 'componentes/topo.php';

include_once 'bootstrap.php';
?>

<?php
include_once 'paineis.php';
?>	

<div class="container col-sm-9">

    <div class="jumbotron ">

        <?php
        $grid = new app\core\Grid();
        $file = new app\core\ReadCsv();

        $file->readFileCsv('arquivos/contatos_udtp.csv');

        function convertUtf8($var) {
            return utf8_encode($var);
        }

        $grid->setCabecalho($file->getColumn())
                ->setDados($file->getLines())
                ->addFunctionColumn('convertUtf8', 1)
                ->addFunctionColumn('convertUtf8', 2);

        $painel = new app\core\Painel();
        $painel->setPainelTitle('Lista de Ramais')
                ->addGrid($grid)->setPainelColor()
                ->show();
        ?>

    </div>		
</div>

<?php
include_once 'componentes/footer.php';
?>



