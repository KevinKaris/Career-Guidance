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
    padding: 10%;
    background-image: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url('../images/pic1.jpg');
    background-blend-mode: darken;
    background-attachment: fixed;
    background-size: cover;
    overflow-x: hidden;
    overflow-y: scroll;
    color: white;
}
#end{
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
}
table{
    background-color: rgba(0, 0, 0, .7);
    border-radius: 5px;
    width: 100%;
}
tr{
    padding: 1vw!important;
}
tr:nth-child(even){
    background: rgba(0, 0, 0, .5);
}
</style>
<body>
    <div class="top col-12" align="center">
        <h2>Welcome to Career Guidance</h2>
    </div>
    <?php
if (isset($_SESSION['email'])) {?>
    <div class="courses">
        <?php include '../connection.php' ?>
        <span>All courses</span>
        <table>
            <tr>
                <th><b>Course name</b></th>
                <th><b>University</b></th>
                <th><b>Minimum Grade</b></th>
            </tr>
            <?php
            $SELECT = "SELECT * FROM courses ORDER BY course_name";
            $run = mysqli_query($connection, $SELECT);
            $num_of_rows = mysqli_num_rows($run);

            if ($num_of_rows == 0) {
                echo 'No courses...';
            }
            else {
                while ($details = mysqli_fetch_assoc($run)) {
            ?>
            <tr>
                    <td><?php echo $details['course_name']; ?></td>
                    <td><?php echo $details['university']; ?></td>
                    <td id="end"><?php echo $details['minimum_grade']; ?>
                <form action="edit.php" method="post">
                <input type="hidden" name="identity" value="<?php echo $details['course_id'] ?>">
                <button type="submit" class="btn btn-info btn-sm mx-2 my-2">Edit</button>
                </form>
                <form action="delete.php" method="post">
                <input type="hidden" name="identity" value="<?php echo $details['course_id']; ?>">
                <button type="submit" class="btn btn-danger btn-sm mx-3 my-2" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                </td>
            </tr>
            <?php }}?>
        </table>
    </div>
    <?php
}
else {
    echo '<div class="about col-12" align="center">
        <h5>Are you a form four graduate intending to pursue a course in a university or a college here in Kenya? In Career Guidance, students can get real online guide on their future career and subject choices and combination that will help them realize their dreams. All you need is to insert the your KCSE grades, and the university you prefer and all courses that fit for you are displayed.</h5><br>
        <h6>As a guest user, you can only search individual courses, therefore click <b>Get Started</b> button above to login/signup and enjoy search the filtration</h6>
    </div>';
}
?>
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
        <form action="admin.php" method="post" class="form-group">
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
            <input type="password" name="password" class="form-control password1" placeholder="Enter password..." required>
            <div class="alert alert-danger mt-2 message">Password mismatch!!</div>
            <input type="password" name="re-password" class="form-control password2" placeholder="Confirm password..." required>
            <a href="javascript:void();" id="login">Already have an account? Log in</a>
            <button type="submit" name="login-button" class="form-control btn btn-primary">Sign up</button>
        </form>
        <button class="btn btn-dark signup-close" id="close">Close</button>
    </div>
    <script>
        $(window).ready(function (){
	$("#general-search").keyup(function(){
		var txt = $(this).val();
		if(txt != ''){
			$.ajax({
				url: "../search-suggestion.php",
				method: 'POST',
				data: {txt:txt},
				success: function(data){
                    $('#search-suggestion').html(data);
				}
			});
		}else{
			$('#search-suggestion').html('');
		}
		$(document).on('click',"#search-suggestion a", function(){
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