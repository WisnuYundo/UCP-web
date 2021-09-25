<!-- replika mirp credit TheJay-->
<?php
session_start();
session_unset();
session_destroy();
header('location: halaman');
?>