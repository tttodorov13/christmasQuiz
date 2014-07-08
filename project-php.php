<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="index.css">
<?php
	include "connectingDB.php";
	header("Content-Type: text/html; charset=utf-8");
 	
?>
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
          
          <form class="navbar-form navbar-right" method="post" action="passwords.php" >
            <div class="form-group">
              <input type="text" id="inputUsername" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input id="inputPass" type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
            <!-- <div style ="color:red; margin-left:30px"><?php echo $_REQUEST['message']; ?></div> -->
          </form>

        </div><!--/.navbar-collapse -->
      </div>
    </div>


<!--

<form action="quiz-rezult.php" method="post" id="quiz">
<ul>
<li class="question">
	<h3>HTML Stands for...</h3>
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
			<label for="question-1-answers-A">A) Hypertext Markup Language </label>
		</div>

		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
			<label for="question-1-answers-B">B) Hypertext Markup</label>
		</div>

		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
			<label for="question-1-answers-C">C) Hypertext Programming</label>
		</div>

		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
			<label for="question-1-answers-D">D) None of the above</label>
		</div>
</li>
<li class="question">
	<h3>second question</h3>
		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
			<label for="question-2-answers-A">A) Hypertext Markup Language </label>
		</div>

		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
			<label for="question-2-answers-B">B) Hypertext Markup</label>
		</div>

		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
			<label for="question-2-answers-C">C) Hypertext Programming</label>
		</div>

		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
			<label for="question-2-answers-D">D) None of the above</label>
		</div>
</li>
<li class="question">
	<h3>third question</h3>
		<div>
			<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
			<label for="question-3-answers-A">A) Hypertext Markup Language </label>
		</div>

		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
			<label for="question-2-answers-B">B) Hypertext Markup</label>
		</div>

		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
			<label for="question-2-answers-C">C) Hypertext Programming</label>
		</div>

		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
			<label for="question-2-answers-D">D) None of the above</label>
		</div>
</li>

</ul>
<input type="submit" value="Submit Quiz" />
</form>

-->
</body>
</html>