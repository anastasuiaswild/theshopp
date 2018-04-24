<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <h1>Кабинет пользователя</h1>

                <h3>Привет, <?php echo ucfirst($user['name']);?>!</h3>
                <ul>
                    <li><a href="/cabinet/edit">Редактировать данные</a></li>
                    <li><a href="/cabinet/history">Список покупок</a></li>
                    <?php if(AdminBase::checkAdmin()){?>
                        <a href="/admin">Войти в АдминПанель</a>
                    <?php }?>
                </ul>

            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>