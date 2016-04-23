<?php
require 'form.php';

$form = new Form(array('username' => 'Roger'));


echo $form->input('username');
echo $form->input('password');
echo $form->submit();



$form = new Form();


echo $form->input("Meh");
echo $form->input("Meh");
echo $form->input("Meh");
echo $form->input("Meh");
echo $form->input("Meh");
echo $form->submit();

 ?>
