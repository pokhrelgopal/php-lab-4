<?php
try {
    $randomNumber = rand(0, 2);

    if ($randomNumber === 0) {
        throw new Exception("An unknown error occurred.");
    } elseif ($randomNumber === 1) {
        throw new InvalidArgumentException("Invalid argument provided.");
    } else {
        throw new RuntimeException("Runtime error occurred.");
    }
} catch (InvalidArgumentException $e) {
    echo "Caught InvalidArgumentException: " . $e->getMessage() . "<br>";
} catch (RuntimeException $e) {
    echo "Caught RuntimeException: " . $e->getMessage() . "<br>";
} catch (Exception $e) {
    echo "Caught Exception: " . $e->getMessage() . "<br>";
}
