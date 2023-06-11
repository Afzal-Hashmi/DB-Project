<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        .box {
            width: 300px;
            padding: 60px 90px;
            border-radius: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-image: linear-gradient(rgba(58, 78, 116, 0.8), rgba(58, 78, 116, 0.8));
            background-size: cover;
            background-repeat: no-repeat;
            background-position-y: center;
            text-align: center;
        }

        .box h2 {
            color: white;
            text-transform: uppercase;
            font-weight: 500;
            white-space: nowrap;
        }

        .box h3 {
            color: white;
            text-transform: uppercase;
            font-weight: 500;
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

        .container {
            display: flex;
            justify-content: center;
        }

        .topleft {
            position: absolute;
            color: whitesmoke;
            margin-left: -460px;
            margin-top: -30px;
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
    </style>

    <title>OUTDOORS</title>
</head>

<body>
    <div class="banner">
        <div class="container">
            <div class="topleft">
                <h1 id="OUTDOORS">OUTDOORS</h1>
                <p id="Is">Is Where Life Happen</p>
            </div>
        </div>

        <form class="box" action="" method="GET">
            <h2>Muhammad Afzal Hashmi </h2><br>
            <h3>(F2021266252)</h3><br>
            <h2>Muhammad Yousaf </h2><br>
            <h3>(F2021266253)</h3><br>
            <h2 style="margin-left: -25px;">Muhammad Hammad Razzaq </h2><br>
            <h3>(F2021266295)</h3><br>
            <h2 style="margin-left: -30px;">Muhammad Waleed</h2>
            <h3>(F2021266633)</h3><br>
        </form>

        <div class="bottomright">
            <a href="./index.php">
                <button class="button button1">Return</button>
            </a>
        </div>
        
    </div>
</body>

</html>