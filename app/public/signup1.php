<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
    <h1>Azubi Docker Log in </h1>
    <form name="login" action="signup.php" method="post" autocomplete="off">
        <div>
            <label id="name" for="name" name="name">Username</label>
            <input type="text" name="name" placeholder="user name">
    </div>
        <div>
            <label for="password" name="password">password</label>
            <input id="password" type="password" name="password">
    </div>
    <div>
        <p><input type="submit" name="submit" value="Submit"></p>
        <!-- <button>Submit</button> -->
    </div>
    </form>
</body>
</html>