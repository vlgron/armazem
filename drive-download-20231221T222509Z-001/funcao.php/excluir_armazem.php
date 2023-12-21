<?php

require 'repositorio.class.php'

$repositorio = removerArmazem($_REQUEST['codigo']);

header('location: index.php');

?>                              