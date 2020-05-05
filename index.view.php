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
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            
            <input type="text" class="form-control" name="name" id="name" placeholder="Name:" value="">
            
            <input type="text" class="form-control" name="email" id="email" placeholder="Email:" value="">
            
            <textarea name="message" id="message" class="form-control" placeholder="Message:"></textarea>
            
            <input type="submit" name="submit" class="btn-btn-primary" value="Send Email">
        
        </form>
    
    </div>
</body>
</html>