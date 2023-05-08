<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Project</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/bannerImages.css" rel="stylesheet">
    <link href="../css/personalized_workouts.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    
    <script src="../js/mainCode.js"></script>
    <script src ="../js/personalized_workouts.js"></script> 
    <script src="https://kit.fontawesome.com/c2356f3c74.js" crossorigin="anonymous"></script>
    <?php include '../topMenu.php'; ?>
</head>
<body>
	<h1>Personalized Workouts</h1>

	<form>
		<label for="fitness-level">Fitness level:</label>
		<select id="fitness-level" class ="selection">
			<option value="beginner">Beginner</option>
			<option value="intermediate">Intermediate</option>
			<option value="advanced">Advanced</option>
		</select>

		<label for="goal">Goal:</label>
		<select id="goal" class ="selection">
			<option value="weight-loss">Weight loss</option>
			<option value="muscle-gain">Muscle gain</option>
			<option value="endurance">Improved endurance</option>
		</select>

		<label for="equipment">Equipment:</label>
		<select id="equipment" class ="selection">
			<option value="none">None</option>
			<option value="dumbbells">Dumbbells</option>
			<option value="barbell">Barbell</option>
			<option value="resistance-bands">Resistance bands</option>
			<option value="kettlebell">Kettlebell</option>
		</select>
		<label for="time">Time:</label>
		<select id="time" class ="selection">
        <option value="30">30</option>
        <option value="45">45</option>
        <option value="60">60</option>
        <option value="75">75</option>
        <option value="90">90</option>
    	</select>

		<label for="limitations">Limitations:</label>
    	<select id="limitations" multiple class ="selection">
        <option value="back-pain">Back Pain</option>
        <option value="knee-pain">Knee Pain</option>
        <option value="shoulder-pain">Shoulder Pain</option>
        <option value="arm-pain">Arm Pain</option>
		<option value="none">None</option>
   		</select>

		<button type="button" class ="btn" onclick="recommendWorkout()">Recommend Workout</button>
	</form>

	<div class = "workout-box" id="workout-recommendation">
		<p>Results</p>
	</div>

	<script src="script.js"></script>
	<br>
<?php include '../footer.php'; ?>

</body>
</html>
