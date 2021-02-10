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
                    </div>
                    <div class="content__right">
						<? include('../components/breadcrumbs.php'); ?>
                        <div class="departments-inner">
                            <div class="departments-inner__list">
                                <a class="departments-inner__link" href="#">
                                    <span class="departments-inner__top">
                                        <img class="departments-inner__img" src="/dev/img/interface/presentations.svg" alt="Презентации">
                                    </span>
                                    <span class="departments-inner__bottom">Презентации</span>
                                </a>
                                <a class="departments-inner__link" href="#">
                                    <span class="departments-inner__top">
                                        <img class="departments-inner__img" src="/dev/img/interface/publications.svg" alt="Публикации">
                                    </span>
                                    <span class="departments-inner__bottom">Публикации</span>
                                </a>
                                <a class="departments-inner__link" href="#">
                                    <span class="departments-inner__top">
                                        <img class="departments-inner__img" src="/dev/img/interface/documents.svg" alt="Документы">
                                    </span>
                                    <span class="departments-inner__bottom">Документы</span>
                                </a>
                                <a class="departments-inner__link" href="#">
                                    <span class="departments-inner__top">
                                        <img class="departments-inner__img" src="/dev/img/interface/video.svg" alt="Видео">
                                    </span>
                                    <span class="departments-inner__bottom">Видео</span>
                                </a>
                                <a class="departments-inner__link" href="#">
                                    <span class="departments-inner__top">
                                        <img class="departments-inner__img" src="/dev/img/interface/photo.svg" alt="Фото">
                                    </span>
                                    <span class="departments-inner__bottom">Фото</span>
                                </a>
                                <a class="departments-inner__link" href="#">
                                    <span class="departments-inner__top">
                                        <img class="departments-inner__img" src="/dev/img/interface/brandbook.svg" alt="Брендбук">
                                    </span>
                                    <span class="departments-inner__bottom">Брендбук</span>
                                </a>
                                <a class="departments-inner__link" href="#">
                                    <span class="departments-inner__top">
                                        <img class="departments-inner__img" src="/dev/img/interface/applications.svg" alt="Заявки">
                                    </span>
                                    <span class="departments-inner__bottom">Заявки</span>
                                </a>
                            </div>
                            <div class="departments-inner__list">
                                <a class="departments-inner__link" href="#">
                                    <span class="departments-inner__top">
                                        <img class="departments-inner__img" src="/dev/img/interface/photo.svg" alt="Фото">
                                    </span>
                                    <span class="departments-inner__bottom">Фото</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="department-news">
                    <h1 class="department-news__title">
                        <span class="department-news__val">Маркетинг</span>
                        <span class="department-news__key">News</span>
                    </h1>
                    <ul class="department-news__list">
						<? for ($i = 1; $i <= 4; $i++): ?>
                            <li class="department-news__item">
                                <div class="department-news__left">
                                    <img class="department-news__img" src="/dev/img/misc/department_news_<?= $i; ?>.jpg" alt="department_news_1">
                                </div>
                                <div class="department-news__right">
                                    <a class="date" href="#">
                                        <span class="date__month">Октябрь</span>
                                        <span class="date__day">15</span>,
                                        <span class="date__year">2020</span>
                                    </a>
                                    <h2 class="department-news__subtitle">
                                        ТПХ «РУСКЛИМАТ» ОБЕСПЕЧИЛ ОБОРУДОВАНИЕМ БОЛЕЕ 300 МЕДОБЪЕКТОВ ДЛЯ БОРЬБЫ С COVID-19
                                    </h2>
                                    <div class="department-news__desc">
                                        Вентиляционными установками и центральными кондиционерами Ballu и Shuft, компрессорно-конденсаторными
                                        блоками Electrolux, радиаторами Royal Thermo, системами автоматизации Shuft и
                                        Danfoss были оснащены ведущие российские клиники, инфекционные больницы и фармпредприятия
                                    </div>
                                    <a class="department-news__link more-info" href="#">Читать далее</a>
                                </div>
                            </li>
						<? endfor; ?>
                    </ul>
                </div>
			</div>
		</main>
		<? include('../components/dashboard.php'); ?>
<? include('../components/footer.php')?>
