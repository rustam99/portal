<? include('../components/head.php'); ?>
<? include('../components/infoblock.php'); ?>
<main class="main">
	<? include('../components/header.php'); ?>
	<div class="content">
		<div class="title">
			<h1 class="title__text">Производство</h1>
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
							<img src="/dev/img/interface/gear.svg" alt="Центры разработки технологий инноваций и промышленного дизайна">
						</div>
						<div class="departments-inner__title-right">
                            Центры разработки технологий инноваций и промышленного дизайна
						</div>
					</div>
                    <div class="tabs">
                        <div class="tabs__head">
                            <div class="departments-inner__list">
                                <? for ($i = 0; $i < 3; $i++): ?>
                                    <a class="departments-inner__link tabs__item <?= $i == 0 ? 'tabs__item_active' : '' ?>" href="#">
                                        <span class="departments-inner__top">
                                            <img class="departments-inner__img" src="/dev/img/interface/sibercool.svg" alt="SiberCool">
                                         </span>
                                        <span class="departments-inner__bottom">SiberCool</span>
                                    </a>
                                <? endfor; ?>
                            </div>
                        </div>
                        <div class="departments-inner__tabs-body tabs__body">
                            <? for ($i = 0; $i < 3; $i++): ?>
                                <div class="tabs__item <?= $i == 0 ? 'tabs__item_visible' : '' ?>">
                                    <div class="departments-inner__title">
                                        <div class="departments-inner__title-left departments-inner__title-left_small">
                                            <img src="/dev/img/interface/sibercool_small.svg" alt="Инженерно-исследовательский центр  по разработке оборудования  для северных климатических зон">
                                        </div>
                                        <div class="departments-inner__title-right">
                                            <?= $i + 1; ?> Инженерно-исследовательский центр по разработке оборудования для северных климатических зон
                                        </div>
                                    </div>
                                    <img src="/dev/img/misc/sibercool_big_img.jpg" alt="sibercool">
                                    <div class="departments-inner__description departments-inner__description_indent">
                                        <p class="departments-inner__paragraph">
                                            Научно - исследовательский центр по разработке оборудования для северных климатических зон -
                                            Ballu SiberCool Research Lab был запущен на территории завода "ВентИнжМаш" в 2016 году.
                                        </p>
                                        <p class="departments-inner__paragraph">
                                            Центр проводит низкотемпературные, акустические , аэродинамические и гидравлические исследования и
                                            тестирования оборудования и отдельных узлов. Ballu SiberCool является базовой площадкой для разработки и
                                            испытаний комплекса технологий Siber Cool для надежной и эффективной работы оборудования
                                            в условиях сверхвысокого диапазона перепада температур, нестабильного электропитания, ошибок при проектировании
                                            и вводе в эксплуатацию.
                                        </p>
                                        <p class="departments-inner__paragraph">
                                            Партнерские программы с ведущими университетами и научно-исследовательскими институтами,
                                            направленные на диверсификацию участия в профессиональной подготовке, совместные фундаментальные
                                            и прикладные исследования, являются основными факторами успеха исследовательской лаборатории Ballu SiberCool.
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
</main>
<? include('../components/dashboard.php'); ?>
<? include('../components/footer.php')?>
