<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

	<!-- JAVASCRIPT -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>

	<style>
		.shadow-sm {
			box-shadow: 0 .125rem .7rem .01rem rgba(42, 154, 177, .4) !important;
		}
		.bg-info {
			background-color: #2a9ab1 !important;
		}
		.bg-orange {
			background-color: #fd7e14;
		}
		.bg-indigo {
			background-color: #3c29d8;
		}
		.border-info {
			border-color: #2a9ab1 !important;
		}
		.bg-transparent {
			background-color: transparent;
		}
		.fs-7 {
			font-size: .95rem;
		}
		ol {
			list-style: none;
			counter-reset: my-awesome-counter;
		}
		ol li {
			counter-increment: my-awesome-counter;
		}
		ol li::before {
			content: counter(my-awesome-counter) ". ";
			font-weight: bold;
			align-self: center;
		}
	</style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->


<!-- CONTENT -->

<section class="m-5">
	<div>
		<div class="row mb-3">
			<div class="col-sm">
				<div>
					<span class="fs-6 text-info">Dashboard Control Tower</span>
					<h3 class="text-info fw-bold">SUMMARY</h3>
				</div>
			</div>
			<div class="col-sm">
				<div class="d-flex">
				<div class="input-group shadow-sm">
					<span class="input-group-text bg-transparent border-info border-end-0">
						<i class="far fa-calendar-alt text-muted"></i>
					</span>
					<input type="text" class="form-control border-info border-start-0" name="daterange" value="01/01/2018 - 15/01/2018" />
				</div>
					<span class="mx-3"></span>
					<select class="form-select shadow-sm border-info form-sm" aria-label="Default select example">
						<option value="telkom" selected>TELKOM</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row mb-4">
			<?php foreach ($T as $key => $val) { ?>
				<div class="col-sm-12 col-md-6 col-lg mb-3">
					<div class="card rounded border-info shadow-sm">
						<div class="card-body">
							<div class="d-flex justify-content-between">
								<div class="align-self-center rounded-circle border <?= $val->COLOR ?> text-center align-middle" style="height: 100px;width:100px;position:relative;">
									<div style="transform: translate(-50%, -50%);position:absolute;top:50%;left:50%;">
										<i class="<?= $val->ICON ?> fa-2x text-white"></i>
									</div>
								</div>
								<div class="align-self-center">
									<h6 class="text-end fw-bold"><?= $val->JUDUL ?></h6>
									<h6 class="text-end fw-bold"><?= $val->NAMA ?></h6>
									<h6 class="text-end fw-bold"><?= $HELPER->bd_nice_number2($val->AMOUNT) ?></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<div class="row mb-1">
			<div class="col-sm">
				<h3 class="text-info fw-bold">BUMN</h3>
			</div>
		</div>

		<div class="row mb-5">
			<div class="col-sm-12 col-md-12 col-lg-6 mb-3">
				<div class="card rounded border-info shadow-sm">
					<div class="card-body">
						<canvas id="area" height="300"></canvas>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 mb-3">
				<div class="card rounded border-info shadow-sm">
					<div class="card-body">
						<canvas id="pie" height="300"></canvas>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 mb-3">
				<div class="card rounded border-info shadow-sm">
					<div class="card-body">
						<canvas id="barH" height="300"></canvas>
					</div>
				</div>
			</div>
		</div>

		<div class="row mb-1">
			<div class="col-sm">
				<h3 class="text-info fw-bold">BUMN</h3>
			</div>
		</div>

		<div class="row mb-1">
			<div class="col-sm-12 col-md-6 col-lg-3 mb-3">
				<div class="card rounded border-info shadow-sm">
					<div class="card-body">
						<canvas id="pie2" height="300"></canvas>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 mb-3">
				<div class="card rounded border-info shadow-sm">
					<div class="card-body">
						<canvas id="pie3" height="300"></canvas>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 mb-3">
				<div class="card rounded border-info shadow-sm h-100">
					<div class="card-body">
						<div class="mb-3">
							<h6 class="fw-bold text-muted">Top Category Project</h6>
						</div>
						<div style="height:250px;" class="overflow-auto">
							<ol>
								<?php foreach ($TC as $key => $val) { ?>
									<li class="text-muted border-bottom d-flex mb-2 pb-2 fs-7">
										<div class="w-100">
											<div class="d-flex justify-content-between">
												<div class="align-self-center ms-2">
													<span class="fs-7 me-3"><?= $val->NAMA ?></span>
												</div>
												<div class="align-self-center">
													<span class="fs-7 me-3"><a href="javascript:;" class="text-decoration-none"><?= $val->UMKM ?> UMKM</a></span>
													<span class="fs-7 fw-bold me-1">RP<?=  $HELPER->bd_nice_number($val->AMOUNT) ?></span>
												</div>
											</div>
										</div>
									</li>
								<?php } ?>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->


<!-- SCRIPTS -->

<script>
var dataVisual;

$(function() {
	$.ajax({
		url: "/getchart",
		method: "GET"
	}).done(function(data) {
		dataVisual = data
		buildChart()
	});

	$('input[name="daterange"]').daterangepicker({
		locale: {
			format: 'DD/MM/YYYY'
		},
		opens: 'left'

	}, function(start, end, label) {
		console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
	});
});

function buildChart() {
	//area chart
	var ctx = document.getElementById('area').getContext('2d');
	var gradientFill = ctx.createLinearGradient(0, 400, 0, 100);
	gradientFill.addColorStop(0, "rgba(255, 255, 255, .5)");
	gradientFill.addColorStop(1, "rgba(42, 154, 177, 1)");

	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
		labels: dataVisual.TNP.label,
		datasets: [
			{
				backgroundColor: gradientFill,
				data: dataVisual.TNP.amount,
				fill: true,
				lineTension: 0.4,
				pointRadius: 0
			}
		]
		},
		options: {
			maintainAspectRatio: false,
			responsive: true,
			plugins: {
				filler: {
					propagate: true
				},
				legend: {
					display: false
				},
				title: {
					display: true,
					text: 'Tren Nilai Projek',
					align: 'start',
					padding: {
						bottom: 20
					},
					font: {
						size: 14
					}
				}
			}
		}
	});


	//pie chart 1
  	var ctx = document.getElementById('pie').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
		labels: dataVisual.SOB.label,
		datasets: [
			{
				backgroundColor: ['rgba(42, 154, 177, 1)', 'rgba(251, 135, 37, 1)'],
				data: dataVisual.SOB.amount,
			}
		]
		},
		options: {
			maintainAspectRatio: false,
			responsive: true,
			plugins: {
				filler: {
					propagate: true
				},
				legend: {
					display: true,
					position: 'bottom',
					labels: {
						font: {
							weight: 'bold',
							size: 12
						},
						usePointStyle: true
					}
				},
				title: {
					display: true,
					text: 'Source of Budget',
					align: 'start',
					padding: {
						bottom: 20
					},
					font: {
						size: 14
					}
				}
			}
		}
	});

	//bar chart
	var ctx = document.getElementById('barH').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: dataVisual.TS.label,
			datasets: [
				{
					backgroundColor: ['rgba(42, 154, 177, 1)'],
					data: dataVisual.TS.amount,
					borderRadius: 20,
					borderSkipped: false,
				}
			]
		},
		options: {
			indexAxis: 'y',
			maintainAspectRatio: false,
			responsive: true,
			scales: {
				x: {
					display: false
				},
				y: {
					grid: {
						color: "rgba(0, 0, 0, 0)",
					} 
				}
			},
			element: {
				line: {
					tension: 0.4
				}
			},
			plugins: {
				filler: {
					propagate: true
				},
				legend: {
					display: false,
				},
				// tooltip: {
				// 	enabled: false
				// },
				title: {
					display: true,
					text: 'Top 10 Seller By Project Value',
					align: 'start',
					padding: {
						bottom: 20
					},
					font: {
						size: 14
					}
				}
			},
			animation: {
				onComplete: function () {
					var chartInstance = this,
						ctx = chartInstance.ctx;
					ctx.font = Chart.helpers.fontString(11, Chart.defaults.font.style, Chart.defaults.font.family);
					ctx.textAlign = 'center';
					ctx.textBaseline = 'bottom';

					this.data.datasets.forEach(function (dataset, i) {
						var meta = chartInstance._metasets[i];
						meta.data.forEach(function (bar, index) {
							var data = dataset.data[index];                            
							ctx.fillText(`RP${formatNumber(data)}`, bar.x - 30, bar.y + 7);
						});
					});
				}
			}
		}
	});

	//pie chart 2
	var ctx = document.getElementById('pie2').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
		labels: dataVisual.UMKM.labelR,
		datasets: [
			{
				backgroundColor: ['#0dcaf0', '#eeb27e', '#fb8725'],
				data: dataVisual.UMKM.register,
			}
		]
		},
		options: {
			maintainAspectRatio: false,
			responsive: true,
			plugins: {
				filler: {
					propagate: true
				},
				legend: {
					display: true,
					position: 'bottom',
					labels: {
						font: {
							weight: 'bold',
							size: 12
						},
						usePointStyle: true
					}
				},
				title: {
					display: true,
					text: 'Level UMKM By Register',
					align: 'start',
					padding: {
						bottom: 20
					},
					font: {
						size: 14
					}
				}
			}
		}
	});

	//pie chart 3
	var ctx = document.getElementById('pie3').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
		labels: dataVisual.UMKM.labelP,
		datasets: [
			{
				backgroundColor: ['#0dcaf0', '#eeb27e', '#fb8725'],
				data: dataVisual.UMKM.project,
			}
		]
		},
		options: {
			maintainAspectRatio: false,
			responsive: true,
			plugins: {
				filler: {
					propagate: true
				},
				legend: {
					display: true,
					position: 'bottom',
					labels: {
						font: {
							weight: 'bold',
							size: 12
						},
						usePointStyle: true
					}
				},
				title: {
					display: true,
					text: 'Level UMKM By Handle Project',
					align: 'start',
					padding: {
						bottom: 20
					},
					font: {
						size: 14
					}
				}
			}
		}
	});
}

function formatNumber(n) {
	let nn = (0+n.replace(",",""));
	
	if(nn>1000000000000) return Math.round((nn/1000000000000))+'T';
	else if(nn>1000000000) return Math.round((nn/1000000000))+'M';
	else if(nn>1000000) return Math.round((nn/1000000))+'J';
	else if(nn>1000) return Math.round((nn/1000))+'K';
	
	return number_format(nn);
}

</script>

<!-- -->

</body>
</html>
