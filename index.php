<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
    <script src="scripts/script.js"></script>
    <link href="styles/style.css" rel="stylesheet">

</head>
<body>



<div class="p-5 bg-primary text-white text-center">
	<h2>PHP-Practice Solutions</h2>
	<h4>Exercises can be found here:</h4>
	<p>
		<a class="text-white" href="https://www.w3resource.com/php-exercises/php-basic-exercises.php" target="_blank">https://www.w3resource.com/php-exercises/php-basic-exercises.php</a>
	</p>
	<p>Click on a tab to see the solution:</p>
</div>
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-md-4 tab p-0">
			<button class="tablinks" onclick="openSolution(event, 'exercise-1')" id="defaultOpen">Exercise 1</button>
			<button class="tablinks" onclick="openSolution(event, 'exercise-2')">Exercise 2</button>
			<button class="tablinks" onclick="openSolution(event, 'exercise-3')">Exercise 3</button>
        </div>

        <div class="col-md-8 tabcontent" id="exercise-1">
			<h3 class="p-2">Solution 1:</h3>
			<p class="ml-4">
				<code>something
					<script>
						openSolution();
					</script>
				</code>
			</p>
		</div>

		<div class="col-md-8 tabcontent" id="exercise-2">
			<h3 class="p-2">Solution 2:</h3>
			<p>
				<code>
					<script>
						openSolution();
					</script>
				</code>
			</p>
		</div>

		<div class="col-md-8 tabcontent" id="exercise-3">
			<h3 class="p-2">Solution 3:</h3>
			<p>
				<code>
					<script>
						openSolution();
					</script>
				</code>
			</p>
		</div>
        
    </div>

            <!-- https://www.w3resource.com/php-exercises/php-basic-exercises.php 
            exercise 1 --> 
            <?php
        /*
            $info = phpinfo();
            echo $info;
        */
            ?>

</div>


</body>
</html>