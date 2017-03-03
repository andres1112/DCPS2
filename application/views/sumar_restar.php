<!DOCTYPE html>

<html>
<body>
<h1>Suma y Resta de 2 numeros</h1>

<?= form_open('Sumar_restar/result'); ?>
<div>
<?= form_label("Ingrese Numero 1: ","number1"); ?>
<?= form_input("number1", "",['id' => 'number1']); ?>
</div>
<div>
<br>
<?= form_label("Ingrese Numero 2: ","number2"); ?>
<?= form_input("number2", "",['id' => 'number2']); ?>

</div>
<br>
<?= form_submit("suma","Suma"); ?>
<?= form_submit("resta","Resta"); ?><br>
<?= form_close(); ?>

<p>
<?php if (isset($result)){
		?>El resultado es: <?php
		echo $result;
		}?>	
</p>

</body>

</html>
