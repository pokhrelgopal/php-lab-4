<!DOCTYPE html>
<html>

<head>
    <title>Display Text File using AJAX</title>
</head>

<body>
    <h1></h1>
    <div id="textContainer"></div>

    <script>
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "myfile.txt", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var content = xhr.responseText;
                document.getElementById("textContainer").innerText = content;
            }
        };
        xhr.send();
    </script>
</body>

</html>