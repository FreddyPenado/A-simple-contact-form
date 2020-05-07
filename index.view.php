<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stilos.css">
    <title>Formulario de contacto</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            
            <input type="text" class="form-control" name="name" id="name" placeholder="Name:" value="<?php if(!$enviado && isset($name)) echo $name ?>">
            
            <input type="text" class="form-control" name="email" id="email" placeholder="Email:" value="<?php if(!$enviado && isset($email)) echo $email ?>" >
            
            <textarea name="message" id="message" class="form-control" placeholder="Message:"><?php if(!$enviado && isset($message)) echo $message ?></textarea>

            <?php if (!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div> 
            <?php elseif ($enviado):?> 
                <div class="alert success">
                    <p>Message send succesfully!</p>
                </div> 
            <?php endif ?>

            <input type="submit" name="submit" class="btn-btn-primary" value="Send Email">
        
        </form>
    
    </div>
</body>
</html>