<?php require_once '../app/views/templates/header.php'?>

<h2>Reminder Page</h2>

<table class='table table-striped table-condensed'>
	<tr>
		<th>Subject</th>
		<th>Action</th>
	</tr>
	
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['subject']?></td>
			<td><a href="/Reminders/remove/<?=$items['id']?>">Remove</a> | 
				<a href="/Reminders/<?=$items['id']?>">View</a> | 
				<a href="/Reminders/update/<?=$items['id']?>">Update</a>
				<a href="/Reminders/create/<?=$items['id']?>">create</a>

			</td>
        </tr>
    <?php }?>

</table>