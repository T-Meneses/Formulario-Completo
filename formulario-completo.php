
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname" placeholder="Digite seu nome" required>
            <br>
            E-mail: <input type="email" name="email" placeholder="Digite seu email" required>
            <br>
            Senha: <input type="password" name="senha" placeholder="Digite sua senha" required>
            <br>
            <select>
                <option selected disabled value="">Selecione um estado</option>
                <option value="Distrito-Federal">DF</option>
                <option value="São Paulo">SP</option>
                <option value="Santa Catarina">SC</option>
                <option value="Rio de Janeiro">RJ</option>
                <option value="Rondônia">RO</option>
                <option value="Rio Grande do Sul">RS</option>
            </select>
            <br>
            Envie para nós, sua sugestão<br>
            ou crítica sobre o site:<br>
            <textarea rows="5" cols="20" placeholder="Digite a sua mensagem..."></textarea><br>
            Marque o(s) laboratório(s) que você deseja receber informações:<br>
                <input type="checkbox" id="LAFES" name="LAFES" value="laboratório">
                <label for="LAFES">Laboratório LAFES</label><br>
                <!---->
                <input type="checkbox" id="LGR" name="LGR" value="laboratório">
                <label for="LGR">Laboratório LGR</label><br>
                <!---->
                <input type="checkbox" id="LIS" name="LIS" value="laboratório">
                <label for="LIS">Laboratório LIS</label><br>
                <!---->
                <input type="checkbox" id="LQS" name="LQS" value="laboratório">
                <label for="LQS">Laboratório LQS</label><br>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST['fname'];
                if(empty($name)){
                    echo"Este campo está vazio";
                } else {
                    echo $name;
                }
            }
        ?>
    </body>
</html>