<?php
$data = ModuleHelper::getMainController ( "show_dbtrack" )->getData ();

?>
<table class="tablesorter">
	<thead>
		<tr>
			<th><?php translate("component");?></th>
			<th><?php translate("name");?></th>
			<th><?php translate("date");?></th>
		</tr>
	</thead>
	<tbody>
<?php foreach($data as $dataset){?>
<tr>
			<td><?php Template::escape($dataset->component);?></td>
			<td><?php Template::escape($dataset->name);?></td>
			<td><?php Template::escape($dataset->date);?></td>
		</tr>
<?php }?>

</tbody>
</table>