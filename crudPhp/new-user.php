<h1>Novo usuário</h1>

<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="register">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>password</label>
        <input type="password" name="pass" class="form-control">
    </div>

    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="birth_date" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar </button>
    </div>


</form>    