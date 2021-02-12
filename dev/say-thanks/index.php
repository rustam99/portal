<? include('../components/head.php'); ?>
<? include('../components/infoblock.php'); ?>
<main class="main">
	<? include('../components/header.php'); ?>
	<div class="content">
		<div class="title">
			<h1 class="title__text">Скажи спасибо</h1>
		</div>
		<div class="content__row">
			<div class="content__left">
				<a class="back-button" href="#">
					<div class="back-button__icon icon-left"></div>
					<div class="back-button__text">Назад</div>
				</a>
				<nav class="department-nav">
					<a class="department-nav__link department-nav__link_active" href="#">Ваш отзыв</a>
					<a class="department-nav__link" href="#">Все отклики</a>
				</nav>
			</div>
			<div class="content__right">
				<? include('../components/breadcrumbs.php'); ?>
				<form class="say-thanks">
					<label class="say-thanks__label say-thanks__label_block">
						<input class="say-thanks__input" name="name" type="text" placeholder="Фамилия Имя сотрудника">
					</label>
					<div class="say-thanks__field">
						<label class="say-thanks__label">
							<input class="input-radio" name="thanks" type="radio">
							<span class="say-thanks_radio radio"></span>
							<span class="say-thanks__text">Большое спасибо за оказанную помощь!</span>
						</label>
					</div>
					<div class="say-thanks__field">
						<label class="say-thanks__label">
							<input class="input-radio" name="thanks" type="radio">
							<span class="say-thanks__radio radio"></span>
							<span class="say-thanks__text">Большое спасибо за оказанную помощь!</span>
						</label>
					</div>
					<div class="say-thanks__field">
						<label class="say-thanks__label">
							<input class="input-radio" name="thanks" type="radio">
							<span class="say-thanks__radio radio"></span>
							<span class="say-thanks__text">С Вами приятно работать!</span>
						</label>
					</div>
					<div class="say-thanks__field say-thanks__field_flex">
						<label class="say-thanks__label">
							<input class="input-radio" name="thanks" type="radio">
							<span class="say-thanks__radio radio"></span>
						</label>
						<textarea class="say-thanks__textarea textarea" name="desc" rows="3" placeholder="Свой отзыв"></textarea>
					</div>
					<button class="say-thanks__button button">Отправить</button>
				</form>
			</div>
		</div>
	</div>
</main>
<? include('../components/dashboard.php'); ?>
<? include('../components/footer.php')?>
