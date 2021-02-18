<? include('../components/head.php'); ?>
<main class="main">
    <div class="container">
		<? include('../components/header.php'); ?>
        <div class="content">
            <div class="content__row">
                <div class="content__left">
                    <nav class="department-nav">
                        <a class="department-nav__link department-nav__link_active" href="#">Все опросы</a>
                        <a class="department-nav__link" href="#">Обязательные</a>
                        <a class="department-nav__link" href="#">По желанию</a>
                        <a class="department-nav__link" href="#">Ваши отклики</a>
                    </nav>
                </div>
                <div class="content__right">
                    <div class="title">
                        <h1 class="title__text">Голосование</h1>
                    </div>
                    <div class="row">
                        <a class="back-button" href="#">
                            <div class="back-button__icon icon-left"></div>
                            <div class="back-button__text">Назад</div>
                        </a>
						<? include('../components/breadcrumbs.php'); ?>
                    </div>
                    <div class="polls-vote">
                        <h1 class="polls-vote__title">Голосование 1</h1>
                        <div class="polls-vote__question">
                            Ваше отношение к удаленной работе.
                        </div>
                        <form class="polls-vote__form">
                            <div class="polls-vote__field">
                                <label class="polls-vote__label">
                                    <input class="input-radio" name="work" type="radio">
                                    <span class="polls-vote__radio radio"></span>
                                    <span class="polls-vote__text">Учень удобно</span>
                                </label>
                            </div>
                            <div class="polls-vote__field">
                                <label class="polls-vote__label">
                                    <input class="input-radio" name="work" type="radio">
                                    <span class="polls-vote__radio radio"></span>
                                    <span class="polls-vote__text">Не совсем удобно</span>
                                </label>
                            </div>
                            <div class="polls-vote__field">
                                <label class="polls-vote__label">
                                    <input class="input-radio" name="work" type="radio">
                                    <span class="polls-vote__radio radio"></span>
                                    <span class="polls-vote__text">Не хватает общения с коллегами</span>
                                </label>
                            </div>
                            <div class="polls-vote__field">
                                <label class="polls-vote__label">
                                    <input class="input-radio" name="work" type="radio">
                                    <span class="polls-vote__radio radio"></span>
                                    <span class="polls-vote__text">Ухудшается качество коммуникаций</span>
                                </label>
                            </div>
                            <div class="polls-vote__field">
                                <label class="polls-vote__label">
                                    <input class="input-radio" name="work" type="radio">
                                    <span class="polls-vote__radio radio"></span>
                                    <span class="polls-vote__text">Плохо во всех отношениях</span>
                                </label>
                            </div>
                            <textarea class="polls-vote__textarea textarea" name="desc" rows="3" placeholder="Добавьте комментарий"></textarea>
                            <button class="polls-vote__button button">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<? include('../components/dashboard.php'); ?>
<? include('../components/feedback-info.php'); ?>
<? include('../components/footer.php')?>
