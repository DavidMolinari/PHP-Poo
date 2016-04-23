<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  </head>
<body>
  <h3>Let's Form :</h4>
</body>
<?php

require 'form.php';
require 'Text.php';
require 'BootstrapForm.php';


$form = new BootstrapForm($_POST)
 ?>


<form action="#" method="post">
  <?php
  echo $form->input('username');
  echo $form->input('password');
  echo $form->submit();

  $form->submit();

   ?>
</form>
