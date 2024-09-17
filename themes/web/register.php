<?php
    echo $this->layout("_theme");
?>
<?php
  $this->start("specific-script");
?>
<script type="module" src="<?= url("assets/js/web/login.js"); ?>" async></script>
<?php
$this->end();
?>


<!-- Formulário de Cadastro de Usuário -->

<!-- Contêiner para as mensagens toast -->
<body>
    <!-- Container do Formulário de Registro -->
    <div class="register-container">
        <form id="formRegister" class="formLogin">
            <label>
                <span>Nome:</span>
                <input type="text" name="name" value="Fábio Santos" required>
            </label>
            <label>
                <span>Email:</span>
                <input type="email" name="email" value="fabiosantos@ifsul.edu.br" required>
            </label>
            <label>
                <span>Senha:</span>
                <input type="password" name="password" value="1234567" required>
            </label>
            <button type="submit">Cadastrar</button>
            <a href="<?= url("login");?>">Sign In</a>
        </form>
    </div>
</body>
</html>
