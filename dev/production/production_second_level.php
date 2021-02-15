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
					<a class="department-nav__link department-nav__link_active" href="#">Royal Thermo</a>
					<a class="department-nav__link" href="#">Ballu</a>
					<a class="department-nav__link" href="#">ИКСЭл</a>
					<a class="department-nav__link" href="#">R&D</a>
				</nav>
			</div>
			<div class="content__right">
				<? include('../components/breadcrumbs.php'); ?>
				<div class="departments-inner">
                    <div class="departments-inner__title">
                        <div class="departments-inner__title-left">
                            <img src="/dev/img/interface/royal_thermo.svg" alt="Royal Thermo">
                        </div>
                        <div class="departments-inner__title-right">
                            Промышленная группа Royal Thermo
                        </div>
                    </div>
					<div class="departments-inner__list departments-inner__list_start">
                        <a class="departments-inner__link" href="#">
                            <span class="departments-inner__top">
                                <img class="departments-inner__img" src="/dev/img/interface/royal.svg" alt="Завод алюминиевых  и биметаллических радиаторов">
                            </span>
                            <span class="departments-inner__bottom">Завод алюминиевых и биметаллических радиаторов</span>
                        </a>
                        <a class="departments-inner__link" href="#">
                            <span class="departments-inner__top">
                                <img class="departments-inner__img" src="/dev/img/interface/royal.svg" alt="Завод стальных  панельных радиаторов">
                            </span>
                            <span class="departments-inner__bottom">Завод стальных панельных радиаторов</span>
                        </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<? include('../components/dashboard.php'); ?>
<? include('../components/footer.php')?>
