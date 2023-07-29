<?php
class InvalidAgeException extends Exception {
    public function errorMessage() {
        return "Invalid age. Age should be between 18 and 60.";
    }
}

function checkAge($age) {
    if ($age < 18 || $age > 60) {
        throw new InvalidAgeException();
    }
    echo "Age is valid: $age<br>";
}

try {
    $age = 25;
    checkAge($age);

    $age = 15;
    checkAge($age);
} catch (InvalidAgeException $e) {
    echo "Caught custom exception: " . $e->errorMessage() . "<br>";
} catch (Exception $e) {
    echo "Caught general exception: " . $e->getMessage() . "<br>";
}
