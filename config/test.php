<?php
session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['password'];

        //Prevenção de mysql injection
        $declogin = $conexão->prepare("SELECT * FROM usuários WHERE Email = ?");
        $declogin->bind_param("s", $email);

        $declogin->execute();
        $result =  $declogin->get_result();

        if($result-> num_rows > 0)
        {   
            $row = $result->fetch_assoc();        
           
            if(password_verify($senha, $row['Senha'])) 
            {
                $_SESSION['email'] = $email;
                header('Location: ../principal/home.php');
                exit;
            } 
            else {

                header('Location: ../principal/login.php?error=invalid_credentials');
                exit;
            }
        }
        else
        {
            header('Location: ../principal/login.php?error=invalid_credentials');
            exit;
        }

        $declogin->close();

    }
    else
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha'] );
        header('Location: ../principal/login.php');
        exit;

    }

?>