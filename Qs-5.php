<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>প্রশ্ন ৫</title>
	<style type="text/css">
		.btn{
			border-radius: 0;
		}
	</style>
</head>
<body class="bg-dark text-light mt-5">
<div class="container">
	<h1>প্রশ্নঃ- তোমাদের জেলার নাম কি?</h1>
	<form action="" method="post" class="text-left mt-4">
		<input id="click1" type="radio" name="answer" value="bangla"><pre class="d-inline"> </pre> <label for="click1">চট্টগ্রাম</label><br>
		<input id="click2" type="radio" name="answer" value="india"><pre class="d-inline"> </pre> <label for="click2">দাউদকান্দি</label><br>
		<input id="click3" type="radio" name="answer" value="pakistan"><pre class="d-inline"> </pre> <label for="click3">আমিরাবাদ</label><br> 
		<input id="click4" type="radio" name="answer" value="srilanka"><pre class="d-inline"> </pre> <label for="click4">কুমিল্লা</label><br>
		<input id="click" class="mt-4 btn btn-success btn-lg" type="submit" name="submit" value="উত্তর সাবমিট করুন">
	</form><br>

<?php
	if (isset($_POST['submit'])) {
		$answer = $_POST['answer'];
		if (empty($answer)) {
			echo "<p class='alert alert-warning'>কোন উত্তর দেননি! দয়া করে উত্তর দিন।</p> <br>";
		} elseif ($answer == "srilanka") { 
			echo "<p class='alert alert-success'>অভিনন্দন, আপনি সঠিক উত্তর দিয়েছেন</p> <br>
				<video style='width: 0px; height: 0px;' autoplay>
			  <source src=\"video/success.mp4\" type=\"video/mp4\">
			  Your browser does not support HTML video.
				</video>";
		}else{
			echo "<p class='alert alert-danger'>ভূল উত্তর।</p> <br>";
			echo "<p class='alert alert-info'>সঠিক উত্তর হলো কুমিল্লা!</p> <br>
				<video style='width: 0px; height: 0px;' autoplay>
			  <source src=\"video/wrong.mp4\" type=\"video/mp4\">
			  Your browser does not support HTML video.
				</video>";
		}
	}

	
?>
<a class="btn btn-outline-primary float-left btn-lg mt-5" href="Qs-4.php">আগের পেজ</a>
<a class="btn btn-outline-info float-right btn-lg mt-5" href="Qs-6.php">পরের পেজ</a> 
</div>
</body>
</html>