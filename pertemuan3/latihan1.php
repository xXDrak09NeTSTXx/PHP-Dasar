<?php 
// pengulangan

// for 

// for( $i = 0; $i < 5; $i++ )
// {
// 	echo " hello world  <br>";
// }

// do.. while

// $i = 0;
// while ($i < 5 ) 
// {
//  	echo "Hello World <br>";
//  	$i++;
// }

// $i = 0;
// do {
// 	echo "Hello world! <br>";
// 	$i++;
// } while ( $i < 5 );


// foreach : pengulangan khusus array

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 1</title>
</head>
<body>
	<!-- <table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>1,1</td>
			<td>1,2</td>
			<td>1,3</td>
			<td>1,4</td>
			<td>1,5</td>
		</tr>

		<tr>
			<td>1,1</td>
			<td>2,2</td>
			<td>3,3</td>
			<td>4,4</td>
			<td>5,5</td>
		</tr>		
	</table> -->

	<!-- <table border="1" cellpadding="10" cellspacing="0">
		<?php
			for( $i = 1; $i <= 3 ; $i++)
			{
				echo "<tr>";
				for ($j=1; $j <= 5 ; $j++) 
				{ 
					echo "<td>$i,$j</td>";
				}
				echo "</tr>";
			} 
		?>
	</table> -->

	<!-- <table border="1" cellpadding="10" cellspacing="0">
		<?php for( $i = 1 ; $i <= 3 ; $i++) : ?>
		
		<tr>
			
			<?php for( $j = 1 ; $j <= 5 ; $j++ ) : ?>
				<td> <?= "$i,$j"; ?></td>
			<?php endfor; ?>
		</tr>
		
		<?php endfor; ?>
	</table> -->	
</body>
</html>