<?php
    $emailError = isset($this->email_err) ? true : false;
    $emailErrorMsg = isset($this->email_err) ? $this->email_err : '';
?>
<section>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card card-body bg-light mt-5">

            <!-- Error alert -->
            <?php if($emailError) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $emailErrorMsg ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <h2>Вход</h2>
            <p>Заполните поля для входа</p>
            <form action="/auth/doLogin" method="POST">
                <div class="form-group">
                    <label for="email">Почта: <sup>*</sup></label>
                    <input type="text" name="email" class="form-control form-control-lg <?= ($emailError) ? 'is-invalid' : '' ?>">
                </div>         

                <div class="form-group">
                    <label for="name">Пароль: <sup>*</sup></label>
                    <input type="password" name="password" class="form-control form-control-lg <?= ($emailError) ? 'is-invalid' : '' ?>">
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Войти" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="/auth/register" class="btn btn-light btn-block">Нет аккаунта? Зарегистрируйтесь</a>
                    </div>
                </div>    
            </form>
        </div>
    </div>
</div>
</section>