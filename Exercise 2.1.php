<html>
    <head>
        <title>EXERCISE 2.1</title>
        <h1>Exercise 2.1</h1>
        
    </head>  
<body>  
<form method="post">  
Y₁:  
<input type="input" name="input1" /><br><br>  
Y₂:  
<input type="input" name="input2" /><br><br>
X₁:  
<input type="input" name="input3" /><br><br>  
X₂:  
<input type="input" name="input4" /><br><br>

<input  type="submit" name="compute" value="Compute"> 
</form>  
<?php  
    if(isset($_POST['compute']))
    {
        $input1 = $_POST['input1']; 
        $input2 = $_POST['input2']; 
        $input3 = $_POST['input3']; 
        $input4 = $_POST['input4']; 

        $compute = ($input1-$input2) / ($input3-$input4);
        echo "Result:<input type='text' value='$compute'>";
        
    }
?>

</body>  
</html>  