<?php
$conn = mysqli_connect('localhost', 'root', '', 'test_app') or die;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<table>
		<tr>
			<th>Id</th>
			<th>Gender</th>
			<th>City</th>
			<th>Nationality</th>
		</tr>
		<?php
			$sql = "SELECT * FROM users";
			$query = mysqli_query($conn, $sql);
			while ($data = mysqli_fetch_assoc($query)) {
				$id = $data['ID'];
				$gender = strtolower($data['gender']);
				$city = strtolower($data['city']);
				$nationality = strtolower($data['nationality']);
				// nationality count var
				static $pn_count = '0';
				static $r_count = '0';
				static $l_count = '0';
				// city count var
				static $k_count = '0';
				static $kl_count = '0';
				static $p_count = '0';
				static $v_count = '0';
				// gender count var
				static $m_count = '0';
				static $f_count = '0';
				// polish
				if (((($nationality == 'polish') && ($pn_count < '10')) && (($city == 'kaunas') && ($k_count < '30')) && (($gender == 'm') && ($m_count < '50'))) || (($pn_count < '10') && ($k_count > '29'))) {
					// kaunas
							$m_count ++;
							$k_count ++;
							$pn_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
				} elseif (((($nationality == 'polish') && ($pn_count < '10')) && (($city == 'kaunas') && ($k_count < '30')) && (($gender == 'f') && ($f_count < '50'))) || (($pn_count < '10') && ($k_count > '29'))) {
							$f_count ++;
							$k_count ++;
							$pn_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
					// klaipeda
				} elseif (((($nationality == 'polish') && ($pn_count < '10')) && (($city == 'klaipeda') && ($kl_count < '15')) && (($gender == 'm') && ($m_count < '50'))) || (($pn_count < '10') && ($kl_count > '29'))) {		
							$m_count ++;
							$kl_count ++;
							$pn_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
				} elseif (((($nationality == 'polish') && ($pn_count < '10')) && (($city == 'klaipeda') && ($kl_count < '15')) && (($gender == 'f') && ($f_count < '50')))  || (($pn_count < '10') && ($kl_count > '29'))) {
							$f_count ++;
							$kl_count ++;
							$pn_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP	continue;
					// panevezys
				} elseif (((($nationality == 'polish') && ($pn_count < '10')) && (($city == 'panevezys') && ($p_count < '15')) && (($gender == 'm') && ($m_count < '50')))  || (($pn_count < '10') && ($p_count > '29'))) {	
							$m_count ++;
							$p_count ++;
							$pn_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHPcontinue;
				} elseif (((($nationality == 'polish') && ($pn_count < '10')) && (($city == 'panevezys') && ($p_count < '15')) && (($gender == 'f') && ($f_count < '50'))) || (($pn_count < '10') && ($p_count > '29'))) {
							$f_count ++;
							$p_count ++;
							$pn_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP	continue;
					// vilnius
				} elseif (((($nationality == 'polish') && ($pn_count < '10')) && (($city == 'vilnius') && ($v_count < '40')) && (($gender == 'm') && ($m_count < '50'))) || (($pn_count < '10') && ($v_count > '29'))) {
							$m_count ++;
							$v_count ++;
							$pn_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
				} elseif (((($nationality == 'polish') && ($pn_count < '10')) && (($city == 'vilnius') && ($v_count < '40')) && (($gender == 'f') && ($f_count < '50'))) || (($pn_count < '10') && ($v_count > '29'))) {
							$f_count ++;
							$v_count ++;
							$pn_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
						}
				// Russian
				if (((($nationality == 'russian') && ($r_count < '10')) && (($city == 'kaunas') && ($k_count < '30')) && (($gender == 'm') && ($m_count < '50'))) || (($r_count < '10') && ($k_count > '29'))) {
					// kaunas
							$m_count ++;
							$k_count ++;
							$r_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
				} elseif (((($nationality == 'russian') && ($r_count < '10')) && (($city == 'kaunas') && ($k_count < '30')) && (($gender == 'f') && ($f_count < '50'))) || (($r_count < '10') && ($k_count > '29'))) {
							$f_count ++;
							$k_count ++;
							$r_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP	continue;		
					// klaipeda
				} elseif (((($nationality == 'russian') && ($r_count < '10')) && (($city == 'klaipeda') && ($kl_count < '15')) && (($gender == 'm') && ($m_count < '50'))) || (($r_count < '10') && ($kl_count > '29'))) {
						
							$m_count ++;
							$kl_count ++;
							$r_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
				} elseif (((($nationality == 'russian') && ($r_count < '10')) && (($city == 'klaipeda') && ($kl_count < '15')) && (($gender == 'f') && ($f_count < '50'))) || (($r_count < '10') && ($kl_count > '29'))) {
							$f_count ++;
							$kl_count ++;
							$r_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP		continue;
					// panevezys
				} elseif (((($nationality == 'russian') && ($r_count < '10')) && (($city == 'panevezys') && ($p_count < '15')) && (($gender == 'm') && ($m_count < '50'))) || (($r_count < '10') && ($p_count > '29'))) {
						
							$m_count ++;
							$p_count ++;
							$r_count ++;    
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
				} elseif (((($nationality == 'russian') && ($r_count < '10')) && (($city == 'panevezys') && ($p_count < '15')) && (($gender == 'f') && ($f_count < '50'))) || (($r_count < '10') && ($p_count > '29'))) {
							$f_count ++;
							$p_count ++;
							$r_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP	continue;	
					// vilnius
				} elseif (((($nationality == 'russian') && ($r_count < '10')) && (($city == 'vilnius') && ($v_count < '40')) && (($gender == 'm') && ($m_count < '50'))) || (($r_count < '10') && ($v_count > '29'))) {
							$m_count ++;
							$v_count ++;
							$r_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
				} elseif ((($nationality == 'russian') && ($r_count < '10')) && (($city == 'vilnius') && ($v_count < '40')) && (($gender == 'f') && ($f_count < '50')) || (($r_count < '10') && ($v_count > '29'))) {
							$f_count ++;
							$v_count ++;
							$r_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
						}
				// Lithuania
				if (((($nationality == 'lithuania') && ($l_count < '80')) && (($city == 'kaunas') && ($k_count < '30')) && (($gender == 'm') && ($m_count < '50'))) || (($l_count < '80') && ($k_count > '29'))) {
					// kaunas
							$m_count ++;
							$k_count ++;
							$l_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
				} elseif (((($nationality == 'lithuania') && ($l_count < '80')) && (($city == 'kaunas') && ($k_count < '30')) && (($gender == 'f') && ($f_count < '50'))) || (($l_count < '80') && ($k_count > '29'))) {
							$f_count ++;
							$k_count ++;
							$l_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP		continue;
					// klaipeda
				} elseif (((($nationality == 'lithuania') && ($l_count < '80')) && (($city == 'klaipeda') && ($kl_count < '15')) && (($gender == 'm') && ($m_count < '50'))) || (($l_count < '80') && ($kl_count > '29'))) {
						
							$m_count ++;
							$kl_count ++;
							$l_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
				} elseif (((($nationality == 'lithuania') && ($l_count < '80')) && (($city == 'klaipeda') && ($kl_count < '15')) && (($gender == 'f') && ($f_count < '50'))) || (($l_count < '80') && ($kl_count > '29'))) {
							$f_count ++;
							$kl_count ++;
							$l_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP		continue;
					// panevezys
				} elseif (((($nationality == 'lithuania') && ($l_count < '80')) && (($city == 'panevezys') && ($p_count < '15')) && (($gender == 'm') && ($m_count < '50'))) || (($l_count < '80') && ($p_count > '29'))) {
						
							$m_count ++;
							$p_count ++;
							$l_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
				} elseif (((($nationality == 'lithuania') && ($l_count < '80')) && (($city == 'panevezys') && ($p_count < '15')) && (($gender == 'f') && ($f_count < '50'))) || (($l_count < '80') && ($p_count > '29'))) {
							$f_count ++;
							$p_count ++;
							$l_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;	
					// vilnius
				} elseif (((($nationality == 'lithuania') && ($l_count < '80')) && (($city == 'vilnius') && ($v_count < '40')) && (($gender == 'm') && ($m_count < '50'))) || (($l_count < '80') && ($v_count > '29'))) {
				
							$m_count ++;
							$v_count ++;
							$l_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
				} elseif (((($nationality == 'lithuania') && ($l_count < '80')) && (($city == 'vilnius') && ($v_count < '40')) && (($gender == 'f') && ($f_count < '50'))) || (($l_count < '80') && ($v_count > '29'))) {
							$f_count ++;
							$v_count ++;
							$l_count ++;   
			?>
						<tr>
							<td><?php echo "$id"; ?></td>
							<td><?php echo "$gender"; ?></td>
							<td><?php echo "$city"; ?></td>
							<td><?php echo "$nationality"; ?></td>
						</tr>
			<?PHP continue;
						}
			}
		?>
	</table>
	<?php
			echo "$m_count <br>";
			echo "$f_count <br>";
			echo "$k_count <br>";
			echo "$kl_count <br>";
			echo "$p_count <br>";
			echo "$v_count <br>";
			echo "$l_count <br>";
			echo "$pn_count <br>";
			echo "$r_count <br>";
	?>
</div>
</body>
</html>