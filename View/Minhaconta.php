<div class="paginaConteudo">
    <h2>Minha Conta</h2>
    <br>
    <p><span class="bold">Nome: </span><?= $_SESSION["nomeusuario"]; ?></p>
    <p><span class="bold">E-mail: </span><?= $_SESSION["email"]; ?></p>
    <p><span class="bold">Data do Cadastro: </span><?= date("d/m/Y H:i:s", strtotime($_SESSION["data"])); ?></p>
</div>
