<table>
	<tr>
		<td>编号</td>
		<td>学校名</td>
	</tr>
	<?php foreach($name as $key=>$one){?>
		<tr>
			<td><?php echo $key;?></td>
			<td><?php echo $one['schoolname'];?></td>
		</tr>
	<?php }?>
</table>