<!DOCTYPE html>
<html lang="en">
<?php include '../includes/header.php'; ?>
<style>
    body {
        color: black;
        background: white;
        overflow-y: scroll;
    }

    #search form input,
    #search form button {
        color: black;
    }

    nav a {
        color: black;
    }

    nav a:hover {
        color: black;
    }

    nav #search {
        background: white;
    }

    nav #search {
        border: 1px solid gray;
    }

    header {
        box-shadow: 0 2px 6px rgb(165, 165, 165);
        background: white;
    }

    body table {
        width: 100%;
        display: block;
        padding-left: 10%;
    }

    body table tr {
        padding: 7px;
        width: 100%;
    }

    td,
    th {
        padding: 5px;
    }

    td button {
        margin-left: 8px;
    }

    tr:nth-child(even) {
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
include '../connection.php';

$overall = $_GET['overall_grade'];
$language = $_GET['language_grade'];
$physics = $_GET['physics_grade'];
$bio_chem = $_GET['bio/chem_grade'];
$maths = $_GET['maths_grade'];
$university = $_GET['university'];

// $grades = array('A'=>'1', 'A-'=>'2', 'B+'=>'3', 'B'=>'4', 'B-'=>'5', 'C+'=>'6', 'C'=>'7', 'C-'=>'8', 'D+'=>'9', 'D'=>'10', 'D-'=>'11');
// $language = $grades[$language];
// echo $language;


if (empty($university)) {
    echo '<script>alert("Select a university!")</script>';
    echo '<script>window.location.assign("../index.php");</script>';
}
else {
    if ($university == 'all') {
        switch ($overall) {
            case ('A'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade LIKE 'A%' OR minimum_grade LIKE 'B%' OR minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('A-'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade LIKE 'A-' OR minimum_grade LIKE 'B%' OR minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('B+'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade LIKE 'B%' OR minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('B'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade LIKE 'B' OR minimum_grade LIKE 'B-' OR minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('B-'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade LIKE 'B-' OR minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('C+'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('C'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade LIKE 'C' OR minimum_grade LIKE 'C-' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('C-'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade LIKE 'C-' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('D+'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('D'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade like 'D' OR minimum_grade like 'D-' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('D-'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade like 'D-' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            default:
                // code...
                break;
        }
        // $SELECT = "SELECT * FROM courses WHERE (minimum_grade LIKE '$overall%' OR minimum_grade = '') AND (language_grade_required = '$language' OR language_grade_required = '') AND (bio_chem_grade_required = '$bio_chem' OR bio_chem_grade_required = '') AND (physics_grade_required = '$physics' OR physics_grade_required = '') AND (mathematics_grade_required = '$maths' OR mathematics_grade_required = '') ORDER BY university";

        if(isset($SELECT)){
        $run1 = mysqli_query($connection, $SELECT);
        $num_of_rows1 = mysqli_num_rows($run1);

        if ($num_of_rows1 == 0) {
            $result_message1 = 'No course matched your filtration. Adjust and search again...';
        }
        else {
            while ($details1 = mysqli_fetch_assoc($run1)) {
?>
        <tr>
            <form action="details.php" method="post">
                <input type="hidden" name="identity" value="<?php echo $details1['course_id']; ?>">
                <td>
                    <?php echo $details1['course_name']; ?>
                </td>
                <td>
                    <?php echo $details1['university']; ?>
                </td>
                <td>
                    <?php echo $details1['minimum_grade']; ?><button type="submit" class="btn btn-info">See
                        more</button>
                </td>
            </form>
        </tr>
        <?php
            }
        }
        if (isset($result_message1)) {
            echo "<h3>$result_message1</h3>";
        }
    }
    }
    else {

        switch ($overall) {
            case ('A'):
                $SELECT = "SELECT * FROM courses WHERE university = '$university' AND (minimum_grade LIKE 'A%' OR minimum_grade LIKE 'B%' OR minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('A-'):
                $SELECT = "SELECT * FROM courses WHERE university = '$university' AND (minimum_grade LIKE 'A-' OR minimum_grade LIKE 'B%' OR minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('B+'):
                $SELECT = "SELECT * FROM courses WHERE university = '$university' AND (minimum_grade LIKE 'B%' OR minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('B'):
                $SELECT = "SELECT * FROM courses WHERE university = '$university' AND (minimum_grade LIKE 'B' OR minimum_grade LIKE 'B-' OR minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('B-'):
                $SELECT = "SELECT * FROM courses WHERE university = '$university' AND (minimum_grade LIKE 'B-' OR minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('C+'):
                $SELECT = "SELECT * FROM courses WHERE university = '$university' AND (minimum_grade LIKE 'C%' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('C'):
                $SELECT = "SELECT * FROM courses WHERE university = '$university' AND (minimum_grade LIKE 'C' OR minimum_grade LIKE 'C-' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('C-'):
                $SELECT = "SELECT * FROM courses WHERE university = '$university' AND (minimum_grade LIKE 'C-' OR minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('D+'):
                $SELECT = "SELECT * FROM courses WHERE university = '$university' AND (minimum_grade like 'D%' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('D'):
                $SELECT = "SELECT * FROM courses WHERE university = '$university' AND (minimum_grade like 'D' OR minimum_grade like 'D-' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            case ('D-'):
                $SELECT = "SELECT * FROM courses WHERE (minimum_grade like 'D-' OR minimum_grade Like '') AND (language_grade_required LIKE '$language%' OR language_grade_required = '') AND (bio_chem_grade_required LIKE '$bio_chem%' OR bio_chem_grade_required = '') AND (physics_grade_required LIKE '$physics%' OR physics_grade_required = '') AND (mathematics_grade_required LIKE '$maths%' OR mathematics_grade_required = '') ORDER BY university";
                break;

            default:
                // code...
                break;
        }
        // $SELECT = "SELECT * FROM courses WHERE university = '$university' AND (minimum_grade = '$overall' OR minimum_grade = '') AND (language_grade_required = '$language' OR language_grade_required = '') AND (bio_chem_grade_required = '$bio_chem' OR bio_chem_grade_required = '') AND (physics_grade_required = '$physics' OR physics_grade_required = '') AND (mathematics_grade_required = '$maths' OR mathematics_grade_required = '') ORDER BY university";

        $run2 = mysqli_query($connection, $SELECT);
        $num_of_rows2 = mysqli_num_rows($run2);

        if ($num_of_rows2 == 0) {
            $result_message2 = 'No course matched your filtration. Adjust and search again...';
        }
        else {
            while ($details1 = mysqli_fetch_assoc($run2)) {
?>
        <tr>
            <form action="details.php" method="post">
                <input type="hidden" name="identity" value="<?php echo $details1['course_id']; ?>">
                <td>
                    <?php echo $details1['course_name']; ?>
                </td>
                <td>
                    <?php echo $details1['university']; ?>
                </td>
                <td>
                    <?php echo $details1['minimum_grade']; ?><button type="submit" class="btn btn-info">See
                        more</button>
                </td>
            </form>
        </tr>
        <?php
            }
        }
        if (isset($result_message2)) {
            echo "<h3>$result_message2</h3>";
        }
    }
}?>
    </table>
    <div class="login modal-body">
        <form action="../login.php" method="post" class="form-group">
            <div class="head">Login</div>
            <input type="text" name="email" class="form-control" placeholder="Enter your email/index number..."
                required>
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
            <input type="text" name="email" class="form-control" placeholder="Enter a valid email//index number..."
                required>
            <input type="password" name="password" class="form-control" placeholder="Enter password..." required>
            <input type="password" name="re-password" class="form-control" placeholder="Confirm password..." required>
            <a href="javascript:void();">Already have an account? Log in</a>
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
                        url: "../search-suggestion.php",
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
    <script src="../main.js"></script>
</body>

</html>