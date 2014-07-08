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
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script>
                $(document).ready(function() {

                    $('[name=submit]').click(function() {

                        var radioButtons = [];
                        var queryString = "ajaxCheck.php?";
                        var index = 0;

                        for (i = 1; i <= 100; i++) {
                            if ($('input[name=radio' + i + ']:checked').val() != undefined) {
                                radioButtons[index] = "question" + i + "=" + $('input[name=radio' + i + ']:checked').val();
                            }
                            index++;
                        }

                        for (j = 0; j < radioButtons.length; j++) {
                            queryString += radioButtons[j] + "&";
                        }

                        window.location.href = "" + queryString;

                    }); //END next button.click
                }); //END document.ready
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

                    $sql = "SELECT question, ans1, ans2, ans3, ans4, correct, id FROM questions ORDER BY RAND() LIMIT 5";
                    $result = mysqli_query($link, $sql);
                    echo "  <form method='GET' action=\"ajaxCheck.php\">";

                    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                        echo "
                    <h3 class='question-title'>
                        <span style='margin-right:5px'>" . $row["id"] . ". </span>" . $row["question"] . "</h3>
                            <input class='radio-input' type='radio' name = 'radio" . $row['id'] . "' value=" . $row["ans1"] . " id='radio1_" . $row['id'] . "' required />" .
                        "<label for='radio1_" . $row['id'] . "' class='radio' id='answer1_" . $row['id'] . "' >" . $row["ans1"] . "</label>
                          
                            <input class='radio-input' type='radio' name = 'radio" . $row['id'] . "' value=" . $row["ans2"] . " id='radio2_" . $row['id'] . "' required />" .
                        "<label for='radio2_" . $row['id'] . "' class='radio' id='answer2_" . $row['id'] . "' >" . $row["ans2"] . "</label>
                           
                            <input class='radio-input' type='radio' name = 'radio" . $row['id'] . "' value=" . $row["ans3"] . " id='radio3_" . $row['id'] . "' required />" .
                        "<label for='radio3_" . $row['id'] . "' class='radio' id='answer3_" . $row['id'] . "' >" . $row["ans3"] . "</label>

                            <input class='radio-input' type='radio' name = 'radio" . $row['id'] . "' value=" . $row["ans4"] . " id='radio4_" . $row['id'] . "' required />" .
                        "<label for='radio4_" . $row['id'] . "' class='radio' id='answer4_" . $row['id'] . "' >" . $row["ans4"] . "</label>
                       ";
                    }
                    echo "    
                    <input type='hidden' name ='make-quiz'>
                <button type='submit' name='submit' value='submit' class='btn' style='float:right'>Submit</button>
            </form>    ";
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