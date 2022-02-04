<!-- https://html.form.guide/php-form/php-form-action-self/-->


<?php
if(isset($_POST['submit'])) 
{ 
    $name = $_POST['name'];
    echo "User Has submitted the form and entered this name : <b> $name </b>";
    echo "<br>You can use the following form again to enter a new name."; 
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>


<!-- PHP_SELF variable can be exploited. using following URL -->
<!-- http://www.yourdomain.com/form-action.php/%22%3E%3Cscript%3Ealert('xss')%3C/script%3E%3Cfoo%22 -->
