<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome/css/brands.css">
    <link rel="stylesheet" href="fontawesome/css/solid.css">
</head>
<body>
    
    <!-- Navbar -->
    <?php include 'pages/navbar.php'; ?>
    <!-- End of Navbar -->

    <!-- Content -->
    <?php 
    if (isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'beranda':
                include 'pages/dashboard.php';
                break;

            case 'portofolio':
                include 'pages/portofolio.php';
                break;

            case 'myprofile':
                include 'pages/myprofile.php';
                break;

            case 'hireme':
                include 'pages/hireme.php';
                break;
            
            default:
                include 'pages/dashboard.php';
                break;
        }
    }else{
        include 'pages/dashboard.php';
    }
    ?>
    <!-- End of Content -->
    
    <footer>
        <p>&copy; 2024 Website Muhammad Hafiz</p>
    </footer>

    <script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>