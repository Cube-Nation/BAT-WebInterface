<form class="form-inline">
<h1 style="text-align: center;">
<span>Kick Liste</span> - Sortierung
<select class="form-control selectSortBy">
<option value="player" <?php if($this->getSortingColumn() == "player")
	echo"selected='selected'"; ?>>player</option>
	<option value="server" <?php if($this->getSortingColumn() == "server")
		echo"selected='selected'"; ?>>server</option>
	<option value="reason" <?php if($this->getSortingColumn() == "reason")
		echo"selected='selected'"; ?>>reason</option>
	<option value="staff" <?php if($this->getSortingColumn() == "staff")
		echo"selected='selected'"; ?>>staff</option>
	<option value="date" <?php if($this->getSortingColumn() == "date")
		echo"selected='selected'"; ?>>date</option>
</select>
</h1>
</form>
<table class="table table-bat table-striped">
	<thead>
		<tr>
			<th>Player</th>
			<th>Server</th>
			<th>Reason</th>
			<th>Staff</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	if (empty($data)) {echo "<tr><td colspan='100'>Es gibt keine Kicks.</td></tr>";}
	else{
	foreach ($data as $entry){
	$kick = $entry->getData();
	?>
		<tr>
			<td><?php echo $kick['headImg'] . $kick['player'];?></td>
			<td><?php echo $kick['server'];?></td>
			<td><?php echo $kick['reason'];?></td>
			<td><?php echo $kick['staff'];?></td>
			<td><?php echo $kick['date'];?></td>
		</tr>
			<?php }}
	?>
</tbody>
</table>