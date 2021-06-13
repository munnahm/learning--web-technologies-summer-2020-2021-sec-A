<table border="1" width="500px">
	<tr>
		<td>
			<?php
			for($i=1;$i<=3;$i++){
				for($j=1;$j<=$i;$j++){
					echo "*"." ";
				}
				echo "<br>";
			}
			?>
		</td>
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