<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Azubi signin</title>
    </head>
<body>

    <?php 
            if(isset($_POST['submit'])){
                $userName = $_POST['name'];
                $password = $_POST['password'];

                if ($userName !== 'johndoe' && $password !== '12345'){

                    print('Invalid username or password');
                }else{
                    print('Welcome, This is admin!');
                }
            }
    ?>
</body>
</html>