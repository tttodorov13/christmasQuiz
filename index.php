<?php
header("Content-Type: text/html; charset=utf-8");
if (!empty($_REQUEST['message']))
    echo $_REQUEST['message'];
?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="index.css">

    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">FMI CHRISTMAS QUIZ</a>
                </div>
                <div class="navbar-collapse collapse">

                    <form class="navbar-form navbar-right" method="post" action="passwords.php" role="form">
                        <div class="form-group">
                            <input type="text" id="inputUsername" name="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="inputPass" type="password" name="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                        <!-- <div style ="color:red; margin-left:30px"><?php echo $_REQUEST['message']; ?></div> -->
                    </form>
                </div>
                <div class="jumbotron">
                    <div class="container">       
                    </div>
                </div>
            </div>
            <div class="col-md-4 middle-row">
                <h3>This is a all the questions we have!</h3>
                <?php
                ?>



                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) Computer Styled Sections </label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Cascading Style Sheets</label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) Crazy Solid Shapes</label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) None of the above</label>
                </div>

            </div>

    </body>
</html>