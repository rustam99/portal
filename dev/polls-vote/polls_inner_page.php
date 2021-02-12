<? include('../components/head.php'); ?>
<? include('../components/infoblock.php'); ?>
<main class="main">
	<? include('../components/header.php'); ?>
	<div class="content">
		<div class="title">
			<h1 class="title__text">Опросы</h1>
		</div>
		<div class="content__row">
			<div class="content__left">
				<a class="back-button" href="#">
					<div class="back-button__icon icon-left"></div>
					<div class="back-button__text">Назад</div>
				</a>
				<nav class="department-nav">
					<a class="department-nav__link department-nav__link_active" href="#">Все опросы</a>
					<a class="department-nav__link" href="#">Обязательные</a>
					<a class="department-nav__link" href="#">По желанию</a>
					<a class="department-nav__link" href="#">Ваши отклики</a>
				</nav>
			</div>
			<div class="content__right">
				<? include('../components/breadcrumbs.php'); ?>
				<div class="polls-vote">
					<h1 class="polls-vote__title">Опрос 1</h1>
					<div class="polls-vote__question">
						Ваши предложения по размещению информации на корпоративном портале
					</div>
					<div class="polls-vote__sub-question">
						Какие функции необходимо отобразить на портале?
					</div>
					<form class="polls-vote__form">
                        <div class="polls-vote__field">
                            <label class="polls-vote__label">
                                <input class="input-checkbox" name="projects" type="checkbox">
                                <span class="polls-vote__checkbox checkbox"></span>
                                <span class="polls-vote__text">“Проекты”.</span>
                            </label>
                        </div>
                        <div class="polls-vote__field">
                            <label class="polls-vote__label">
                                <input class="input-checkbox" name="disc" type="checkbox">
                                <span class="polls-vote__checkbox checkbox"></span>
                                <span class="polls-vote__text">“Диск”.</span>
                            </label>
                        </div>
						<div class="polls-vote__field">
                            <label class="polls-vote__label">
                                <input class="input-checkbox" name="tasks" type="checkbox">
                                <span class="polls-vote__checkbox checkbox"></span>
                                <span class="polls-vote__text">“Задачи”.</span>
                            </label>
                        </div>
						<div class="polls-vote__field">
                            <label class="polls-vote__label">
                                <input class="input-checkbox" name="calendar" type="checkbox">
                                <span class="polls-vote__checkbox checkbox"></span>
                                <span class="polls-vote__text">“Календарь”.</span>
                            </label>
                        </div>
						<textarea class="polls-vote__textarea textarea" name="desc" rows="3" placeholder="Ваши предложения"></textarea>
						<button class="polls-vote__button button">Отправить</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>
<? include('../components/dashboard.php'); ?>
<? include('../components/footer.php')?>
