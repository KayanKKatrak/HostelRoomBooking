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
        </style>

    </head>

    <body>

        <!--dropdown friends-->
        <div class="container" id="findfriends">
            <form method="POST" action="thanks.html">
                <input type="text" name="email" id="inputfriends" placeholder="Search for Friends" list="friends" /><br />
                <datalist id="friends">
                    <?php
                        $domain = 'localhost:3306';
                        $username = 'admin';
                        $password = 'abcdefgh';
                        $conn = mysqli_connect($domain, $username, $password, 'WTproject');
                        if (!$conn) {
                            echo ('Connection failed: ' .  mysqli_connect_error());
                        }


                        /*if ($query = mysqli_prepare($conn, "select email from people;")) {
                            mysqli_stmt_bind_param($query, "s", $_POST['email']);
                            mysqli_stmt_execute($query);
                            mysqli_stmt_bind_result($query, $friends);
                            mysqli_stmt_close($query);
                        }*/

                        $res = mysqli_query($conn, 'select email from people;');

                        while ($email = mysqli_fetch_assoc($res)) {
                            echo "<option>" . $email['email'] . "</option>";
                        }

                        mysqli_close($conn);
                    ?>
                </datalist>
                <input type="submit" value="Invite as Roomie" /><br />
            </form>
        </div>

    </body>

</html>
