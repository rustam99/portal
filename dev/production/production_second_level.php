<? include('../components/head.php'); ?>
<main class="main">
    <div class="container">
		<? include('../components/header.php'); ?>
        <div class="content">
            <div class="content__row">
                <div class="content__left">
                    <nav class="department-nav">
                        <a class="department-nav__link department-nav__link_active" href="#">Royal Thermo</a>
                        <a class="department-nav__link" href="#">Ballu</a>
                        <a class="department-nav__link" href="#">ИКСЭл</a>
                        <a class="department-nav__link" href="#">R&D</a>
                    </nav>
                </div>
                <div class="content__right">
                    <div class="title">
                        <h1 class="title__text">Производство</h1>
                    </div>
                    <div class="row">
                        <a class="back-button" href="#">
                            <div class="back-button__icon icon-left"></div>
                            <div class="back-button__text">Назад</div>
                        </a>
						<? include('../components/breadcrumbs.php'); ?>
                    </div>
                    <div class="departments-inner">
                        <div class="departments-inner__title">
                            <div class="departments-inner__title-left">
                                <img src="/dev/img/interface/logos/royal_thermo.svg" alt="Royal Thermo">
                            </div>
                            <div class="departments-inner__title-right">
                                Промышленная группа Royal Thermo
                            </div>
                        </div>
                        <div class="tabs">
                            <div class="tabs__head">
                                <div class="departments-inner__list departments-inner__list_start departments-inner__list_thin_icons">
                                    <a class="departments-inner__link tabs__item tabs__item_active" href="#">
                                        <span class="departments-inner__top">
                                            <img class="departments-inner__img" src="/dev/img/interface/logos/royal.svg" alt="Завод алюминиевых  и биметаллических радиаторов">
                                        </span>
                                        <span class="departments-inner__bottom">Завод алюминиевых и биметаллических радиаторов</span>
                                    </a>
                                    <a class="departments-inner__link tabs__item" href="#">
                                        <span class="departments-inner__top">
                                            <img class="departments-inner__img" src="/dev/img/interface/logos/royal.svg" alt="Завод стальных  панельных радиаторов">
                                        </span>
                                        <span class="departments-inner__bottom">Завод стальных панельных радиаторов</span>
                                    </a>
                                </div>
                            </div>
                            <div class="tabs__body">
                                <? for ($i = 0; $i < 2; $i++): ?>
                                    <div class="tabs__item <?= $i == 0 ? 'tabs__item_visible' : '' ?>">
                                        <div class="departments-inner__title departments-inner__title_indent">
                                            <div class="departments-inner__title-left departments-inner__title-left_dynamic">
                                                <div class="departments-inner__title-img">
                                                    <img src="/dev/img/interface/logos/royal.svg" alt="Royal Thermo">
                                                </div>
                                                <img src="/dev/img/interface/royal_alumin.jpg" alt="Завод алюминиевых и биметаллических радиаторов">
                                            </div>
                                            <div class="departments-inner__title-right">
                                                Завод алюминиевых и биметаллических радиаторов
                                            </div>
                                        </div>
                                        <div class="departments-inner__description">
                                            <p class="departments-inner__paragraph">
                                                <?= $i + 1; ?> Крупнейшее в Европе предприятие полного цикла по производству алюминиевых и биметаллических радиаторов отопления.
                                            </p>
                                            <p class="departments-inner__paragraph">
                                                Завод по производству алюминиевых и биметаллических радиаторов отопления был запущен в 2014 году.
                                                На сегодняшний день это крупнейшее в Европе предприятие полного цикла по производству алюминиевых и биметаллических радиаторов отопления
                                                мощностью более 14 миллионов секций в год и численностью свыше 600 сотрудников.
                                            </p>
                                            <p class="departments-inner__paragraph">
                                                На предприятии используется оборудование ведущих европейских производителей:
                                                Marconi (Италия), Insertec S.A. (Испания), Striko Westofen (Германия) – автоматизированные печи шахтного и дозирующего типов для производства,
                                                подачи и инжекции сплава в пресс-формы;
                                                Buhler (Швейцария), ABB (Швейцария), Maicopress (Италия) – роботизированные комплексы литья под давлением с усилием запирания 2000 тонн;
                                                OMC (Италия), Costampress (Италия) – двух- четырехместные пресс-формы последнего поколения с системой термостатирования;
                                                Gi-Zeta Impianti (Италия) – автоматизированные револьверные линии по обработке и сборке алюминиевых и биметаллических радиаторов,
                                                в том числе со сложными выпукло-вогнутыми формами;
                                                Tecnofirma (Италия), Cabycal (Испания) – автоматические линии покраски в несколько этапов,
                                                включая нанесение грунтовочного слоя FreiLacke (Германия) методом анафореза и порошковую покраску AkzoNobel (Нидерланды) в любой цвет.
                                            </p>
                                            <p class="departments-inner__paragraph">
                                                Уникальные технологии подтверждены и защищены 20 международными патентами.
                                                Инженерами Royal Thermo впервые в мире был создан автоматизированный биметаллический 4-х местный литьевой комплекс с рекордной производительностью:
                                                одна секция за 11 секунд.
                                            </p>
                                            <p class="departments-inner__paragraph">
                                                Совместная работа конструкторского бюро Промышленной группы с Миланским политехническим университетом и
                                                НИИ Сантехники позволяют разрабатывать и производить современный модельный ряд оборудования с высокими теплотехническими,
                                                прочностными и гидравлическими характеристиками.
                                                Продукция Royal Thermo проходит многоступенчатую систему контроля на всех этапах производства от исходного сырья до готовых изделий.
                                                Производство полностью сертифицировано в соответствии с нормами международных стандартов ISO 9001, ISO 14001.
                                                Каждый биметаллический радиатор Royal Thermo защищен от подделок, имеет гарантийный срок от 15 лет до 25 лет.
                                            </p>
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
