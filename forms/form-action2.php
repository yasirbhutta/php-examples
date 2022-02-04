<!-- https://html.form.guide/php-form/php-form-action-self/-->


<?php
if(isset($_POST['submit'])) 
{ 
    $name = $_POST['name'];
    echo "User Has submitted the form and entered this name : <b> $name </b>";
    echo "<br>You can use the following form again to enter a new name."; 
}
?>

<form name="test" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
   <input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>


<!-- PHP_SELF variable can be exploited. using following URL -->
<!-- http://www.yourdomain.com/form-action.php/%22%3E%3Cscript%3Ealert('xss')%3C /script%3E%3Cfoo%22 -->

<!-- output of htmlentities -->

<!-- <form name="test" method="post" 
action="form-action.php/&quot;&gt;&lt;script&gt;alert('xss')&
lt;/script&gt;&lt;foo"> -->