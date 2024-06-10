<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login_cad.css">
    <!-- Icone na pagina -->
    <link rel="icon" href="images/logo/Black & White Minimalist Aesthetic Initials Font Logo.jpg" type="image/png">

    <!-- Inclua os links para as bibliotecas Bootstrap CSS e JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fonte -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Link do bootsrap do zap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">
</head>
<body>

<div class="container" >  
    <div class="content">      
      <div id="login">
        <form method="post" action=""> 
          <h1>Seja bem-vindo!</h1> 
          <p> 
            <label for="emal">Seu Email</label>
            <input id="email" name="email" required="required" type="email" placeholder="Digite seu email"/>
          </p>
           
          <p> 
            <label for="senha">Sua Senha</label>
            <input id="senha" name="senha" required="required" type="password" placeholder="Digite sua senha" /> 
          </p>
           
         
          <p> 
            <input type="submit" value="Logar" /> 
          </p>

        </form>
      </div>

    </body>
</html>