<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome puzzulo</title>
    <style>
		h2 {
			margin-top: 30px;
			margin-bottom: 10px;
		}
		p {
			margin-bottom: 20px;
		}
		input[type="text"] {
			width: 300px;
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px 0 rgba(0,0,0,0.3);
		}
		button {
			padding: 10px 20px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}
		button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
   
    <a href="logout.php"><button>logout</button></a>
	<h1>Quiz</h1>
	<form>
		<h2>Question 1</h2>
		<p>What is the capital of France?</p>
		<input type="text" name="answer1" id="answer1">
		<button type="button" onclick="checkAnswer(1)">Submit</button>
		<p id="hint1" style="display: none; color: red;">Hint: It starts with the letter "P".</p>
		
		<h2>Question 2</h2>
		<p>What is the largest planet in our solar system?</p>
		<input type="text" name="answer2" id="answer2">
		<button type="button" onclick="checkAnswer(2)">Submit</button>
		<p id="hint2" style="display: none; color: red;">Hint: It starts with the letter "J".</p>
		
		<h2>Question 3</h2>
		<p>What is the highest mountain in the world?</p>
		<input type="text" name="answer3" id="answer3">
		<button type="button" onclick="checkAnswer(3)">Submit</button>
		<p id="hint3" style="display: none; color: red;">Hint: Its peak is in the Himalayas.</p>
	</form>

	<script>
		function checkAnswer(questionNumber) {
			var answer = document.getElementById("answer" + questionNumber).value.toLowerCase();
			var hint = document.getElementById("hint" + questionNumber);
			
			switch(questionNumber) {
				case 1:
					if (answer === "paris") {
						alert("Correct!");
						hint.style.display = "none";
					} else {
						hint.style.display = "block";
					}
					break;
				case 2:
					if (answer === "jupiter") {
						alert("Correct!");
						hint.style.display = "none";
					} else {
						hint.style.display = "block";
					}
					break;
				case 3:
					if (answer === "mount everest") {
						alert("Correct!");
						hint.style.display = "none";
					} else {
						hint.style.display = "block";
					}
					break;
				default:
					alert("Invalid question number.");
			}
		}
	</script>
</body>
</html>
