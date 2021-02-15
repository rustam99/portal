<? include('../components/head.php'); ?>
<? include('../components/infoblock.php'); ?>
<main class="main">
	<? include('../components/header.php'); ?>
	<div class="content">
		<div class="title">
			<h1 class="title__text">Происводство</h1>
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
								<img class="departments-inner__img" src="/dev/img/interface/royal_thermo.svg" alt="Royal Thermo">
							</span>
							<span class="departments-inner__bottom">Royal Thermo</span>
						</a>
						<a class="departments-inner__link" href="#">
							<span class="departments-inner__top">
								<img class="departments-inner__img" src="/dev/img/interface/ballu.svg" alt="Ballu Industrial Group">
							</span>
							<span class="departments-inner__bottom">Ballu Industrial Group</span>
						</a>
						<a class="departments-inner__link" href="#">
							<span class="departments-inner__top">
								<img class="departments-inner__img" src="/dev/img/interface/iskel.svg" alt="“ИКСЭл”">
							</span>
							<span class="departments-inner__bottom">“ИКСЭл”</span>
						</a>
					</div>
					<div class="departments-inner__list">
						<a class="departments-inner__link" href="#">
							<span class="departments-inner__top">
								<img class="departments-inner__img" src="/dev/img/interface/laboratory.svg" alt="Центры разработки технологий инноваций  и промышленного дизайна">
							</span>
							<span class="departments-inner__bottom">Центры разработки технологий инноваций и промышленного дизайна</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<? include('../components/dashboard.php'); ?>
<? include('../components/footer.php')?>
