Informatii despre un anume produs


<hr>

<?PHP
	
	echo "For ADMIN DEV (productID): ".$productID."<br>";
	
?>

<table border=1>
	<tr>
		<th>Denumire</th>
		<th>Pret</th>
		<th>Moneda</th>
		<th>Reducere</th>
		<th>Cantitate</th>
		<th>Descriere</th>
		<th>Tip medicament</th>
		<th>Mod de administrare</th>
		<th>Imagine</th>
		<th>Data expirarii</th>
		<th>Data publicarii</th>
		<th>Data ultimei modificari</th>
		<th>Vizualizari</th>
		<th>Cumpara</th>
	</tr>
	
<?PHP
	if ($dbcon = mysqli_query(db_connect(), "SELECT * FROM ".db_table('products')." WHERE id = '$productID';")){
		while ($info=mysqli_fetch_object($dbcon)){ 
?>
	<tr>
		<td><?=$info->s_nume;?></td>
		<td><?=$info->s_pret;?></td>
		<td><?=$info->s_moneda;?></td>
		<td><?=$info->s_reducere;?></td>
		<td><?=$info->i_cantitate;?></td>
		<td><?=$info->s_descriere;?></td>
		<td><?=$info->s_Tip;?></td>
		<td><?=$info->s_Mod;?></td>
		<td><img src="<?=$info->s_imagine;?>" width="150" height="100"></td>
		<td><?=$info->d_expirare;?></td>
		<td><?=$info->d_public;?></td>
		<td><?=$info->d_edit;?></td>
		<td><?=$info->i_views;?></td>
		<td><a href="<?=u('cart-add/'.sMyID($info->id).'/');?>">Cumpara</td>
	</tr>
<?PHP
		}
	}
?>
</table>