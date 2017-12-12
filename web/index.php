<!DOCTYPE html>
<html>
	<?php
		require_once('php/functions.php');
		include('php/loginHandler.php');
		$conn = sqlConnect();
	?>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Get help from other students in the same class as you">
			<meta name="keywords" content="connect cu, study groups, get help with homework">
			<meta name="author" content="Group 2">
			<title>CUConnect | Welcome</title>
			<link rel="stylesheet" href="./css/style.css">
			<script type="text/javascript" src="./javascript/main_javascript.js"> </script>
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
    <header>
      <div class="container">
        <div id="branding">
          <h1> <span class="highlight">CU</span>Connect </h1>
        </div>
        <nav>
          <ul>
            <li class="current"> <a href="index.php"> Home </a> </li>
            <li> <a href="math.php"> Math </a> </li>
            <li> <a href="computerscience.php"> Computer Science </a>  </li>
            <li> <a href="science.php"> Science </a>  </li>
            <li> <a href="english.php"> English </a>  </li>
			<?php
				if (isset($_SESSION['login_user'])){
					echo '
						<li class="button_1"> <a href="php/logout.php">Sign out</a> </li>
					';
				} else {
					echo '
						<li class="button_1"> <a href="Login.php" >Login</a> </li>
						<li class="button_1"> <a href="SignUp.php">Sign Up</a> </li>
					';
				}
			?>
          </ul>
        </nav>
      </div>
    </header>
    <section id="showcase">
      <div class="container">
        

      </div>
    </section>

    <section id="questionbar">
      <div class="container">
			<h1> Ask a question </h1>
			<form action="php/questionHandler.php" method="post">
			  <select name="Subject" id="idSubject" required>
				<option value="Math"> Math </option>
				<option value="Computer Science"> Computer Science </option>
				<option value="Science"> Science </option>
				<option value="English"> English </option>
			  </select>
			  <input name="Question" id="txtInput" type="text" placeholder="Enter Question" required>
			  <?php
				if (isset($_SESSION['login_user'])){
					echo '
					  <input name="User" id="txtInput" type="hidden" value="'.$_SESSION['login_user'].'">
					  <input class="button_1" type="submit" value="Submit Question"/>
					  <input name="Return" type="hidden" value="index.php">';
				} else {
					echo '
					  <input class="button_1" type="button" value="Login to Submit"/>';
				}
			  ?>
			  
			</form>
      </div>
    </section>

    <section id="text_areas">
        <h1> Most Popular </h1>
		<?php
			//Queries questions table, then creates a block for each of the top 15 questions, and fills info
			$sql = "SELECT * from questions q LEFT JOIN (SELECT message AS answer, user AS ansUser, question_id FROM answers) a ON q.id = a.question_id ORDER BY score DESC";
			$result = $conn->query($sql);
			
			$array = array();
			while ($row = $result->fetch_array()){
				$array[$row['id']][] = $row;
			}
			
			$questionCounter = 0;
			foreach ($array as $id => $rows_for_id){
				$voteBox = 'vote'.$questionCounter;
				echo '
				<div class="container" id="container1">
					<form>
					  <input class="subject" type="text" id="txtSubject1" readonly="readonly" value="'.$rows_for_id[0]['subject'].'">
					  <img class="up" id="up1" src="./img/uparrow.png" alt="Up Arrow" height="20" width="20" onclick="callUpVoter('.$rows_for_id[0]['id'].', '.$voteBox.')">
					  <img class="down" id="down1" src="./img/downarrow.png" alt="Up Arrow" height="20" width="20" onclick="callDownVoter('.$rows_for_id[0]['id'].', '.$voteBox.')">
					  <input class="vote" type="text" id="'.$voteBox.'" value="'.$rows_for_id[0]['score'].'" readonly>
					</form>
					  <button class="accordion" value=""><output id="">'.$rows_for_id[0]['message'].'</output> </button>
					  <div class="panel">
						<h3>Answers</h3>';
						$counter = 0;
						foreach ($rows_for_id as $answer){
							if ($answer['answer'] != NULL){
								echo '
								<div class="commentContainer">
									<p>'.$answer['answer'].'</p>
									<div align="right">
									<p>Answered by '.$answer['ansUser'].'</p>
									</div>
								</div>';
								$counter += 1;
							}
						}
						
						if ($counter == 0){
							echo '<p>Nobody has answered this question yet!</p>';
						}
						
						echo
						'<h3> Answer This Question:</h3>
						<div class="commentBar">';
						if (isset($_SESSION['login_user'])){
							echo '
							<form action="php/commentHandler.php" method="post" id="form1">
								<input name="Message" type="text" placeholder="Enter Answer or Comment" style="width: 75%; margin: 0 0 5px 0" required>
								<input name="User" type="hidden" value="'.$_SESSION['login_user'].'">
								<input name="Return" type="hidden" value="index.php">
								<input name="Qid" type="hidden" value="'.$rows_for_id[0]['id'].'">
								<input type="submit" class="button_1" value="Submit" style="width: 10%; margin: 10px 0 10px 0">
							</form>';
						} else {
							echo '<p>Log in to answer this question</p>';
						}
						echo '
						</div>
					  </div>
					<p style="float:right">Asked by '.$rows_for_id[0]['user'].'</p>
				</div>';
				$questionCounter += 1;
			}
		?>

    </section>
	

    <footer>
      <p> CUConnect, Copyright &copy; 2017 </p>
    </footer>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}

window.onload = function callUpVoter(questionID, voteID){

	alert(voteID);
	strNumber = document.getElementById(voteID).value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById(voteID).value = String(iNumber);

	$.ajax({
		type: "POST",
		url: 'php/voteHandler.php',
		data:{action:'upvote', id:questionID}
	});
}

window.onload = function callDownVoter(questionID, voteID){

	strNumber = document.getElementById(voteID).value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById(voteID).value = String(iNumber);

	$.ajax({
		type: "POST",
		url: 'php/voteHandler.php',
		data:{action:'downvote', id:questionID}
	});
}
</script>

  </body>
</html>



