<?php $title = 'Midterm Project - Sign Up'; ?>
<?php include "inc/top.inc"; ?> 


<body class="container3">

<header class="signup">
	<h1>Sign-up for a newsletter</h1>
    <?php include "inc/nav.inc"; ?>
</header>


<form class="full-width" method="post" action="form-processor.php">
	<label for="name">Your Name: </label><input type="text" name="name" id="name"><br><br>
    <label for="email">Your Email: </label><input type="email" name="email" id="email"><br><br>

    
    <input type="submit" value="Submit">
</form>


<?php include "inc/bottom.inc"; ?>  
