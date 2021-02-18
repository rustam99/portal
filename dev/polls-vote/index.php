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
                        <h1 class="title__text">Опросы</h1>
                    </div>
                    <div class="row">
                        <a class="back-button" href="#">
                            <div class="back-button__icon icon-left"></div>
                            <div class="back-button__text">Назад</div>
                        </a>
						<? include('../components/breadcrumbs.php'); ?>
                    </div>
                    <a class="date date_indent" href="#">
                        <span class="date__month">Февраль</span>,
                        <span class="date__year">2021</span>
                    </a>
                    <div class="departments-inner">
                        <div class="departments-inner__list departments-inner__list_wide">
							<? for ($i = 1; $i <= 4; $i++): ?>
                                <a class="departments-inner__link" href="#">
								<span class="departments-inner__top">
									Ваши предложения по размещению информации на корпоративном портале
								</span>
                                    <span class="departments-inner__bottom">Опрос <?= $i ?></span>
                                </a>
							<? endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<? include('../components/dashboard.php'); ?>
<? include('../components/feedback-info.php'); ?>
<? include('../components/footer.php')?>
