<!DOCTYPE html>
<html lang="en">
<?php include '../includes/header.php'; ?>
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