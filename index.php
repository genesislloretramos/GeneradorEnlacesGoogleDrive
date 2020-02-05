<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --
///// TABLA DE CONTENIDOS DE ESTE DOCUMENTO /////
// VARIABLES DEL CONTENIDO
// HEADER
// CONTENT
//// 1. MENSAJE INFORMATIVO
//// 2. GUIA
//// 3. CUERPO
////// 3.1 FORMULARIO
//// 4. CUADRO DE IMPRESION
// FOOTER
////////////////////////////////////////////////
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --
-- CREDITOS -- Génesis Lloret Ramos -- -- -- --
-- EMAIL -- genesislloret@gmail.com -- -- -- --
-- TEL -- +34 637 61 37 49 -- -- -- -- -- -- --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

<!-- VARIABLES DEL CONTENIDO -->
<?php include('./includes/var/index.php')?>

<!-- HEADER -->
<?php include('./includes/header.php')?>

<!-- CONTENT -->
<!-- 1. MENSAJE INFORMATIVO -->
<div class="alertFixed alert alert-primary" role="alert">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xm">
                Este projecto esta diseñado para demostrar como estructuro mi codigo implementando PHP + BOOTSTRAP + JavaScript
            </div>
            <div class="col-sm">
            <strong class="textoderecha">Creditos: <a target="_blank" href="https://genesislloretramos.github.io/portafolio/" class="alert-link"><b>Génesis Lloret Ramos</b></a></strong>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<!-- 2. GUIA -->
<?php include('./includes/guia.php')?>
<!-- 3. CUERPO -->
    <!-- 3.1 FORMULARIO -->
    <div class="container-fluid jumbotron">
        <h2 class="">FORMULARIO</h2>
        <form>
            <div class="form-group">
                <label for="apikey"><strong>Google API KEY</strong></label>
                <input class="form-control" id="apiKey" name="apiKey" placeholder="Tu API de Google">
            </div>
            <div class="form-group">
                <label for="urlDoc"><strong>Archivo a descargar</strong></label>
                <input class="form-control" id="urlDoc" name="urlDoc" placeholder="https://drive.google.com/open?id=XXXXXXXXXXXXXXXXXXXXXXXXXXXX">
            </div>
            <a href="#" type="submit" class="btn btn-primary" onClick="script:generadorCodigo()">GENERAR CODIGO</a>.
        </form>
    </div>
<!-- 4. CUADRO DE IMPRESION -->
<?php include('./includes/impresion.php')?>
<!-- FOOTER -->
<?php include('./includes/footer.php')?>