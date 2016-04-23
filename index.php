<?php

require 'form.php';
require 'Text.php';

$form = new Form($_POST)
 ?>
<form action="#" method="post">
  <?php

var_dump(Text::withZero(10));

  echo $form->input('username');
  echo $form->input('password');
  echo $form->submit();

  $form->submit();

   ?>
</form>
