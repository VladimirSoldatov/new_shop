<body>
	<div class="container">
	<div class="content">
	<div class="title">Laravel 5 from index()</div>
	<p> Just output of random value: {{$p1}}</p>
@if ($p1 > 700)
	<p>greater</p>
@else
	<p>less</p>
@endif
	<table style = "margin:auto">
@foreach ($p2 as $p)
	<tr><td>
	{{$p}}
	</td></tr>
	@endforeach
	</table>
	</div>
	</div>
</body>