<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {
            color: red;
        }
    </style>    
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Formulário PHP</h1>

        <p class="error">*Obrigatório</p>

        Nome: <input  name="nome" type="text"> 
        <span class="error">*</span><br><br>

        Email: <input  name="email" type="text">
        <span class="error">*</span><br><br>

        Website: <input name="website" type="text">
        <span class="error">*</span><br><br>

        Comentário:
        <textarea  name="comentario" cols="30" rows="10"></textarea>
        <br><br>
        Gênero: 
        <input name="genero" value="masculino" type="radio"> Masculino
        <input name="genero" value="feminino" type="radio"> Feminino
        <input name="genero" value="outros" type="radio"> Outro

        <br>
        <button name="enviado" type="submit">Enviar</button>
        <br>
        <h1>Dados Enviados</h1>
        <?php 

        if(isset($_POST['enviado']))
        {
            if(empty($_POST['nome']) || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100)
            {
                echo "<p class=\"error\">Preencha o campo nome*</p>";
                die();
            }
            if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                echo "<p class=\"error\">Preencha o campo email*</p>";
                die();
            }
            if(!empty($_POST['website']) && !filter_var($_POST['website'], FILTER_VALIDATE_URL))
            {
                echo "<p class=\"error\">Preencha corretamente o campo Website*</p>";
                die();
            }
            
            $genero = "Não selecionado";
            if(isset($_POST['genero']))
            {
               $genero = $_POST['genero'];
               if($genero != 'masculino' && $genero != 'feminino' && $genero != 'outros')
               {
                echo "<p class=\"error\">Preencha corretamente o campo Gênero*</p>";
                die();
               }
            }
             echo "<p><b>Nome</b></p>" . $_POST['nome'] . "<br>";
             echo "<p><b>Email</b></p>" . $_POST['email'] . "<br>";
            echo "<p><b>Website</b></p>" . $_POST['website'] . "<br>";
            echo "<p><b>Comentario</b></p>" . $_POST['comentario'] . "<br>";
            echo "<p><b>Gênero</b></p>" . $genero . "<br>";
            
        }
        ?>
    </form>
</body>
</html>