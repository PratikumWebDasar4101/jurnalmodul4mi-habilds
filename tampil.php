<?php 
session_start();
if (isset($_SESSION['user'])) {
$user = $_SESSION['user'];
?>

<table width="800px" align="center">
	<tr align="left">
		<th>Nama</th>
		<th>Hobi</th>
		<th>Gambar</th>
	</tr>
	<tr valign="top">
		<td><?php echo $user['nama']; ?></td>
		<td>
			<?php
				foreach ($user['hobi'] as $hobbies => $value) {
			 		echo $value . '<br>';
			 	} 	
			?>
		</td>
		<td>
			<img src="<?php echo $user["image"]; ?>" alt="">
		</td>
	</tr>
	<tr>
		<td><a href="delarray.php">delete</a></td>
	</tr>
</table>
<?php
}else {
	?>
	<table width="800px" align="center">
		<tr align="left">
			<th>Nama</th>
			<th>Hobi</th>
			<th>Gambar</th>
		</tr>
		<tr valign="top">
			<td>-</td>
			<td>
				-
			</td>
			<td>
				-
			</td>
		</tr>
	</table>
	<?php
}

?>