<?php
try {
    $result = 10 / 2;
    echo "Result: " . $result . "<br>";

    $result = 8 / 0;
    echo "Result: " . $result . "<br>";
} catch (Exception $e) {
    echo "Caught Exception: " . $e->getMessage() . "<br>";
} finally {
    echo "Finally block executed.<br>";
}

echo "After try-catch block.<br>";
