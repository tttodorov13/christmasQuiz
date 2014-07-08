<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
if (!empty($_SESSION['logged_in'])) {
    ?>



    <html>
        <head>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
            <script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" type="text/javascript"></script>
            <script src="script.js"></script>
            <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
            <link rel="stylesheet" type="text/css" href="index.css">
            <script>
                $(document).ready(function() {
                    $("#accordian h3").next().hide();

                    $("#accordian h3").click(function() {
                        $("#accordian ul").slideUp();
                        if (!$(this).next().is(":visible"))
                        {
                            $(this).next().slideDown();
                        }
                    })

                })
            </script>
        </head>
        <body>
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                        </button>
                        <a class="navbar-brand" href="#">FMI CHRISTMAS QUIZ</a>
                    </div>
                    <nav>
                        <ul class="nav navbar-nav">
                            <li><a href="#">Add question</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li><a href="#">Edit question</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li><a href="#">Delete question</a></li>
                        </ul>
                    </nav>
                    <div class="navbar-collapse collapse">
                        <form class="navbar-form navbar-right" role="form" method="post" action="logout-script.php">     	
                            <button type="submit" class="btn btn-success">Log out</button>
                        </form>

                        <p class="greeting">Hello <?php echo $_SESSION['username'] ?></p>
                    </div><!--/.navbar-collapse -->
                </div>
            </div>
            <div class="jumbotron">
                <div class="container">

                </div>
            </div>
            <div class="col-md-4 middle-row">
                <a href="add-question.php" class="btn btn-default" style="float:right; margin-top:20px">Add question</a>
                <div class="question">
                    <h2>These are all of our questions</h2>
    <?php
    $link = mysqli_connect("localhost", "christmas_quiz", "christmas_quiz", "christmas_quiz");
    if (mysqli_connect_errno($link)) {
        echo "Failed to connect to My DataBase: " . mysqli_connect_error();
    }

    $sql = "SELECT question, ans1, ans2, ans3, ans4, correct, id FROM questions";
    $result = mysqli_query($link, $sql);

    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        echo "<div id='accordian'><h3 class='question-title'><span style='margin-right:5px'>" . $row["id"] . ". </span>" . $row["question"] . "</h3>" .
        "<ul><li>" . $row["ans1"] . "</li>" .
        "<li>" . $row["ans2"] . "</li>" .
        "<li>" . $row["ans3"] . "</li>" .
        "<li>" . $row["ans4"] . "</li></ul>
                        <a href='edit-question.php?id=" . $row['id'] . "&question=" . $row['question'] . "&ans1=" . $row['ans1'] . "&ans2=" . $row['ans2'] .
        "&ans3=" . $row['ans3'] . "&ans4=" . $row['ans4'] . " class='edit-q' style='float:right;'>Edit</a>
                        <a href='delete-question.php?id=" . $row['id'] . "&question=" . $row['question'] . "&ans1=" . $row['ans1'] . "&ans2=" . $row['ans2'] .
        "&ans3=" . $row['ans3'] . "&ans4=" . $row['ans4'] . " " . " style='float:right; margin-right:5px' class='del-q'>Delete</a>
                       </div>";
    }
    ?>

                </div>




            </div>
        </body>
    </html>

    <?php
} else {
    echo"not logged in";
    header("Location:index.php?message=You are not logged in!");
}
?>