<!DOCTYPE html>
<html>

    <head>

        <title>Status Check</title>

        <link rel="stylesheet" type="text/css" href="style1.css">

        <style>
            body {
                background-image: url("status.jpeg");
            }

            h1 {
                color: #000000;
            }

            #findfriends {
                width: 800px;
            }

            #inputfriends {
                margin: 20px;
            }

            #registerhere {
                font-size: 20px;
                float: right;
                margin: 20px;
                color: #000000;
            }

            #check {
                width: 150px;
            }
        </style>

    </head>

    <body>

        <div class="navbar">
            <a href="index.html" id="back" style="color:white">&larr;Back</a>
        </div>

        <!--dropdown friends-->
        <div class="container" id="findfriends">
            <h1> You have recieved invites from: </h1>
                <?php
                    $domain = 'localhost:3306';
                    $username = 'admin';
                    $password = 'abcdefgh';
                    $conn = mysqli_connect($domain, $username, $password, 'WTproject');
                    if (!$conn) {
                        echo ('Connection failed: ' .  mysqli_connect_error());
                    }

                    $res = mysqli_query($conn, "select source from requests where destination='" . $_POST['email'] .  "';");

                    while ($email = mysqli_fetch_assoc($res)) {
                        echo "<h3>" . $email['source'] . "</h3>";
                    }

                    mysqli_close($conn);
                ?>
        </div>


    </body>

</html>
