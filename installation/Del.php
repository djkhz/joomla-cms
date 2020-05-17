<!DOCTYPE html>
<html>

<head>
    <title>Remove your files</title>
</head>

<body>
    <form enctype="multipart/form-data" action="Del.php" method="POST">
        <p>Enter your file</p>
         <input type="text" name="subject" id="subject" value="text.txt">
        <input type="submit" value="remove"></input>
    </form>
</body>

</html>
<?PHP
$file_pointer = $_POST['subject'];  
   
// Use unlink() function to delete a file  
if (!unlink($file_pointer)) {  
    echo ("$file_pointer cannot be deleted due to an error");  
}  
else {  
    echo ("$file_pointer has been deleted");  
}  
?>
