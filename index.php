<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Log In</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        
<label><ion-icon name="mail-outline"></ion-icon>   Username</label><br>
<input type="text" name="uname" placeholder="   Username"><br>

<label><ion-icon name="lock-open-outline"></ion-icon>   Password</label><br>
<input type="password" name="password" placeholder="   Password"><br>
<button type="submit">Login</button>
<a href="">Forgot password?</a>
    </form>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>