<article class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 pull-left bg-success bloco-info">
<p class="lead">Processos</p>
</article>

<article class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 pull-left bg-success bloco-info">
<p class="lead">Compromissos</p>
</article>

<article class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 pull-left bg-success bloco-info">
<p class="lead">Diligências</p>
</article>

<article class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 pull-left bg-success bloco-info">
<p class="lead">Documentos</p>
</article>

<article class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 pull-left bg-success bloco-info">
	<script src="js/chart/Chart.min.js"></script>
	<script type="text/javascript">
		var randomnb = function(){ return Math.round(Math.random()*300)};
	</script>
	<div class="box-chart">
	
	<canvas id="GraficoPizza" style="width:100%;"></canvas>
	
	<script type="text/javascript">
	
		var options = {
			responsive:true
		};
	
		var data = [
			{
				value: 1000,
				color:"#F7464A",
				highlight: "#FF5A5E",
				label: "Nossa"
			},
			{
				value: 32,
				color: "#46BFBD",
				highlight: "#5AD3D1",
				label: "Como é"
			},
			{
				value: 107,
				color: "#FDB45C",
				highlight: "#FFC870",
				label: "Veloz"
			}
		]
		
		window.onload = function(){
	
			var ctx = document.getElementById("GraficoPizza").getContext("2d");
			var PizzaChart = new Chart(ctx).Pie(data, options);
		}  
	</script>
	</div>
</article>