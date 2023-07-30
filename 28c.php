<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["name"])) {
    $name = $_POST["name"];
    $message = "Hello, " . $name . "! This is a POST request response from PHP.";
    echo $message;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>AJAX with POST Request using jQuery in PHP</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>AJAX with POST Request Example</h1>
    <input type="text" id="nameInput" placeholder="Enter your name">
    <button id="submitButton">Submit</button>
    <div id="responseContainer"></div>

    <script>
        $(document).ready(function() {
            $("#submitButton").click(function() {
                var name = $("#nameInput").val();
                if (name === "") {
                    alert("Please enter your name.");
                    return;
                }

                $.ajax({
                    url: "<?php echo $_SERVER['PHP_SELF']; ?>",
                    type: "POST",
                    data: {
                        name: name
                    },
                    success: function(response) {
                        $("#responseContainer").text("Success");
                    },
                    error: function(xhr, status, error) {
                        console.log("Error:", status, error);
                    }
                });
            });
        });
    </script>
</body>

</html>