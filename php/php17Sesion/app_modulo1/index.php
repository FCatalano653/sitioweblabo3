<?php

    include('./manejoSesion.php');

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title> Ejercicios Php </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-size: 22px;
                overflow: hidden;
            }
            
            
            header.headerPrincipal{
                height: 14vh;
                background-image: linear-gradient(rgb(226, 226, 226), rgb(255, 255, 255));
                text-align: center;
                           
            }  

            h1{
                padding: 10px;
                
            }
            
            footer.footerPrincipal{
                height: 6vh;
                background-image: linear-gradient(rgb(255, 213, 0), rgb(240, 181, 22)); 
                padding: 10px;                
                clear: both;
                text-align: center;
            }

            table{
                font-size: 0.7em;
                width: 100%;
                height: 100%;
                border: 0;
                color: white;
            }
            
            thead{
                background-color: cornflowerblue;
                height: 10%;
            }

            tr:nth-child(even) {
                background-image: linear-gradient(to right, rgb(65, 61, 61), rgb(0, 0, 0)); 
            }

            [campo-dato='Id']{
                width: 5%;
                font-size: 0.8em;    
                           
            }
            [campo-dato='Id'] input{
                width: 100%;
                
            }

            [campo-dato='Codigo']{
                width: 5%;    
                font-size: 0.8em;            
            }

            [campo-dato='Codigo'] input{
                width: 100%;    
                            
            }
         
            [campo-dato='Descripcion']{
                width: 30%;     
                font-size: 0.8em;           
            }
            [campo-dato='Descripcion'] input{
                width: 100%;     
                          
            }

            [campo-dato='Marca']{
                width: 10%;   
                font-size: 0.8em;             
            }
            [campo-dato='Marca'] select{
                width: 100%;                                
            }

            [campo-dato='FechaIngreso']{
                width: 10%;   
                font-size: 0.8em;             
            }
            [campo-dato='FechaIngreso'] input{
                width: 100%;   
                            
            }

            [campo-dato='Stock']{
                width: 2%;   
                font-size: 0.8em;             
            }

            [campo-dato='Stock'] input{
                width: 100%;                               
            }

            [campo-dato='Precio']{
                width: 5%;   
                font-size: 0.8em;             
            }
            [campo-dato='Precio'] input{
                width: 100%;                                
            }

            [campo-dato='Pdfs']{
                width: 6%;  
                font-size: 0.8em;              
            }

            [campo-dato='Pdfs'] button{
                width: 100%;  
                padding: auto;              
            }

            [campo-dato='Modis']{
                width: 6%;  
                font-size: 0.8em;              
            }
            [campo-dato='Modis'] button{
                width: 100%;  
                padding: auto;              
            }

            [campo-dato='Bajas']{
                width: 6%;   
                font-size: 0.8em;             
            }
            [campo-dato='Bajas'] button{
                width: 100%;  
                padding: auto;              
            }

            @media (max-width:1200px) and (min-width:600px){
                [campo-dato='FechaIngreso']{
                    display: none;
                }
                [campo-dato='Stock']{
                    display: none;
                }
                [campo-dato='Marca']{
                    display: none;
                }
            }

            @media (max-width:600px) and (min-width:0px){
                
                [campo-dato='FechaIngreso']{
                    display: none;
                    width: 0;
                }
                [campo-dato='Stock']{
                    display: none;
                    width: 0;
                }
                [campo-dato='Marca']{
                    display: none;
                    width: 0;
                }
                [campo-dato='Codigo']{
                    display: none;
                    width: 0;
                }
                [campo-dato='Precio']{
                    display: none;
                    width: 0;
                }
                [campo-dato='Id']{
                    width: 20%;
                    
                }
                [campo-dato='Descripcion']{
                    width: 50%;
                }
                [campo-dato='Pdfs']{
                    width: 10%;
                }
                [campo-dato='Modis']{
                    width: 10%;
                }
                [campo-dato='Bajas']{
                    width: 10%;
                }
                
            }

            .divHeader{
                height: 90%;
                
            }
            .divCorto{
                height: 10%;
                width: 100%;
                background-image: linear-gradient(rgb(255, 213, 0), rgb(240, 181, 22));                 
            }

            .divCentral{
                
                width: 100vw;
                overflow-y: visible;
                height: 80vh;
                /* padding-top: 10px;
                padding-bottom: 20px;
                float: left; */
                background-image: linear-gradient(rgb(65, 61, 61), rgb(0, 0, 0));
                                
            }

            #cantReg{
                float: left;
            }

            select.modal{
                margin-top: 20px;
                margin-left: 20px;
                height: 6%;
                width: 80%;
                display: block;
            }
            label.modal{
                margin-top: 20px;
                margin-left: 20px;
                display: block;
            }
            input.modal{
                margin-left: 20px;
                margin-top: 20px;
                height: 6%;
                width: 80%;
                display: block;                
            }

            .divHeaderModal{
                height: 10%;
                background-image: linear-gradient(rgb(226, 226, 226), rgb(255, 255, 255));
                text-align: center;
            }

            .divFooterModal{
                height: 6%; 
                background-image: linear-gradient(rgb(255, 213, 0), rgb(240, 181, 22));
                text-align: center;
            }

            div.ventanaModalPrendido{
                visibility: visible;
                position: fixed;
                top: 20%;
                left: 25%;                    
                overflow-y: auto;
                overflow-x: auto;
                z-index: 10;
                width: 40%;
                height: 70%;
                display: block;
                
            }

            div.ventanaModalRespuestaPrendido{
                visibility: visible;
                position: fixed;
                top: 15%;
                left: 35%;                    
                overflow-y: auto;
                overflow-x: auto;
                z-index: 10;
                width: 40%;
                height: 25%;
                display: block;
            }

            div.ventanaModalApagado{
                visibility: hidden;
                display: none;
            }

            button.btnCerrar{
                float: right;
                color: red;
                margin-bottom: 3%;
                margin-right: 3%;
                height: 3%;
                
            }

            .divMainIzq{
                
                width: 50%;
                height: 80%;
                padding-top: 10px;
                padding-bottom: 20px;
                float: left;
                
                                
            }
            .divMainDer{
                
                width: 50%;
                height: 80%;
                padding-top: 10px;
                padding-bottom: 20px;
                float: left;
                
               
            }

            form.modal{
                background-image: linear-gradient(to right, rgb(100, 148, 237), rgb(173, 216, 230));
            }

            #btEnvioFormAlta{
                
                margin-top: 10px;
            }

            #divModalRespuesta{
                background-image: linear-gradient(to right, rgb(100, 148, 237), rgb(173, 216, 230));
                font-size: 0.8em;
            }
            
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script  type="text/javascript">
            

            $(document).ready(function(){
                
                cargaMarcas();
                
                objTbDatos=document.getElementById("tbDatos");

                $("#btEnvioFormAlta").attr("disabled", "true");
                $("#btEnvioFormModi").attr("disabled", "true");

                $("#th_articulos_id").click(function(){
                    $("#orden").val("id");                    
                });

                $("#th_articulos_codArt").click(function(){
                    $("#orden").val("codArt");                    
                });

                $("#th_articulos_descrip").click(function(){
                    $("#orden").val("descrip");                    
                });

                $("#th_articulos_marca").click(function(){
                    $("#orden").val("marca");                   
                });

                $("#th_articulos_fechaIngreso").click(function(){
                    $("#orden").val("fechaIngreso");                    
                });

                $("#th_articulos_stock").click(function(){
                    $("#orden").val("stock");                    
                });

                $("#th_articulos_precio").click(function(){
                    $("#orden").val("precio");                    
                });

                //JQuery
                $("#1").click(function(){                    
                    cargaTabla();
                });

                //JavaScrip
                document.getElementById("2").onclick = function(){
                    $("#tbDatos").empty();
                }

                $("#buttonCerrarModis").click(function(){
                    
                    $("#ventanaModalForumularioModi").attr("class","ventanaModalApagado");
                });

                document.getElementById("4").onclick = function(){
                    $("#divModal").attr("class","ventanaModalPrendido");    
                    
                    var objAjax = $.ajax({
                    type:"post",
                    url:"./jsonMarcasHelper.php",
                    data:{

                    },
                    success: function(respuestaDelServer, estado){
                            $("#articulos_marca_alta").empty();
                            objJson = JSON.parse(respuestaDelServer);
                            objJson.marcas.forEach(function(value) {

                            var objOption = document.createElement("option");                            
                            objOption.innerHTML = value.marca;

                            document.getElementById("articulos_marca_alta").appendChild(objOption);
                            });
                        }
                    });

                }

                document.getElementById("5").onclick = function(){
                    $("#divModal").attr("class","ventanaModalApagado");                                        
                }

                $("#btCerrarVentanaModalRespuesta").click(function(){
                    $("#ventanaModalRespuesta").attr("class", "ventanaModalApagado");
                });

                $("#3").click(function(){
                    $("#f_articulos_id").val("");
                    $("#f_articulos_codArt").val("");
                    $("#f_articulos_descrip").val("");                                        
                    $("#f_articulos_fechaIngreso").val("");
                    $("#f_articulos_stock").val("");
                    $("#f_articulos_precio").val("");
                });

                $("#btEnvioFormAlta").click(function(){
                    if(confirm("¿Desea dar el alta el articulo?")){                        
                        var form = document.getElementById("formArticulosAlta");
                        form.addEventListener('submit', callbackFunction);

                        function callbackFunction(event) {
                            event.preventDefault();
                            data = new FormData(event.target);    
                            var objAjax = $.ajax({
                                type:'post',
                                method:'post',
                                enctype:'multipart/form-data',
                                url:"./alta.php",
                                processData:false,
                                contentType:false,
                                cache:false,
                                data:data,
                                success: function(respuestaDelServer){

                                    $("#ventanaModalRespuesta").attr("class", "ventanaModalRespuestaPrendido");                                    
                                    $("#pRespuesta").empty();
                                    $("#pRespuesta").html(respuestaDelServer);
                                    form.reset();
                                    
                                }
                            });                        
                        }
                                                
                        
                    }
                    
                });

                //Form Alta OnKeyUps
                document.getElementById("codArtAlta").onkeyup = function(){
                    todoListoParaAlta();
                }
                document.getElementById("descripAlta").onkeyup = function(){
                    todoListoParaAlta();
                }
                document.getElementById("fechaIngresoAlta").onkeyup = function(){
                    todoListoParaAlta();
                }
                document.getElementById("stockAlta").onkeyup = function(){
                    todoListoParaAlta();
                }
                document.getElementById("articulos_marca_alta").onkeyup = function(){
                    todoListoParaAlta();
                }
                document.getElementById("precioAlta").onkeyup = function(){
                    todoListoParaAlta();
                }

                //Form Modi OnKeyUps
                document.getElementById("codArtModi").onkeyup = function(){
                    todoListoParaModi();
                }
                document.getElementById("descripModi").onkeyup = function(){
                    todoListoParaModi();
                }
                document.getElementById("fechaIngresoModi").onkeyup = function(){
                    todoListoParaModi();
                }
                document.getElementById("stockModi").onkeyup = function(){
                    todoListoParaModi();
                }
                document.getElementById("articulos_marca_modi").onkeyup = function(){
                    todoListoParaModi();
                }
                document.getElementById("precioModi").onkeyup = function(){
                    todoListoParaModi();
                }

                $("#btEnvioFormModi").click(function(){
                    if(confirm("¿Desea realizar la modificacion?")){                        
                            modi();
                        }
                });

                

            });

            function cargaMarcas(){
                var objAjax = $.ajax({
                    type:"post",
                    url:"./jsonMarcasHelper.php",
                    data:{

                    },
                    success: function(respuestaDelServer, estado){
                            objJson = JSON.parse(respuestaDelServer);
                            objJson.marcas.forEach(function(value) {

                            var objOption = document.createElement("option");                            
                            objOption.innerHTML = value.marca;

                            document.getElementById("f_articulos_marca").appendChild(objOption);
                        });
                    }
                });
            }

            function cargaTabla(){
                
                $("#tbDatos").html("<p> Esperando respuesta.. </p>");
                var objAjax = $.ajax({
                    type:"post",
                    url:"./jsonArticulosHelper.php",
                    data:{
                        orden:$("#orden").val(),
                        f_articulos_id:$("#f_articulos_id").val(),
                        f_articulos_codArt:$("#f_articulos_codArt").val(),
                        f_articulos_descrip:$("#f_articulos_descrip").val(),
                        f_articulos_marca:$("#f_articulos_marca").val(),
                        f_articulos_fechaIngreso:$("#f_articulos_fechaIngreso").val(),
                        f_articulos_stock:$("#f_articulos_stock").val(),
                        f_articulos_precio:$("#f_articulos_precio").val()
                    },
                    success: function(respuestaDelServer, estado){
                        $("#tbDatos").empty();
                        alert(respuestaDelServer);
                        
                        objJson = JSON.parse(respuestaDelServer);
                        objJson.articulos.forEach(function(value) {
                    
                            var objTr = document.createElement("tr");

                            var objTd = document.createElement("td");
                            objTd.setAttribute("campo-dato", "Id");
                            objTd.innerHTML = value.id;
                            objTr.appendChild(objTd);

                            var objTd = document.createElement("td");
                            objTd.setAttribute("campo-dato", "Codigo");
                            objTd.innerHTML = value.codArt;
                            objTr.appendChild(objTd);

                            var objTd = document.createElement("td");
                            objTd.setAttribute("campo-dato", "Descripcion");
                            objTd.innerHTML = value.descrip;
                            objTr.appendChild(objTd);

                            var objTd = document.createElement("td");
                            objTd.setAttribute("campo-dato", "Marca");
                            objTd.innerHTML = value.marca;
                            objTr.appendChild(objTd);

                            var objTd = document.createElement("td");
                            objTd.setAttribute("campo-dato", "FechaIngreso");
                            objTd.innerHTML = value.fechaIngreso;
                            objTr.appendChild(objTd);

                            var objTd = document.createElement("td");
                            objTd.setAttribute("campo-dato", "Precio");
                            objTd.innerHTML = value.precio;
                            objTr.appendChild(objTd);

                            var objTd = document.createElement("td");
                            objTd.setAttribute("campo-dato", "Stock");
                            objTd.innerHTML = value.stock;
                            objTr.appendChild(objTd);

                            var objTd = document.createElement("td");
                            objTd.setAttribute("campo-dato", "Pdfs");
                            objButton = document.createElement("button");
                            objButton.innerHTML = "PDFS";
                            objTd.appendChild(objButton);
                            objTd.onclick = function(){
                                llenarDocumento(value.codArt);
                            };
                            objTr.appendChild(objTd);


                            var objTd = document.createElement("td");
                            objTd.setAttribute("campo-dato", "Modis");
                            objButton = document.createElement("button");
                            objButton.innerHTML = "Modi";
                            objTd.appendChild(objButton);
                            objTd.onclick = function(){
                                $("#ventanaModalForumularioModi").attr("class","ventanaModalPrendido");
                                llenarMarcasModi();
                                llenarDatosArticulo(value.codArt);
                            };
                            objTr.appendChild(objTd);
                            

                            var objTd = document.createElement("td");
                            objTd.setAttribute("campo-dato", "Bajas");
                            objButton = document.createElement("button");
                            objButton.innerHTML = "Borrar";
                            objTd.appendChild(objButton);
                            objTd.onclick = function(){
                                if(confirm("¿Dar de baja el articulo seleccionado: "+ value.codArt +"?")){
                                    bajaArticulo(value.codArt);
                                }                                
                            };
                            objTr.appendChild(objTd);
                            

                            document.getElementById("tbDatos").appendChild(objTr);
                        });
                        $("#cantReg").html("Nro registros: " + objJson.cantReg);
                    }
                });
            }

            function llenarDocumento(codArt)
            {
                var objAjax = $.ajax({
                    type:"post",
                    url:"./jsonDocumentoHelper.php",
                    data:{
                        codArt:codArt
                    },
                    success: function(respuestaDelServer){
                            
                            alert(respuestaDelServer);
                            objJson = JSON.parse(respuestaDelServer);                            
                            $("#ventanaModalRespuesta").attr("class", "ventanaModalRespuestaPrendido");
                            $("#divModalRespuesta").empty();
                            $("#divModalRespuesta").html("<iframe width='100%' height='600px' src='data:application/pdf;base64,"+objJson.documentoPdf+"'></iframe>");   
                            
                    }
                });
            }

            function llenarMarcasModi(){
                var objAjax = $.ajax({
                    type:"post",
                    url:"./jsonMarcasHelper.php",
                    data:{

                    },
                    success: function(respuestaDelServer){                            
                            $("#articulos_marca_modi").empty();                            
                            objJson = JSON.parse(respuestaDelServer);
                            objJson.marcas.forEach(function(value) {

                                var objOption = document.createElement("option");                            
                                objOption.innerHTML = value.marca;

                                document.getElementById("articulos_marca_modi").appendChild(objOption);
                            });
                    }
                });
            }

            function llenarDatosArticulo(codArt){

                var objAjax = $.ajax({
                    type:"post",
                    url:"./jsonArticuloHelper.php",
                    data:{
                        codArt:codArt
                    },
                    success: function(respuestaDelServer){
                            
                            objJson = JSON.parse(respuestaDelServer);                            
                            objJson.articulos.forEach(function(value) {

                                $("#codArtModi").val(value.codArt);
                                $("#descripModi").val(value.descrip);
                                $("#fechaIngresoModi").val(value.fechaIngreso);
                                $("#stockModi").val(value.stock);
                                $("#precioModi").val(value.precio); 
                                
                            });
                    }
                });
            }
        
            function modi(){

                var form = document.getElementById("formArticulosModi");
                form.addEventListener('submit', callbackFunction);
                
                function callbackFunction(event){
                    event.preventDefault();
                    data = new FormData(event.target);
                    var objAjax = $.ajax({
                        type:'post',
                        method:'post',
                        enctype:'multipart/form-data',
                        url:"./modi.php",
                        processData:false,
                        contentType:false,
                        cache:false,
                        data:data,
                        success: function(respuestaDelServer){
                            $("#formArticulosModi").reset();
                            $("#ventanaModalRespuesta").attr("class", "ventanaModalRespuestaPrendido");
                            $("#pRespuesta").empty();
                            $("#pRespuesta").html(respuestaDelServer);                            
                        }
                    });
                }
                                
            }

            function bajaArticulo(codArt){                
                var objAjax = $.ajax({
                    type:'post',                    
                    url:"./baja.php",                    
                    data:{
                        codArt:codArt
                    },
                    success: function(respuestaDelServer){

                        $("#ventanaModalRespuesta").attr("class", "ventanaModalRespuestaPrendido");
                        $("#pRespuesta").empty();
                        $("#pRespuesta").html(respuestaDelServer);                            
                    }
                });    
            }

            function todoListoParaModi(){
                if(document.getElementById("formArticulosModi").checkValidity()){
                    $("#btEnvioFormModi").attr("disabled", false);
                }  
                else{
                    $("#btEnvioFormModi").attr("disabled", true);
                }
            }

            function todoListoParaAlta(){
                if(document.getElementById("formArticulosAlta").checkValidity()){
                    $("#btEnvioFormAlta").attr("disabled", false);
                }  
                else{
                    $("#btEnvioFormAlta").attr("disabled", true);
                }
            }

        </script>

    </head>
    <body>
        
        <header class="headerPrincipal">
            <div class="divHeader">
                <h1> Tabla Autopartes </h1>

                <input name="orden" id="orden" type="text" value="id" readonly>

                <button id="1" name="btnCargar"> Cargar datos </button>

                <button id="2" name="btnVaciar"> Vaciar datos </button>

                <button id="3" name="btnLimpiarFiltros"> Limpiar filtros </button>

                <button id="4" name="btnAlta"> Alta registro </button>


            </div>
            <div class="divCorto" ></div>
        </header>


        <div id="divModal" class="ventanaModalApagado">

            <header>
                <div class="divHeaderModal">
                    <h1> Formulario ALTA - Autopartes </h1>

                    <button id="5" class="btnCerrar"> Cerrar </button>

                </div>
            </header>
      
            <form class="modal" id="formArticulosAlta" enctype="multipart/form-data" >
                <div class="divMainIzq">
                    
                    <label class="modal"> Codigo </label>
                    <input class="modal" id="codArtAlta" name="codArt" type="text" required>
    
                    <label class="modal"> Descripcion </label>
                    <input class="modal" id="descripAlta" name="descrip" type="text" required>

                    <label class="modal"> Marca </label>
                    <select class="modal" id="articulos_marca_alta" name="marca">
    
                    </select>

                    <label class="modal"> Archivo Pdf </label>
                    <input class="modal" id="pdfAlta" name="documentoPdf" type="file">
                </div>
    
                <div class="divMainDer">
    
                    <label class="modal"> Fecha Ingreso </label>
                    <input class="modal" id="fechaIngresoAlta" type="date" name="fechaIngreso" required>

                    <label class="modal"> Stock </label>
                    <input class="modal" id="stockAlta" name="stock" type="number" min="1" required>

                    <label class="modal"> Precio </label>
                    <input class="modal" id="precioAlta" name="precio" type="number" min="1" required>
    
                    <button id="btEnvioFormAlta" > Enviar Alta </button>
    
                </div>

                

            </form>      
            
            
                 
            <footer class="divFooterModal">
                <div>
                    <h2> Pie del formulario </h2>
                </div>            
            </footer>

        </div>

        <div id="ventanaModalForumularioModi" class="ventanaModalApagado">

            <header>
                <div class="divHeaderModal">
                    <h1> Formulario MODIFICACION - Autopartes </h1>

                    <button id="buttonCerrarModis" class="btnCerrar"> Cerrar </button>

                </div>
            </header>
      
            <form class="modal" id="formArticulosModi" enctype="multipart/form-data">
                <div class="divMainIzq">
                    
                    <label class="modal"> Codigo </label>
                    <input class="modal" id="codArtModi" name="codArt" type="text" required>
    
                    <label class="modal"> Descripcion </label>
                    <input class="modal" id="descripModi" name="descrip" type="text" required>

                    <label class="modal"> Marca </label>
                    <select class="modal" id="articulos_marca_modi" name="marca">
    
                    </select>

                    <label class="modal"> Archivo Pdf </label>
                    <input class="modal" id="pdfAlta" name="documentoPdf" type="file">
                </div>
    
                <div class="divMainDer">
    
                    <label class="modal"> Fecha Ingreso </label>
                    <input class="modal" id="fechaIngresoModi" type="date" name="fechaIngreso" required>

                    <label class="modal"> Stock </label>
                    <input class="modal" id="stockModi" name="stock" type="number" min="1" required>

                    <label class="modal"> Precio </label>
                    <input class="modal" id="precioModi" name="precio" type="number" min="1" required>
    
                    <button id="btEnvioFormModi" > Enviar Modificacion </button>
    
                </div>

                

            </form>      
            
            
                 
            <footer class="divFooterModal">
                <div>
                    <h2> Pie del formulario </h2>
                </div>            
            </footer>

        </div>

        <div id="ventanaModalRespuesta" class="ventanaModalApagado">
            <header>
                <div class="divHeaderModal">
                    <h1> Formulario ALTA - Autopartes </h1>

                    <button id="btCerrarVentanaModalRespuesta" class="btnCerrar"> Cerrar </button>

                </div>
            </header>
            <div id="divModalRespuesta">
                <p id="pRespuesta"></p>
            </div>

        </div>
            
        
        <div class="divCentral">
            <table >
                <thead>
                    <tr >
                        <th id="th_articulos_id" campo-dato="Id"> Id 
                            
                        </th>
                        <th id="th_articulos_codArt" campo-dato="Codigo"> Codigo 
                            
                        </th>
                        <th id="th_articulos_descrip" campo-dato="Descripcion"> Descripcion 
                            
                        </th>
                        <th id="th_articulos_marca" campo-dato="Marca"> Marca 
                            
                        </th>
                        <th id="th_articulos_fechaIngreso" campo-dato="FechaIngreso"> Fecha Ingreso 
                            
                        </th>
                        <th id="th_articulos_stock" campo-dato="Stock"> Stock 
                            
                        </th>
                        <th id="th_articulos_precio" campo-dato="Precio"> Precio 
                            
                        </th>
                        <th  campo-dato="Pdfs"> Pdfs </th>
                        <th  campo-dato="Modis"> Modis </th>
                        <th  campo-dato="Bajas"> Bajas </th>
                    </tr>          
                    <tr>
                        <th  campo-dato="Id">  
                            <input id="f_articulos_id"  name="f_articulos_id" type="text">
                        </th>
                        <th  campo-dato="Codigo">  
                            <input id="f_articulos_codArt" name="f_articulos_codArt" type="text">
                        </th>
                        <th  campo-dato="Descripcion">  
                            <input id="f_articulos_descrip" name="f_articulos_descrip" type="text">
                        </th>
                        <th  campo-dato="Marca">  
                            <select id="f_articulos_marca" name="f_articulos_marca" > </select>
                        </th>
                        <th  campo-dato="FechaIngreso">  
                            <input id="f_articulos_fechaIngreso" name="f_articulos_fechaIngreso" type="date">
                        </th>
                        <th  campo-dato="Stock">  
                            <input id="f_articulos_stock" name="f_articulos_stock" type="text">
                        </th>
                        <th  campo-dato="Precio">  
                            <input id="f_articulos_precio" name="f_articulos_precio" type="text">
                        </th>
                    </tr>          
                </thead>

                <tbody id="tbDatos">

                </tbody>
                
            </table>
        </div>

                     
                         
        

        <footer class="footerPrincipal">
            <div>

                <p id="cantReg"></p>
                
                <h2> Pie de la tabla</h2>
            </div>            
        </footer>

    </body>
</html>