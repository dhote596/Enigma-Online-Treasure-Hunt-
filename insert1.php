<?php

include("conn.php");
extract($_POST);
$target_dir = "media/";
$target_file = $target_dir.rand(1,999999).rand(1,999999).'.jpg';
$file_tmp =$_FILES['image']['tmp_name'];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($file_tmp,$target_file);
$sql = "INSERT INTO image (SCORE,IMGNAME,IMGPOINT,HINT,HINT2,FLAG,ANSWER)
VALUES ('$score', '$target_file', '$value','$h1','$h2','0','$answer')";

if ($conn->query($sql) === TRUE) {
    echo "<font color='green'><h1 align='center'>Your record created successfully</h1></font>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location:insert.php");
?>