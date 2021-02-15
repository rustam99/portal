$(document).ready(function () {
	var $body = $('body');

	// Время и дата
	(function () {
		var $dateTime = $('.date-time');
		var $hours = $dateTime.find('.date-time__hours');
		var $minutes = $dateTime.find('.date-time__minutes');
		var $day = $dateTime.find('.date-time__day');
		var $month = $dateTime.find('.date-time__month');
		var $year = $dateTime.find('.date-time__year');

		initDateTime();

		setInterval(function () {
			initDateTime();
		}, 1000);

		function initDateTime() {
			var date = updateDate();
			var time = updateTime();

			$hours.text(time.hours);
			$minutes.text(time.minutes);

			$day.text(date.day);
			$month.text(date.month);
			$year.text(date.year);
		}

		function updateDate() {
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var year = date.getFullYear();
			var months = ['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря'];

			return {
				day: day,
				month: months[month],
				year: year,
			}
		}

		function updateTime() {
			var date = new Date();
			var hours = date.getHours();
			var minutes = date.getMinutes();

			if (minutes < 10) {
				minutes = '0' + minutes;
			}

			return {
				hours: hours,
				minutes: minutes
			}
		}
	})();

	// feedback-content
	(function () {
		var $feedbackButton = $('.js-open-feedback-content');

		$feedbackButton.on('click', function (e) {
			e.preventDefault();

			$feedbackButton.closest('.feedback-info').toggleClass('feedback-info_active');

			if ($(this).hasClass('feedback-button_send')) {
				$('.feedback-info__textarea').val('');
				$('.feedback-info__note').addClass('feedback-info__note_active');

				setTimeout(function () {
					$('.feedback-info__note').removeClass('feedback-info__note_active');
				}, 5000);
			}

			$(this).toggleClass('feedback-button_send');
		});
	})();

	// Баннер на главной
	(function () {
		var $banner= $('.presentation__banner');

		$banner.slick({
			autoplay: true,
			arrows: false,
		});
	})();

	// Ссылки в header
	(function () {
		var $nav = $('.js-open-navigation');
		var $toggleNav = $('.header__navigation');

		$nav.on('click', '.header__link', function (e) {
			e.preventDefault();

			var dataLink = $(this).text();

			if (!$(this).hasClass('header__link_active')) {
				$(this).siblings().removeClass('header__link_active');
				$(this).addClass('header__link_active');

				$toggleNav.attr('data-link', dataLink);
				$toggleNav.addClass('header__navigation_active');

			} else {
				hideNavigation();
			}
		});

		$body.on('click', function (e) {
			var self = $(e.target);

			if (!self.is($('.header__navigation')) &&
				!self.is($('.header__navigation  *')) &&
				!self.is($nav.find('.header__link'))) {
				hideNavigation();
			}
		});

		function hideNavigation() {
			if ($toggleNav.data('link')) {
				$nav.find('.header__link_active').removeClass('header__link_active');

				$toggleNav.removeAttr('data-link');
				$toggleNav.removeClass('header__navigation_active');
			}
		}
	})();

	// Табы
	(function () {
		var $tabsHead = $('.tabs__head');
		var $tabsBody = $('.tabs__body');

		$tabsHead.find('.tabs__item').on('click', function (e) {
			e.preventDefault();

			var index = $(this).index();

			if (!$(this).hasClass('tabs__item_active')) {
				$(this).siblings().removeClass('tabs__item_active');
				$(this).addClass('tabs__item_active');

				$tabsBody.find('.tabs__item').eq(index).siblings().removeClass('tabs__item_visible');
				$tabsBody.find('.tabs__item').eq(index).addClass('tabs__item_visible');
			}
		});
	})();
});