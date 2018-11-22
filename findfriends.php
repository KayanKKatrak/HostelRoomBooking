<!DOCTYPE html>
<html>

    <head>

        <title>Find Roomies</title>

        <link rel="stylesheet" type="text/css" href="style1.css">

        <style>
            body {
                background-image: url("friends.jpg");
            }

            #findfriends {
                width: 600px;
            }

            #inputfriends {
                margin: 20px;
            }

            h1 {
                color: #000000;
            }

            a {
                font-size: 20px;
                float: right;
                margin: 20px;
                color: #000000;
            }
        </style>

    </head>

    <body>

        <!--dropdown friends-->

        <div class="container" id="findfriends">
            <a href="thanks.php">Skip &#x27A0;</a>
            <h1> Find Roomies </h1>
            <form method="POST" action="thanks.php">
                <input type="hidden" name="srcemail" value=<?php echo $_POST['email'];?>>
                <h3> How it Works: </h3>
                <p> Enter a friend's email ID and if that friend has
                already registered, he'll be sent an invite to be your
                roommate </p>
                <input type="text" name="destemail" id="inputfriends" placeholder="Search for Friends" list="friends" /><br />
                <datalist id="friends">
                    <?php
                        $domain = 'localhost:3306';
                        $username = 'admin';
                        $password = 'abcdefgh';
                        $conn = mysqli_connect($domain, $username, $password, 'WTproject');
                        if (!$conn) {
                            echo ('Connection failed: ' .  mysqli_connect_error());
                        }


                        $res = mysqli_query($conn, 'select email from people;');

                        while ($email = mysqli_fetch_assoc($res)) {
                            echo "<option>" . $email['email'] . "</option>";
                        }

                        $res = mysqli_query($conn, "insert into people values('". $_POST['name'] . "', '" .  $_POST['email'] . "');");

                        mysqli_close($conn);
                    ?>
                </datalist>
                <input type="submit" value="Send Invite" /><br />
            </form>
        </div>


    </body>

</html>
