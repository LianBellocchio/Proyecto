<?php include("phpbdescuela/conexion2.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("templeates/head.php"); ?>
</head>

<body>
    <!-- header -->
    <?php include("templeates/header.php"); ?>

    <!-- main -->
    <div class="container" style="height: 1000px; margin-top: 70px">
        <div>
            <h1 class="text-center">Lista de ingresantes</h1>
        </div>
        <div class="d-flex justify-content-center " style="height: 700px;">
            <?php
            $sql = $conn->prepare("SELECT id, archivo FROM pdf WHERE id = 1");
            $sql->execute();
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            ?>
            <iframe src="./phpbdescuela/<?php echo $row['archivo'] ?>" width="1000" height="850"></iframe>;
        </div>
    </div>

    <!-- footer -->
    <?php include("templeates/footer.php"); ?>
</body>

</html>