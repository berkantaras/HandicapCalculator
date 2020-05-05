<?php
extract($_POST);
if(isset($hesapla))
{
    if ($gor2 > $gor1 + 49) $avansalan = "Siz";
    elseif ($gor1 > $gor2 + 49) $avansalan = "Rakibiniz";

    $fark = $gor1 - $gor2;
    if ($gor2 > $gor1) $fark = $gor2 - $gor1;

    if ($fark < 50) $avans = 0;
    elseif ($fark < 150) $avans = 1;
    elseif ($fark < 250) $avans = 2;
    elseif ($fark < 350) $avans = 3;
    elseif ($fark < 450) $avans = 4;
    elseif ($fark < 550) $avans = 5;
    elseif ($fark < 650) $avans = 6;
    elseif ($fark < 750) $avans = 7;
    elseif ($fark < 850) $avans = 8;
    else $avans = 9;

    if ($avans == 0) $komi = 6.5;
    else $komi = 0.5;
}

?>
<!DOCTYP html>
<html>
	<body>
		<form method = "post">

		<table border = "1" align = "center">
			<tr>
				<th>Sizin GoRunuz</th>
				<th><input type = "number" name = "gor1" value = "<?php  echo @$gor1;?>"/></th>
			</tr>

			<tr>
				<th>Rakibinizin GoRu</th>
				<th><input type = "number" name = "gor2" value = "<?php  echo @$gor2;?>"/></th>
			</tr>
			
			<tr>
				<th></th>
				<th>
				<input type = "submit" 
				name = "hesapla" value = "Hesapla"/>
				</th>
			</tr>

			<tr>
   				<th>Avansı Alan</th>
   				<th><input type = "string" readonly = "readonly" disabled = "disabled" value = "<?php  echo @$avansalan;?>"/></th>
			</tr>

			<tr>
				<th>Avans Sayısı</th>
				<th><input type = "number" readonly = "readonly" disabled = "disabled" value = "<?php  echo @$avans;?>"/></th>
			</tr>

			<tr>
				<th>Komi</th>
				<th><input type = "number" readonly = "readonly" disabled = "disabled" value = "<?php  echo @$komi;?>"/></th>
			</tr>

<?php echo getList($currentpage, $highlight); ?>
	</table>
	</form>
	</body>
</html>
