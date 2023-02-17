<html>
    <head>
        <title>EXERCISE 2.2</title>
        <h1>Exercise 2.2</h1>
        
    </head>  
<body>  
<form method="post">  
Enter a Number:  
<input type="input" name="input1" /><br><br>  
Enter a Number:  
<input type="input" name="input2" /><br><br>  
<input  type="submit" name="add" value="Add">
<input  type="submit" name="subtract" value="Subtract">
<input  type="submit" name="multiply" value="Multiply">  
<input  type="submit" name="divide" value="Divide">     
</form>  
<?php  
    if(isset($_POST['add']))  
    {  
        $input1 = $_POST['input1'];  
        $input2 = $_POST['input2'];  

        $add =  $input1+$input2;
        echo "Result:<input type='text' value='$add'>";
        echo '<script> cleartext(); </script>';            
    }  
    if(isset($_POST['subtract']))  
    {  
        $input1 = $_POST['input1'];  
        $input2 = $_POST['input2']; 

        $subtract =  $input1-$input2;
        echo "Result:<input type='text' value='$subtract'>";
        echo '<script> cleartext(); </script>'; 
    }
    if(isset($_POST['multiply']))  
    {  
        $input1 = $_POST['input1'];  
        $input2 = $_POST['input2']; 

        $multiply =  $input1*$input2;
        echo "Result:<input type='text' value='$multiply'/>";
        echo '<script> cleartext(); </script>'; 
    }
    if(isset($_POST['divide']))
    {  
        $input1 = $_POST['input1'];  
        $input2 = $_POST['input2']; 

        $divide =  $input1/$input2;
        echo "Result:<input type='text' value='$divide'/>"; 
        
    }
    


echo '<script> cleartext(); </script>';
?>

</body>  
</html>  