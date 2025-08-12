<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');

        body {
            background: linear-gradient(to right, rgb(253, 247, 243) 30%, rgb(215, 231, 239) 50%);
            font-family: 'Quicksand', sans-serif;
        }

        #mytext {
            font-weight: bold;
            font-size: x-large;
            text-align: center;
            padding: 10%;
        }

        .spinner-square {
            display: flex;
            flex-direction: row;
            width: 100px;
            height: 120px;
            position: absolute;
            top: 40%;
            left: 45%;
            justify-content: center;
            align-items: center;
        }

        .spinner-square>.square {
            width: 17px;
            height: 80px;
            margin: auto auto;
            border-radius: 4px;
        }

        .square-1 {
            animation: square-anim 1200ms cubic-bezier(0.445, 0.05, 0.55, 0.95) 0s infinite;
        }

        .square-2 {
            animation: square-anim 1200ms cubic-bezier(0.445, 0.05, 0.55, 0.95) 200ms infinite;
        }

        .square-3 {
            animation: square-anim 1200ms cubic-bezier(0.445, 0.05, 0.55, 0.95) 400ms infinite;
        }

        .square-4 {
            animation: square-anim 1200ms cubic-bezier(0.445, 0.05, 0.55, 0.95) 600ms infinite;
        }

        @keyframes square-anim {
            0% {
                height: 80px;
                background-color: rgb(111, 163, 240);
            }

            20% {
                height: 80px;
            }

            40% {
                height: 120px;
                background-color: rgb(111, 200, 240);
            }

            80% {
                height: 80px;
            }

            100% {
                height: 80px;
                background-color: rgb(111, 163, 240);
            }
        }
    </style>
    <script>
        setTimeout(function () {
            window.location.reload();
            window.location.href = 'confirm.php';
        }, 5000);
    </script>
</head>

<body>
    <p id="mytext">Please Wait Until Your Payment is being Processed.....</p>
    <div class="spinner-square">
        <div class="square-1 square"></div>
        <div class="square-2 square"></div>
        <div class="square-3 square"></div>
        <div class="square-4 square"></div>
    </div>
    <h4 style="text-align:center;padding:10%;">* Do not press the refresh or the go back button, this will incur in
        multiple transactions on your Card.</h4>
</body>

</html>