<?php 
/*
 * Sistemas de Gestão para Oficinas Mecânicas
 * edineymartinstorres@gmail.com
 * Agosto/2021
 */
@session_start();
@session_destroy();
header('location:index.php');
 ?>