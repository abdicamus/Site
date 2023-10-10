<div class="row">
    <div class="col-md-6 py-5">
        <div class="pb-lg-5">
            <div class="card shadow-sm">
                <div class="card-body p-lg-5">
                    <h1 class="mb-4 fw-light">Регистрация</h1>
                    <div class="pt-lg-3">
                        <form class="simple_form new_user" id="new_user"
                            novalidate="novalidate" action="/register" accept-charset="UTF-8" method="post">
                            <div class="mb-2 email required user_email"><label
                                    class="form-label email required" for="user_email">Электронная почта
                                    <span title="обязательно">*</span></label><input
                                    class="form-control string email required" id="user_email"
                                    autocomplete="username" autofocus="autofocus" type="email"
                                    name="user[email]"></div>
                            <div class="mb-2 string optional user_first_name"><label
                                    class="form-label string optional"
                                    for="user_first_name">Имя</label><input
                                    class="form-control string optional" type="text"
                                    name="user[name]" id="user_first_name">
                            </div>
                            <div class="mb-2 password optional user_password"><label
                                    class="form-label password optional"
                                    for="new-password">Пароль</label><input
                                    class="form-control password optional" id="new-password"
                                    autocomplete="new-password" type="password"
                                    name="user[password]"></div>
                            <input type="submit" name="commit" value="Зарегистрироваться"
                                class="btn btn-primary w-100" data-disable-with="Зарегистрироваться">
                            
                            <div class="mt-3">
                                <div class="small text-body-secondary lh-sm">
                                    Отправляя форму, вы принимаете «<a href="/pages/personal_data"
                                        class="text-body-secondary" target="_blank"
                                        rel="nofollow">Соглашение об обработке персональных данных</a>» и
                                    условия «<a href="/pages/offer" class="text-body-secondary"
                                        target="_blank" rel="nofollow">Оферты</a>», а также соглашаетесь с
                                    «<a href="/pages/tos" class="text-body-secondary" target="_blank"
                                        rel="nofollow">Условиями использования</a>»

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer border-top-0 text-center py-4">
                    <div class="py-lg-2">
                        <span class="text-body-secondary">Уже есть аккаунт?</span>
                        <a class="text-body"
                            href="/login">Войти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 py-md-5 order-md-first">
        <div class="display-5 mb-4 mb-lg-5">Один шаг до аккаунта на&nbsp;Хекслете</div>
        <ul class="list-unstyled">
            <li class="d-flex mb-3">
                <span class="bi bi-check2 fs-5 flex-shrink-0 lh-base me-1"></span>
                <div class="fs-5">
                    <p><strong>Бесплатно</strong> учитесь основам программирования</p>
                </div>
            </li>
            <li class="d-flex mb-3">
                <span class="bi bi-check2 fs-5 flex-shrink-0 lh-base me-1"></span>
                <div class="fs-5">
                    <p>Вступайте в программы, курсы и выбирайте свой формат обучения</p>
                </div>
            </li>
            <li class="d-flex mb-3">
                <span class="bi bi-check2 fs-5 flex-shrink-0 lh-base me-1"></span>
                <div class="fs-5">
                    <p>Присоединяйтесь к <strong>профессиональному сообществу</strong> и развивайте
                        нетворкинг</p>
                </div>
            </li>
            <li class="d-flex mb-3">
                <span class="bi bi-check2 fs-5 flex-shrink-0 lh-base me-1"></span>
                <div class="fs-5">
                    <p>Делитесь своими успехами в блоге студента и получайте за это <strong>доступ к платным
                            курсам</strong></p>
                </div>
            </li>
            <li class="d-flex mb-3">
                <span class="bi bi-check2 fs-5 flex-shrink-0 lh-base me-1"></span>
                <div class="fs-5">
                    <p>Участвуйте в обсуждениях к урокам и задавайте вопросы</p>
                </div>
            </li>
        </ul>

    </div>
</div>