document.addEventListener('DOMContentLoaded', function () {
	// Время и дата
	(function () {
		var $dateTime = document.querySelector('.date-time');
		var $hours = $dateTime.querySelector('.date-time__hours');
		var $minutes = $dateTime.querySelector('.date-time__minutes');
		var $day = $dateTime.querySelector('.date-time__day');
		var $month = $dateTime.querySelector('.date-time__month');
		var $year = $dateTime.querySelector('.date-time__year');

		initDateTime();

		setInterval(function () {
			initDateTime();
		}, 1000);

		function initDateTime() {
			var date = updateDate();
			var time = updateTime();

			$hours.textContent = time.hours;
			$minutes.textContent = time.minutes;

			$day.textContent = date.day;
			$month.textContent = date.month;
			$year.textContent = date.year;
		}

		function updateDate() {
			var date = new Date();
			var day = date.getDay();
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

			return {
				hours: hours,
				minutes: minutes
			}
		}
	})();
});