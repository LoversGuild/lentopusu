<?php

function handleException($exception) {
  $error = $exception->getMessage();
  require('./include/views/error.php');
  die();
}

function handleError( $num, $str, $file, $line, $context = null) {
    handleException(new ErrorException($str, 0, $num, $file, $line ));
}

set_error_handler('handleError');
set_exception_handler('handleException');
