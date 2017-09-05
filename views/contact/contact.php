<div class="contactForm"><h1>Contact</h1>
<?php echo validation_errors(); ?>
<?php

	echo form_open(current_url().'?c=contact'); 

?>

<table>
<?php

	echo "<tr>
		<td>" . form_label('Nume: ', 'name') . "</td>
		<td>" . form_input('name', set_value('name')) . "</td>
		</tr>";

	echo "<tr>
		<td>" . form_label('Email: ', 'email'). "</td>
		<td>" . form_input('email', set_value('email')) . "</td>
		</tr>";

	echo "<tr>
		<td>".form_label('Mesaj: ', 'message'). "</td>
		<td><textarea name='message'>" . set_value("message") . "</textarea></td>
		</tr>";
	
	echo "<tr>
		<td>".form_submit('submit', 'Trimite mesajul') . "</td>
		</tr>";

?>
</table>

<?
	echo form_close();
?>

</div>