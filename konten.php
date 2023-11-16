<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Admin Template</title>
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>

</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Awal Header-->
        <?php
        include "header.php";
        ?>
        <!--Akhir header-->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php
            include "sidebar.php";
            ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
            <?php
if (!isset($_GET['page'])){
    include "dashboard.php";
} elseif ($_GET['page'] == 'siswa'){
    include "siswa.php";
} else {
    echo "Maaf, halaman tidak ditemukan!";
}
?>
</main>
            <footer class="py-4 bg-light mt-auto">
                <?php
                include "footer.php";
                ?>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>