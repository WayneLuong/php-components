<?php 
    $msg = '';
    $msgClass = '';

    if (filter_has_var(INPUT_POST, 'submit')){
        echo 'Submitted';
        //Get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //Check required fields
        if(!empty($email) && !empty($name) && !empty($message)){
            //Passed
            //Check email
            if (filter_var($email, FILTER_VALIDATE_EMAIL)===false){
                //Failed
                $msg = 'Please fill in correct email';
                $msgClass='alert-danger';
            }else{
                //Passed
                $msg = 'Submitted';
                $toEmail = 'test@test.com';
                $subject = 'Contact Request Form '. $name;
                $body = '<h1>Name</h1>'. $name. $message.$email;

                //Email headers
                $headers = 'MIME-Version: 1.0'. '\r\n';
                $headers .= 'Content-Type:text/html; charset=UTF-8' . '\r\n';

                $headers .= 'From: ' . $name.$email.'\r\n';

                if(mail($toEmail, $subject, $body, $headers)){
                    $msg = 'EMAIL SENT';
                    $msgClass='alert-success';
                } else{
                    $msg = 'EMAIL NOT SENT';
                    $msgClass='alert-danger';
                }

            }
        }else{
            //failed
            $msg = 'Please fill in all fields';
            $msgClass='alert-danger';
        }
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Contact Form</title>
</head>
<body>
    <nav class="nav navbar-default">
        <div class="container">
            <?php if($msg): ?>
                <div class="alert <?php echo $msgClass; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>
            <div class="navbar-header">
                <a href="" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method='post'>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name='name' class="form-control" value='<?php echo isset($_POST['name']) ? $name : '' ?>'> <!--check if isset keep the form data after submit-->
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name='email' class="form-control" value='<?php echo isset($_POST['email']) ? $email : '' ?>'>
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <input type="text" name='message' class="form-control" value='<?php echo isset($_POST['message']) ? $message : '' ?>'>
            </div>
            <br>
            <button class="btn btn-primary" name='submit'>Submit</button>
        </form>
    </div>
</body>
</html>