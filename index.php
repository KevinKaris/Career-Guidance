<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career guidance</title>
    <link href="libralies/css/bootstrap.min.css" rel="stylesheet">
    <script src="libralies/js/bootstrap.bundle.min.js"></script>
    <script src="libralies/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="main.css">
    <header class="navbar fixed-top">
        <nav class="col-md-12">
            <h3><a href="/career/">Career Guidance</a></h3>
            <button class="btn"><a href="/career/"><i class="fa-solid fa-home"></i></a></button>
            <div id="search">
                <form action="results2/" method="get" class="form-group">
                    <input type="text" placeholder="Search a course..." name="general-search" id="general-search"
                        required autocomplete="off">
                    <div id="search-suggestion"></div>
                    <button type="submit" id="Search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <?php
if (isset($_SESSION['email']) && time() - $_SESSION['login-time'] <= 21600) {
    echo $_SESSION['email'];
    echo '<a href="log-out.php" class="btn btn-primary">Log out</a>';
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

<body>
    <div class="top col-12" align="center">
        <h2>Welcome to Career Guidance</h2>
    </div>
    <?php
if (isset($_SESSION['email'])) {
    echo '<div class="filter" style="display: block;">
        <form action="results/" method="get" class="form-group">
            <input type="text" id="overall" name="overall_grade" class="form-control" placeholder="Enter your overall grade..." required>
            <input type="text" id="language" name="language_grade" class="form-control" placeholder="Enter English/Kiswahili grade..." required>
            <input type="text" id="physics" name="physics_grade" class="form-control" placeholder="Enter physics grade..." required>
            <input type="text" id="biochem" name="bio/chem_grade" class="form-control" placeholder="Enter biology/chemistry grade..." required>
            <input type="text" id="maths" name="maths_grade" class="form-control" placeholder="Enter mathematics grade..." required>
            <select name="university" id="" class="form-control">
                <option value="">--select preferred university--</option>
                <option value="all">All</option>
                <option value="The Cooperative University of Kenya">The Cooperative University of Kenya</option>
                <option value="University of Nairobi">University of Nairobi</option>
                <option value="Kenyatta University">Kenyatta University</option>
                <option value="Chuka University">Chuka University</option>
                <option value="Technical University of Kenya">Technical University of Kenya</option>
                <option value="Technical University of Mombasa">Technical University of Mombasa</option>
                <option value="Dedan Kimathi University of Technology">Dedan Kimathi University of Technology</option>
                <option value="Kirinyaga University">Kirinyaga University</option>
                <option value="Jomo Kenyatta University of Agriculture and Technology">Jomo Kenyatta University of Agriculture and Technology</option>
                <option value="Jaramogi Oginga Odinga University of Science and Technology">Jaramogi Oginga Odinga University of Science and Technology</option>
                <option value="Mount Kenya University">Mount Kenya University</option>
                <option value="Moi University">Moi University</option>
                <option value="Kabarak University">Kabarak University</option>
                <option value="Kenya Methodist University">Kenya Methodist University</option>
                <option value="Maseno University">Maseno University</option>
                <option value="Egerton University">Egerton University</option>
                <option value="ST Pauls University">ST Pauls University</option>
                <option value="Pwani University">Pwani University</option>
                <option value="Muranga University of Technology">Muranga University of Technology</option>
                <option value="South Eastern Kenya University">South Eastern Kenya University</option>
            </select>
            <button class="btn btn-primary" type="submit" name="filter-submit">Submit</button>
        </form>
    </div>';
}
else {
    echo '<div class="about col-12" align="center">
        <h5>Are you a form four graduate intending to pursue a course in a university or a college here in Kenya? In Career Guidance, students can get real online guide on their future career and subject choices and combination that will help them realize their dreams. All you need is to insert the your KCSE grades, and the university you prefer and all courses that fit for you are displayed.</h5><br>
        <h6>As a guest user, you can only search individual courses, therefore click <b>Get Started</b> button above to login/signup and enjoy search the filtration</h6>
    </div>';
}
?>
    <div class="login modal-body">
        <form action="login.php" method="post" class="form-group">
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
        <form action="admin/admin.php" method="post" class="form-group">
            <div class="head">Admin Login</div>
            <input type="email" name="email" class="form-control" placeholder="Enter your email..." required>
            <input type="password" name="password" class="form-control" placeholder="Enter your password..." required>
            <button type="submit" name="login-button" class="form-control btn btn-primary">Log in</button>
        </form>
        <button class="btn btn-dark admin-close" id="close">Close</button>
    </div>

    <div class="signup modal-body">
        <form action="register.php" method="post" class="form-group">
            <div class="head">Sign up</div>
            <input type="email" name="email" class="form-control" placeholder="Enter a valid email..." required>
            <input type="password" name="password" class="form-control password1" placeholder="Enter password..."
                required>
            <div class="alert alert-danger mt-2 message">Password mismatch!!</div>
            <input type="password" name="re-password" class="form-control password2" placeholder="Confirm password..."
                required>
            <a href="javascript:void();" id="login">Already have an account? Log in</a>
            <button type="submit" name="login-button" class="form-control btn btn-primary">Sign up</button>
        </form>
        <button class="btn btn-dark signup-close" id="close">Close</button>
    </div>
    <script>
        $(window).ready(function () {
            $("#general-search").keyup(function () {
                var txt = $(this).val();
                if (txt != '') {
                    $.ajax({
                        url: "search-suggestion.php",
                        method: 'POST',
                        data: { txt: txt },
                        success: function (data) {
                            $('#search-suggestion').html(data);
                        }
                    });
                } else {
                    $('#search-suggestion').html('');
                }
                $(document).on('click', "#search-suggestion a", function () {
                    $('.general-search').val($(this).text());
                    $('#search-suggestion').html('');
                    $('#Search-button').click();
                });
            });
        });
    </script>
    <script src="main.js"></script>
</body>

</html>