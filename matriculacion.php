<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("templeates/head.php"); ?>
</head>

<body>

    <!-- header -->
    <?php include("templeates/header.php"); ?>

    <!-- main container-->
    <div class="container d-flex flex-column " style="height:750px">
        <div class="d-flex flex-column text-center m-5">
            <h1 class="display-6 pb-2">Matriculación</h1>
            <dl class="row">
                <dt class="col-sm-12 m-1 fs-5">Descargar e imprimir la planilla, una vez completa se debe adjuntar con legajo completo, Fotocopia de DNI,
                    Partida de Nacimiento, Constancía de alumno regular.</dt>
                <dd class="col-sm-12 m-1 fs-5">Presentar en mesa de entrada.</dd>
            </dl>
            <div class="mb-2">
                <button class="btn bg-primary mt-3">
                    <a href="planillas/planilla-inscripcion.pdf" download class="text-white" style="text-decoration: none;">Descargar planilla</a>
                </button>
            </div>
        </div>
        <div class="d-flex flex-column text-center  m-5">
            <h1 class="display-6 pb-2">Rematriculación</h1>
            <dl class="row">
                <dt class="col-sm-12 m-1 fs-5">Mismo procedimiento que matriculacion.</dt>
                <dd class="col-sm-12 m-1 fs-5">Presentar la documentacion en mesa de entrada.</dd>
            </dl>

        </div>
    </div>

    <!-- footer -->
    <?php include("templeates/footer.php"); ?>
</body>

</html>