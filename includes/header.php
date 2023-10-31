<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career guidance</title>
    <link href="../libralies/css/bootstrap.min.css" rel="stylesheet">
    <script src="../libralies/js/bootstrap.bundle.min.js"></script>
    <script src="../libralies/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../main.css">
    <header class="navbar fixed-top">
        <nav class="col-md-12">
            <h3><a href="/career/">Career Guidance</a></h3>
            <button class="btn"><a href="/career/"><i class="fa-solid fa-home"></i></a></button>
            <div id="search">
                <form action="../results2/index.php" method="get" class="form-group">
                    <input type="text" placeholder="Search a course..." name ="general-search" id="general-search" required autocomplete="off">
                    <div id="search-suggestion"></div>
                    <button type="submit" id="Search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <?php
if (isset($_SESSION['email']) && time() - $_SESSION['login-time'] <= 21600) {
    echo $_SESSION['email'];
    echo '<a href="../log-out.php" class="btn btn-primary">Log out</a>';
}
else {
    session_destroy();
    session_unset();
    echo '<button class="btn btn-primary" id="get-started">Get started</button>';
}
?>
        </nav>
    </header>
</head>