<!DOCTYPE html>
<html>

<head>
    <title>AJAX with GET Request using jQuery in PHP</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>AJAX with GET Request Example</h1>
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
                url: "<?= $_SERVER['PHP_SELF'] ?>",
                type: "GET",
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

    <?php
    // PHP code to process the AJAX request
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        $message = "Hello, " . $name . "! This is a GET request response from PHP.";
        echo $message;
    }
    ?>
</body>

</html>