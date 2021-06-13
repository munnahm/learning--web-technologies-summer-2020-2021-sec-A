<?php
	$a=array(
	array(1,2,3,'A'),
	array(1,2,'B','C'),
	array(1,'D','E','F')
	);
?>
<table border="1" width="550px">
	<tr>
		<td>The array to declare</td>
		<td>Shape to print</td>
	</tr>
	<tr height="160px">
		<td><!-- 1,0 -->
			<table border="1" align="center" width="180px" height="100px" style="background-color:Lightgray;">
				<?php
				for($i=0;$i<3;$i++){
					echo "<tr>";
					for($j=0;$j<4;$j++){
						echo "<td>".$a[$i][$j]."</td>";
					}
					echo "</tr>";
				}
				?>
			</table>
		</td>
		<td><!-- 1,1 -->
			<table border="1" align="center" width="300px" height="100px" style="background-color:Lightgray;">
				<tr >
					<td>
					<?php
					for($i=1;$i<=3;$i++){
						for($j=1;$j<=4-$i;$j++){
							echo $j." ";
						}
						echo "<br>";
					}
					?>
					</td>
					<td>
					<?php
					for($i=1;$i<=3;$i++){
						for($j=1;$j<=$i;$j++){
							echo chr($j+63+$i)." ";
						}
						echo "<br>";
					}
					?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>