<?php

ob_start();
include 'index.php';
$output = ob_get_clean();

if ($output === "Hola Mundo DevOps PHP") {
    echo "TEST PASSED\n";
    exit(0);
} else {
    echo "TEST FAILED\n";
    exit(1);
}