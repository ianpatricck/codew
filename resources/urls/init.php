<!DOCTYPE html>
<?php $parsedown = new Parsedown(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@ codeworker</title>
    <link rel="stylesheet" href="resources/css/main.css">
</head>
<body>
    <h1><?php welcome(); ?></h1>

    <script>
        function typeWriter(element) {
            const textArray = element.innerHTML.split('')
            element.innerHTML = ''
            textArray.forEach((char, i) => {
                setTimeout(() => {
                    element.innerHTML += char
                }, 75 * i)
            });
        }

        const title = document.querySelector('h1')

        typeWriter(title)
    </script>
</body>
</html>