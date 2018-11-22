<html>

    <head>
      <title>Thanks</title>

      <link rel="stylesheet" type="text/css" href="style1.css">
      <link rel="stylesheet" type="text/css" href="ThankCSS.css">

      <style>
        body {
            background-image: url("connetwork.png");
            background-size: cover;
        }

        h1 {
            font-size: 60px;
            margin: 10px;
        }

        .container {
            width: 60%;
            position: absolute;
            top: 100px;
            left: 300px;
        }
      </style>
    </head>

    <body>

        <div class="hbtn">
            <button class="button button1"id="homebtn"onclick="Home()">Home</button>
            <script>
                s=getElementById("homebtn")
                s.style.backgroundColor = "F7DC6F";
                function Home()
                {window.location = 'index.html';}
            </script>
        </div>

        <div class = "page" id ="page-1" >
            <div class="text1">
              <h1>Thanks for Registering <?php echo $_POST['srcemail'];?></h1>
              <p style="color:white"> You can check your status on the home page. </p>
            </div>
        </div>

        <?php
            $domain = 'localhost:3306';
            $username = 'admin';
            $password = 'abcdefgh';
            $conn = mysqli_connect($domain, $username, $password, 'WTproject');
            if (!$conn) {
                echo ('Connection failed: ' .  mysqli_connect_error());
            }

            if (isset($_POST['srcemail'])) {
                $res = mysqli_query($conn, "insert into requests values('" . $_POST['srcemail'] . "', '" .  $_POST['destemail'] . "');");
            }

            mysqli_close($conn);
        ?>

    </body>
</html>
