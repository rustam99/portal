<? include('../components/head.php'); ?>
	<? include('../components/infoblock.php'); ?>
	<main class="main">
		<? include('../components/header.php'); ?>
		<div class="content">
			<div class="title">
				<h1 class="title__text">Маркетинг</h1>
			</div>
			<div class="content__row">
				<div class="content__left">
					<a class="back-button" href="#">
						<div class="back-button__icon icon-left"></div>
						<div class="back-button__text">Назад</div>
					</a>
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
					<? include('../components/breadcrumbs.php'); ?>
                    <a class="date date_indent" href="#">
                        <span class="date__month">Январь</span>
                        <span class="date__year">2021</span>
                    </a>
					<div class="departments-inner">
						<div class="departments-inner__list">
                            <? for ($i = 0; $i < 3; $i++): ?>
                                <a class="departments-inner__link" href="#">
                                    <span class="departments-inner__top departments-inner__top_dynamic">
                                        <img class="departments-inner__img" src="/dev/img/misc/marketing.jpg" alt="Русклимат - 2021">
                                    </span>
                                    <span class="departments-inner__bottom">Русклимат - 2021</span>
                                </a>
                            <? endfor; ?>
						</div>
                        <div class="departments-inner__list departments-inner__list_thin">
							<? for ($i = 0; $i < 11; $i++): ?>
                                <a class="departments-inner__link" href="#">
                                    <span class="departments-inner__top departments-inner__top_dynamic">
                                        <img class="departments-inner__img" src="/dev/img/misc/logos.jpg" alt="Сертификат участника">
                                    </span>
                                    <span class="departments-inner__bottom">Сертификат участника</span>
                                </a>
							<? endfor; ?>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<? include('../components/dashboard.php'); ?>
<? include('../components/footer.php')?>
