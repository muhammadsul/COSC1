
<?php require_once '../app/views/templates/header.php'?>
<h2> finde reminders</h2>
<table class='table table-striped table-condensed'>
	<tr>
		<th>Subject</th>
		<th>/username</th>

	</tr>
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['subject']?></td>
            <td><?=$items['username']?></td>
			</td>
        </tr>
    <?php }?>
</table>
<?php require_once '../app/views/templates/footer.php' ?>