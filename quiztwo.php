<html>
<head>
<title>Quiz Questions And Answers</title>
</head>
<body>
<center><h1>Quiz Questions</h1></center>
<p>
<form name="quiz">
<p>
<b>Question 1.
<br>What is the capital of the US?<br></b>
<blockquote>
<input type="radio" name="q1" value="WashingtonDC">WashingtonDC<br>
<input type="radio" name="q1" value="NewYork">NewYork<br>
<input type="radio" name="q1" value="California">California<br>
</blockquote>
<p><b>
<hr>
Question 2.
<br>Which is a car company?<br></b>
<blockquote>
<input type="radio" name="q2" value="Toyota">Toyota<br>
<input type="radio" name="q2" value="Monster">Monster<br>
<input type="radio" name="q2" value="Nintendo">Nintendo<br>
</blockquote>
<p><b>
<hr>
Question 3.
<br>Which is a college?<br></b>
<blockquote>
<input type="radio" name="q3" value="NJIT">NJIT<br>
<input type="radio" name="q3" value="Hollywood">hollywood<br>
<input type="radio" name="q3" value="France">France<br>
</blockquote>
<p><b>
<hr>
Question 4.
<br>Pick the shoe brand<br></b>
<blockquote>
<input type="radio" name="q4" value="Honda">Honda<br>
<input type="radio" name="q4" value="Apple">Apple<br>
<input type="radio" name="q4" value="Nike">Nike<br>
</blockquote>
<p><b>
<hr>
Question 5.
<br>Pick the NFL Football team<br></b>
<blockquote>
<input type="radio" name="q5" value="Smuckers">Smuckers<br>
<input type="radio" name="q5" value="Baylor">Baylor<br>
<input type="radio" name="q5" value="Broncos">Broncos<br>
</blockquote>
<p><b>
<hr>
Question 6.
<br>Choose the Basketball Player<br></b>
<blockquote>
<input type="radio" name="q6" value="Jordan">Jordan<br>
<input type="radio" name="q6" value="Manning">Manning<br>
<input type="radio" name="q6" value="Ninja">Ninja<br>
</blockquote>
<p><b>
Question 7.
<br>Company that Makes Video Games<br></b>
<blockquote>
<input type="radio" name="q7" value="Nintendo">Nintendo<br>
<input type="radio" name="q7" value="Frebreez">Frebreez<br>
<input type="radio" name="q7" value="Pokemon">Pokemon<br>
</blockquote>
<p><b>
<hr>
Question 8.
<br>Finish the Sentance. I can not wait to ____<br></b>
<blockquote>
<input type="radio" name="q8" value="Chair">Chair<br>
<input type="radio" name="q8" value="Mcdonalds">Mcdonalds<br>
<input type="radio" name="q8" value="Sleep">Sleep<br>
</blockquote>
<p><b>
<hr>
Question 9.
<br>Pick the music artist<br></b>
<blockquote>
<input type="radio" name="q9" value="Portland">Portland<br>
<input type="radio" name="q9" value="Kanye">Kanye<br>
<input type="radio" name="q9" value="Tesla">Tesla<br>
</blockquote>
<p><b>
<hr>
Question 10.
<br>What is the color of the sky?<br></b>
<blockquote>
<input type="radio" name="q10" value="Blue">Blue<br>
<input type="radio" name="q10" value="Red">Red<br>
<input type="radio" name="q10" value="White">White<br>
</blockquote>
<p><b>
<hr>
Question 11.
<br>Pick the Boardgame<br></b>
<blockquote>
<input type="radio" name="q11" value="Jumping">Jumping<br>
<input type="radio" name="q11" value="Chess">Chess<br>
<input type="radio" name="q11" value="Halo">Halo<br>
</blockquote>
<p><b>
<hr>
Question 12.
<br>Choose the German Car Maker<br></b>
<blockquote>
<input type="radio" name="q12" value="Ford">Ford<br>
<input type="radio" name="q12" value="Volvo">Volvo<br>
<input type="radio" name="q12" value="BMW">BMW<br>
</blockquote>
<p><b>
<hr>
Question 13.
<br>In baseball you swing a___<br></b>
<blockquote>
<input type="radio" name="q13" value="Mat">Mat<br>
<input type="radio" name="q13" value="Cat">Cat<br>
<input type="radio" name="q13" value="Bat">Bat<br>
</blockquote>
<p><b>
<hr>
Question 14.
<br>What wakes you up in the morning?<br></b>
<blockquote>
<input type="radio" name="q14" value="Alarm">Alarm<br>
<input type="radio" name="q14" value="Chair">Chair<br>
<input type="radio" name="q14" value="Computer">Computer<br>
</blockquote>
<p><b>
<hr>
Question 15.
<br>The first President of the United States was?<br></b>
<blockquote>
<input type="radio" name="q15" value="Roosevelt">Roosevelt<br>
<input type="radio" name="q15" value="Adams">Adams<br>
<input type="radio" name="q15" value="Washington">Washington<br>
</blockquote>
<p><b>
<input type="button"value="Grade Me"onClick="getScore(this.form);">
<input type="reset" value="Clear"><p>
Your score out of 15 questions was = <input type= text size 15 name= "mark">
percentage Score= <input type=text size=15 name="percentage"><br>
</form>
<p>
<form method="post" name="Form" onsubmit="" action="">
</form>
</body>
<script>
var numQues = 15;
var numChoi = 3;
var answers = new Array(15);
answers[0] = "WashingtonDC";
answers[1] = "Toyota";
answers[2] = "NJIT";
answers[3] = "Nike";
answers[4] = "Broncos";
answers[5] = "Jordan";
answers[6] = "Nintendo";
answers[7] = "Sleep";
answers[8] = "Kanye";
answers[9] = "Blue";
answers[10] = "Chess";
answers[11] = "BMW";
answers[12] = "Bat";
answers[13] = "Alarm";
answers[14] = "Washington";
function getScore(form) {
var score = 0;
var currElt;
var currSelection;
for (i=0; i<numQues; i++) {
currElt = i*numChoi;
answered=false;
for (j=0; j<numChoi; j++) {
currSelection = form.elements[currElt + j];
if (currSelection.checked) {
answered=true;
if (currSelection.value == answers[i]) {
score++;
break;
}
}
}
if (answered ===false){alert("Answer all the questions before submitting") ;return false;}
}
var scoreper = Math.round(score/numQues*100);
form.percentage.value = scoreper + "%";
form.mark.value=score;
}
</script>
</html>