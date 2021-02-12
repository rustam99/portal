$(document).ready(function () {
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
});