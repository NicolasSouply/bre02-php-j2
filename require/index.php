<?php 




if(isset($_GET["route"]) && !empty($_GET["route"])) {
    
    $route = $_GET["route"];
} else {
    $route = null;
}

// ici le require :)
require "layout.phtml";
?>