<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
if( !empty($_SESSION['logged_in']) )
{

?>



<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="index.css">
<?php
//	include "passwords.php";
	header("Content-Type: text/html; charset=utf-8");
 	
?>
</head>
<body>
 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar">dsd</span>
            <span class="icon-bar">dasd</span>
            <span class="icon-bar">dsds</span>
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


<form action="questions.php" id="quiz">
<div class="col-md-4 middle-row">
  <div class="form-group">
    <label for="exampleInputEmail1">Question</label>
    <input type="hidden" class="form-control" >
      <textarea name="question" class="form-control" rows="3" placeholder="Enter question">
      </textarea>
    </input>
  </div>
  
  <div class="form-group">
    <label>1th answer</label>
    <input type="text" class="form-control" name="ans1" >
  </div>
  <div class="form-group">
    <label>2nd answer</label>
    <input type="text" class="form-control" name="ans2" >
  </div>
  <div class="form-group">
    <label>3rd answer</label>
    <input type="text" class="form-control" name="ans3" >
  </div>
  <div class="form-group">
    <label>4th answer</label>
    <input type="text" class="form-control" name="ans4">
  </div>
  <div class="form-group">
    <label>Add correct answer</label>
  </div>
  <div class="select">
    <select name="selected_option">
      <option id="correct_ans1">Answer 1</option>
      <option id="correct_ans2">Answer 2</option>
      <option id="correct_ans3">Answer 3</option>
      <option id="correct_ans4">Answer 4</option>
    </select>
  </div>


  <input type="hidden" name="type" value="add" />
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</div>
</form>
</body>
</html>

<?php 
}
else
	{
		echo"not logged in";
		header("Location:index.php?message=You are not logged in!");}

?>