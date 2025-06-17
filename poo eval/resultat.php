<?php
session_start();
if(isset($_SESSION['post'])){
    echo '<pre>';
    print_r($_SESSION['post']);
    echo '</pre>';
}