<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
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
            <h3><a href="index.php">Career Guidance</a></h3>
            <div id="search">
                <form action="search.php" method="get" class="form-group">
                    <input type="text" placeholder="Search a course..." name ="general-search" id="general-search" required autocomplete="off">
                    <div id="search-suggestion"></div>
                    <button type="submit" id="Search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <?php
if (isset($_SESSION['email']) && time() - $_SESSION['login-time'] <= 21600) {
    echo $_SESSION['email'];
    echo '<a href="add-course.php" class="btn btn-primary">Add Course</a>';
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
<style>
    body{
        color: black;
        background: white;
        overflow-y: scroll;
    }
    #search form input, #search form button{
        color: black;
    }
    nav a{
        color: black;
    }
    nav a:hover{
        color: black;
    }
    nav #search{
        background: white;
    }
    nav #search{
        border: 1px solid gray;
    }
    header{
        box-shadow: 0 2px 6px rgb(165, 165, 165);
        background: white;
    }
    body table{
        width: 100%;
        display: block;
        padding-left: 10%;
    }
    body table tr{
        padding: 7px;
        width: 100%;
    }
    td, th{
        padding: 5px;
    }
    tr:nth-child(even){
        background: rgb(241, 241, 241);
    }
    .details{
        width: 100%;
    }
    .grades p{
        display: inline-block;
        width: 100%;
    }
</style>
<body>
    <div class="details col-md-12 container card bg-light">
        <?php
include '../connection.php';

$identity = $_POST['identity'];

$SELECT = "SELECT * FROM courses WHERE course_id = '$identity' ";

$run = mysqli_query($connection, $SELECT);
$details = mysqli_fetch_assoc($run);
?>
        <div class="course_name col-md-12 mb-5">
            <h3><?php echo $details['course_name']; ?></h3>
        </div>
        <div class="university col-md-12 mb-5">
        <h4><?php echo $details['university']; ?></h4>
        </div>
        <div class="grades col-md-12 mb-5">
            <p><b>Overall grade:</b> <?php echo $details['minimum_grade']; ?></p>
            <p><b>Eng/Kisw grade:</b> <?php echo $details['language_grade_required']; ?></p>
            <p><b>Bio/Chem grade:</b> <?php echo $details['bio_chem_grade_required']; ?></p>
            <p><b>Physics grade:</b> <?php echo $details['physics_grade_required']; ?></p>
            <p><b>Maths grade:</b> <?php echo $details['mathematics_grade_required']; ?></p>
        </div>
        <div class="description col-md-12 mb-5">
        <p><b>Course Description:</b> <?php echo $details['description']; ?></p>
        </div>
    </div>
    <div class="login modal-body">
        <form action="../login.php" method="post" class="form-group">
            <div class="head">Login</div>
            <input type="email" name="email" class="form-control" placeholder="Enter your email..." required>
            <input type="password" name="password" class="form-control" placeholder="Enter your password..." required>
            <a href="javascript:void();" class="btn btn-primary mx-2" id="admin">Login as an Admin</a>
            <a href="javascript:void();" id="signup">Have no account? Sign up</a>
            <button type="submit" name="login-button" class="form-control btn btn-primary">Log in</button>
        </form>
        <button class="btn btn-dark login-close" id="close">Close</button>
    </div>

    <!--admin-->
    <div class="admin modal-body">
        <form action="../admin/admin.php" method="post" class="form-group">
            <div class="head">Admin Login</div>
            <input type="email" name="email" class="form-control" placeholder="Enter your email..." required>
            <input type="password" name="password" class="form-control" placeholder="Enter your password..." required>
            <button type="submit" name="login-button" class="form-control btn btn-primary">Log in</button>
        </form>
        <button class="btn btn-dark admin-close" id="close">Close</button>
    </div>

    <div class="signup modal-body">
        <form action="../register.php" method="post" class="form-group">
            <div class="head">Sign up</div>
            <input type="email" name="email" class="form-control" placeholder="Enter a valid email..." required>
            <input type="password" name="password" class="form-control" placeholder="Enter password..." required>
            <input type="password" name="re-password" class="form-control" placeholder="Confirm password..." required>
            <a href="javascript:void();">Already have an account? Log in</a>
            <button type="submit" name="login-button" class="form-control btn btn-primary">Sign up</button>
        </form>
        <button class="btn btn-dark signup-close" id="close">Close</button>
    </div>
    <script src="../main.js"></script>
</body>
</html>