<!DOCTYPE html>
<html lang="es">
    <head>
        <title> Ejercicios Php </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <style type="text/css">
            
        </style>

    </head>
    <body>


        <h1> Variables de tipo objeto en PHP. Objeto rengon de pedido </h1>



        <?php 

            echo "<h2 style='color:blue'> \$objRenglonPedido </h2>";
            $objRenglonPedido = new stdclass;
            $objRenglonPedido->codigo="CA1652";
            $objRenglonPedido->descripcion="Correa Poli V Cont. 1200 elastica Vw Trend 08";
            $objRenglonPedido->precio=5999;
            $objRenglonPedido->stock=3;

            $objRenglonPedido2 = new stdclass;
            $objRenglonPedido2->codigo="AC1444";
            $objRenglonPedido2->descripcion="Axial 14x1.5 Der/Izq Vw Trend 08";
            $objRenglonPedido2->precio=13499;
            $objRenglonPedido2->stock=5;
            

            echo "<p> Codigo: " . $objRenglonPedido->codigo . "</p>";
            echo "<p> Descripcion: " . $objRenglonPedido->descripcion . "</p>";
            echo "<p> Lista: $" . $objRenglonPedido->precio . "</p>";
            echo "<p> Stock: " . $objRenglonPedido->stock . "</p>";

            echo "<h2> Tipo de " . "<span style='color:blue'> \$objRenglonPedido: </span>". gettype($objRenglonPedido) . "</h2>";

            echo "<h2> Definamos arreglo de pedidos: </h2>";
            echo "<h2><span style='color:blue'> \$renglonesPedido </span></h2>";
            $renglonesPedido = [];
            array_push($renglonesPedido, $objRenglonPedido);
            array_push($renglonesPedido, $objRenglonPedido2);

            echo "<h2> Tabula <span style='color:blue'> \$renglonesPedido </span>. Recorrer el arreglo de renglones y tabularlos con html</h2>";

            foreach($renglonesPedido as $objRenglonPedido){
                echo $objRenglonPedido -> codigo. "&emsp;" .$objRenglonPedido -> descripcion . "&emsp;" . $objRenglonPedido -> precio . "&emsp;" . $objRenglonPedido -> stock . "<br/>";
            }

            echo "<h3> Cantidad de renglones: " . count($renglonesPedido)."</h3>";

            echo "<h2> Produccion de un objeto <span style='color:blue'> \$objRenglonesPedido </span> con dos atributos array renglonesPedido y cantidadDeRenglones </h2>";
            $objRenglonesPedido = new stdclass;
            $objRenglonesPedido->renglonesPedido=$renglonesPedido;
            $objRenglonesPedido->cantidadDeRenglones=count($renglonesPedido);
            echo "<p> Cantidad de renglones" . $objRenglonesPedido-> cantidadDeRenglones . "</p>";

            echo "<h2> Produccion de un JSON jsonRenglones: </h2>";
            echo json_encode($objRenglonesPedido);

        ?>
        
        

    </body>
</html>