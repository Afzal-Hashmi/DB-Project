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
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(../img/pexels-photo-1598505.jpeg);
            background-size: cover;
            background-position: center;
        }

        .navbar {
            width: 85%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar ul li {
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;
        }

        .navbar ul li a {
            text-decoration: none;
            font-size: 20px;
            color: white;
            text-transform: uppercase;
        }

        .navbar ul li::after {
            content: '';
            height: 3px;
            width: 0;
            background: rgb(255, 153, 0);
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.5s;
        }

        .navbar ul li:hover::after {
            width: 100%;

        }

        .content {
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            color: white;
        }

        .content h1 {
            font-size: 70px;
            margin-top: 80px;

        }

        .content p {
            margin: 5px auto;
            font-weight: 100;
            font-size: 40px;
            line-height: 25px;
        }

        button {
            width: 200px;
            padding: 15px;
            text-align: center;
            margin: 20px 10px;
            border-radius: 25px;
            font-weight: bold;
            font-size: 20px;
            border: 2px solid rgb(255, 153, 0);
            color: white;
            background: transparent;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        span {
            background: rgb(255, 153, 0);
            height: 100%;
            width: 0;
            border-radius: 25px;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
            transition: 0.5s;
        }

        button:hover span {
            width: 100%;

        }

        button:hover {
            border: none;
        }

        #home {
            color: rgb(255, 153, 0);
        }

        #Checkout {
            color: rgb(255, 153, 0);
        }

        h1 {
            white-space: nowrap;
            display: inline-block;
        }
    </style>
</head>

<body>

    <div class="banner">
        <div class="navbar">
            <img src="0" alt="">

            <ul>
                <li><a href="./cust_home.php" id="home">Home</a></li>
                <li><a href="./custsearch.php" id="Search">Search</a></li>
                <li><a href="./custcheckout.php" id="Checkout">Checkout</a></li>
                <li><a href="./index.php" id="logout">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h1 style="color:rgb(255, 153, 0)">W</h1>
            <h1>E</h1>
            <h1 style="color:rgb(255, 153, 0)">L</h1>
            <h1>C</h1>
            <h1 style="color:rgb(255, 153, 0)">O</h1>
            <h1>M</h1>
            <h1 style="color:rgb(255, 153, 0)">E</h1>
            <p>OUTDOORS</p>
            <div>
                <a href="./custsearch.php">
                    <button type="button"><span></span>Search</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>