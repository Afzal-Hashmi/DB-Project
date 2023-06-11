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
            padding: 40px;
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

        .box h1 {
            color: white;
            text-transform: uppercase;
            font-weight: 500;
        }

        .box input[type="text"],
        .box input[type="password"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid rgb(138, 57, 4);
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }

        .box input[type="text"]:focus,
        .box input[type="password"]:focus {
            width: 280px;
            border-color: rgb(138, 57, 4);
        }

        .box input[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid rgb(138, 57, 4);
            padding: 14px 40px;
            outline: none;
            color: rgb(255, 255, 255);
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }

        input::placeholder {
            color: white;
        }

        .box input[type="submit"]:hover {
            background: rgb(138, 57, 4);
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

        <form class="box" action="./backend/loginuser.php" method="POST">
            <h1>LOGIN</h1>

            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Login">
        </form>

        <div class="bottomright">
            <a href="./index.php">
                <button class="button button1">Return</button>
            </a>
        </div>

    </div>
</body>

</html>