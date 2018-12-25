<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22/12/18
 * Time: 22:13
 */

include("header.php");
if (isset($_GET['login']) && $_GET['login'] == true) {
    ?>
    <p class="alert alert-success">Logado com sucesso!</p>
    <?php
} else if (isset($_GET['login']) && $_GET['login'] == false) {
    ?>
    <p class="alert alert-danger">Usuário ou senha inválida!</p>
    <?php
}
?>
    <h1>
        Bem vindo!
    </h1>

    <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="container">
            <table class="table">
                <tr>
                    <td> Email</td>
                    <td><input class="form-control" type="email" name="email"</td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha"></td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary">Logar</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
<?php
include("footer.php");