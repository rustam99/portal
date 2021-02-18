<? include('../components/head.php'); ?>
<main class="main">
    <div class="container">
		<? include('../components/header.php'); ?>
        <div class="content">
            <div class="content__row">
                <div class="content__left">
                    <nav class="department-nav">
                        <a class="department-nav__link department-nav__link_active" href="#">Презентации</a>
                        <a class="department-nav__link" href="#">Публикации</a>
                        <a class="department-nav__link" href="#">Документы</a>
                        <a class="department-nav__link" href="#">Видео</a>
                        <a class="department-nav__link" href="#">Фото</a>
                        <a class="department-nav__link" href="#">Брендбук</a>
                        <a class="department-nav__link" href="#">Заявки</a>
                    </nav>
                </div>
                <div class="content__right">
                    <div class="title">
                        <h1 class="title__text">Маркетинг</h1>
                    </div>
                    <div class="row">
                        <a class="back-button" href="#">
                            <div class="back-button__icon icon-left"></div>
                            <div class="back-button__text">Назад</div>
                        </a>
						<? include('../components/breadcrumbs.php'); ?>
                    </div>
                    <div class="departments-inner">
                        <div class="tabs">
                            <div class="tabs__head">
                                <div class="departments-inner__list">
                                    <a class="departments-inner__link tabs__item tabs__item_active" href="#">
									<span class="departments-inner__top">
										<img class="departments-inner__img" src="/dev/img/interface/marketing/brandbook/maket.svg" alt="Макеты и логотипы">
									</span>
                                        <span class="departments-inner__bottom">Макеты и логотипы</span>
                                    </a>
                                    <a class="departments-inner__link tabs__item" href="#">
									<span class="departments-inner__top">
										<img class="departments-inner__img" src="/dev/img/interface/marketing/brandbook/office.svg" alt="Оформление офиса">
									</span>
                                        <span class="departments-inner__bottom">Оформление офиса</span>
                                    </a>
                                    <a class="departments-inner__link tabs__item" href="#">
									<span class="departments-inner__top">
										<img class="departments-inner__img" src="/dev/img/interface/marketing/brandbook/pos.svg" alt="POS-материалы">
									</span>
                                        <span class="departments-inner__bottom">POS-материалы</span>
                                    </a>
                                </div>
                            </div>
                            <div class="tabs__body">
								<? for ($k = 0; $k < 3; $k++): ?>
                                    <div class="tabs__item <?= $i == 0 ? 'tabs__item_visible' : '' ?>">
                                        <div class="departments-inner__list departments-inner__list_thin">
											<? for ($i = 0; $i < 11; $i++): ?>
                                                <a class="departments-inner__link" href="#">
												<span class="departments-inner__top">
													<img class="departments-inner__img" src="/dev/img/misc/logos.jpg" alt="Сертификат участника">
												</span>
                                                    <span class="departments-inner__bottom">Сертификат участника <?= $k + 1?></span>
                                                </a>
											<? endfor; ?>
                                        </div>
                                    </div>
								<? endfor; ?>
                            </div>
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
