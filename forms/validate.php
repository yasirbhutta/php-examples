<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>
<?php
$name=$email="";
$nameErr=$emailErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //
    // validation of name 
    //
  if (empty($_POST["name"])) 
  {
  $nameErr = "Name is required";}
    else
    {
    $name=$_POST["name"];
    }
    //
    // validation of email
    //
  if (empty($_POST["email"])) 
  {
  $emailErr = "Email is required";}
    else
    {
    $email=$_POST["email"];
    }
}

?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

       <label> Name: <input type="text" name="name" value="<?php echo $name;?>"></label>
       <!-- span for error message -->
       <span class="error">* <?php echo $nameErr;?></span>
       <br/><br/>
        <label>Email: <input type="text" name="email"  value="<?php echo $email;?>"></label>
        <!-- span for error message -->
       <span class="error">* <?php echo $emailErr;?></span>
        <br/><br/>
        <input type="submit">
        <input type="reset">
    </form>

    <?php
    echo "<br>";
    echo "<br>";
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;

?>

</body>

</html>