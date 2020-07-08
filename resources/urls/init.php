<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeworker</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial;
        }

        h1 {
            margin-top: 17%;
            text-align: center;
            color: gray;
        }

        h1::after {
            content: '_';
            margin-left: 5px;
            opacity: 1;
            animation: flashes 1s infinite;
        }

        @keyframes flashes {
            0%, 100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }
    </style>
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