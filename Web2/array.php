<html>
<body>
	<td align="right">Pilih Bunga :</td>
	<select name="Bunga">
	<option value=""></option>
<?php
	$Bunga = array('Dahlia','Teratai','Lily','Asoka','Amarilis','Alamanda');
	
		for($i= 0; $i < count($Bunga);$i++){
			echo '<option value>' . $Bunga[$i] . '</option>';
		}
?>
	</select>	
</body>
</html>