<body>
<div class="container">
<div class="content">
<div class="title">Laravel 5 from
index()</div>
<p> Just output of random value:
{{$p1}}</p>
@if ($p1 > 700)
<p>greater</p>
@else
<p>less</p>
@endif
<ul>
@foreach ($p2 as $p)
<li>
{{$p}}
</li>
@endforeach
</ul>
</div>
</div>
</body>