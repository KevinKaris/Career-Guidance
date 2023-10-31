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
    td button{
        margin-left: 8px;
    }
    tr:nth-child(even){
        background: rgb(241, 241, 241);
    }
</style>
<body>
    <table>
        <tr>
            <th>Course name</th>
            <th>University</th>
            <th>Minimum Grade</th>
        </tr>
        <?php
$search = $_GET['general-search'];

include '../connection.php';

$SELECT = "SELECT DISTINCT * FROM courses where course_name LIKE '%$search%'";
$run = mysqli_query($connection, $SELECT);
$num_of_rows = mysqli_num_rows($run);

if ($num_of_rows == 0) {
    $message = 'No such course...';
}
else {
    while ($details = mysqli_fetch_assoc($run)) {
?>
        <tr>
            <form action="../results/details.php" method="post">
                <input type="hidden" name="identity" value="<?php echo $details['course_id']; ?>">
                <td><?php echo $details['course_name']; ?></td>
                <td><?php echo $details['university']; ?></td>
                <td><?php echo $details['minimum_grade']; ?><button type="submit" class="btn btn-info">See more</button></td>
            </form>
        </tr>
        <?php
    }
}
if (isset($message)) {
    echo "<h3>$message</h3>";
}?>
    </table>
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
    <script src="../main.js"></script>
</body>
</html>