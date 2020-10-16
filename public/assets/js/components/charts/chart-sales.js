//
// Charts
//

'use strict';

//
// Sales chart
//

var SalesChart = (function() {

	// Variables

	var $chart = $('#chart-sales');
	var $chart1 = $('#chart-sales1');
	var $chart2 = $('#chart-sales2');
	var $chart3 = $('#chart-sales3');

	// Methods

	function init($this) {
		var salesChart = new Chart($this, {
			type: 'line',
			options: {
				scales: {
					yAxes: [{
						gridLines: {
							color: Charts.colors.gray[200],
							zeroLineColor: Charts.colors.gray[200]
						},
						ticks: {

						}
					}]
				}
			},
			data: {
				labels: ['May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				datasets: [{
					label: 'Performance',
					data: [0, 20, 10, 30, 15, 40, 20, 60, 60]
				}]
			}
		});

		// Save to jQuery object

		$this.data('chart', salesChart);
		$this.data('chart1', salesChart);
		$this.data('chart2', salesChart);
		$this.data('chart3', salesChart);

	};


	// Events

	if ($chart.length) {
		init($chart);
	}
		if ($chart1.length) {
		init($chart);
	}
		if ($chart2.length) {
		init($chart);
	}
		if ($chart3.length) {
		init($chart);
	}

})();
