<?php 
    session_start();

    require 'functions.php';

    // cek cookie
    if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan idnya
        $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if($key === hash('sha256', $row['username'])) {
            $_SESSION["login"] = true;
        }
    }

    // kalau sudah login, paksa user ke halaman admin
    if (isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    // cek apakah tombol login sudah diklik atau belum
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // cek database
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username =  '$username'");

        $baris = mysqli_num_rows($result);
        // var_dump($baris); die;

        // cek kesesuaian username
        if (mysqli_num_rows($result) === 1) {
            // cek password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                // set session
                $_SESSION["login"] = true;
                
                // cek remember me
                if (isset($_POST['remember'])) {
                    // buat cookie
                    setcookie('id', $row['id'], time()+60);
                    setcookie('key', hash('sha256', $row['username']), time()+60);
                }

                header('Location: index.php');
                exit;
            }
        } 
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        fieldset {
            transform: translateX(40px);
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>

    <?php if(isset($error)) : ?>
        <?php echo "<script> alert('username atau password salah!') </script>"; ?>
    <?php endif; ?>

    <!-- <form method="post" action="">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autofocus>
            </li>

            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>

            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form> -->
    
    <form class="pure-form pure-form-stacked" action="" method="post">
        <fieldset>
            <!-- username -->
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Username" name="username" autocomplete="off" />
            <span class="pure-form-message">This is a required field.</span>

            <!-- password -->
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password" name="password"/>
            
            <!-- remember me -->
            <label for="stacked-remember" class="pure-checkbox">
                <input type="checkbox" id="stacked-remember" name="remember" /> Remember me
            </label>

            <!-- button -->
            <button type="submit" class="pure-button pure-button-primary" name="login">Sign in</button>
        </fieldset>
    </form>
</body>
</html>