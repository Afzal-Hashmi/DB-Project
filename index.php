<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTDOORS</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .banner {
            height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(../img/pexels-mnz-1619655\ \(1\).jpg);
            background-size: cover;
            background-position: center;
        }

        .container {
            position: absolute;
        }

        .topleft {
            position: absolute;
            color: whitesmoke;
        }

        #OUTDOORS {
            position: absolute;
            top: 50px;
            left: 90px;
            height: 0;
            font-size: 50px;
            line-height: normal;
        }

        #Is {
            position: absolute;
            top: 105px;
            left: 105px;
            font-size: 27px;
            word-spacing: 1px;
            white-space: nowrap;
        }

        .bottomright {
            position: absolute;
            bottom: 100px;
            right: 200px;
            font-size: 18px;
        }

        .button {
            color: whitesmoke;
            padding: 12px 36px;
            font-size: 20px;
            background: none;
            border-radius: 10px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-color: rgb(138, 57, 4);
            border-style: solid;
        }

        .button1 {
            background-color: none;
            color: whitesmoke;
        }

        .button1:hover {
            background: rgb(138, 57, 4);
            color: whitesmoke;

        }

        .bottomleft {
            position: absolute;
            bottom: 10px;
            left: 20px;
            font-size: 1px;
        }

        .create {
            color: whitesmoke;
            padding: 6px 12px;
            font-size: 20px;
            background: none;
            border-radius: 10px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-color: transparent;
            border-style: solid;
        }

        .button2 {
            background-color: none;
            color: whitesmoke;
        }

        .button2:hover {
            background: rgb(138, 57, 4);
            color: whitesmoke;

        }
    </style>
</head>

<body>
    <div class="banner">
        <div class="container">
            <div class="topleft">
                <h1 id="OUTDOORS">OUTDOORS</h1>
                <p id="Is">Is Where Life Happen</p>
            </div>
        </div>

        <div class="bottomleft">
            <a href="./website/creater.php">
                <button class="create button2">BY</button>
            </a>
        </div>

        <div class="bottomright">
            <a href="./website/login.php">
                <button class="button button1">Login</button>
            </a>
        </div>
    </div>
</body>

</html>