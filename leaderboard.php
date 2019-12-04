<?php
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134427101-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134427101-1');
</script>
  <title>INFOTREK'19</title>
 <link rel="icon" href="acm.png" type="image/gif" sizes="16x16">
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <h1> <span class="yellow">MINING THE JEWELS</pan></h1>

<table class="container">
	<thead>
		<tr>
			<th><h1>RANK</h1></th>
			<th><h1>NAME</h1></th>
			<th><h1>SCORE</h1></th>
		</tr>
	</thead>
	<tbody>
	<?php 
	$sql = "SELECT * FROM detail ORDER BY TOTALSCORE DESC,UT ASC LIMIT 20";
	$result = mysqli_query($conn, $sql);
	$i=1;
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr><td>".$i."</td><td>".$row['NAME']."</td><td>{$row['TOTALSCORE']}</td></tr>";
		$i+=1;
	}
	?>	
	</tbody>
</table>
  
</body>

</html>
