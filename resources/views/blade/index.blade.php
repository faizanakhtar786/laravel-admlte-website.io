<h1>Index.blade.php</h1>




<h4>{{ $name }}</h4> 
<!--
<?php 
/*
if(isset($pappu))
{
	echo $pappu;
}
else
{
	echo "no found";
}

*/
?>
-->
{{ $pappu or "no found "}}
<br>
<!--
<?php 
/*
echo htmlentities("<h1> Faizan</h1>");
*/
?>
-->

{{ "<h1> Faizan</h1>" }}
<hr>

{!! "<h1> Faizan</h1>" !!} 
<hr>
{{ $html }}
<hr>
{!! $html !!}
<br><hr>
<h1> If </h1>

@if(isset($data))

	<h5>No of elements :- {{ count($data) }}</h5>
@else

	<h5> No any data </h5>
@endif

<h1> While</h1>
<!--
<?php


?>
-->
@php
	$s=1;
@endphp

@while($s<=10)

	<h5>{{ $s}}</h5>
	@php
		$s++;
	@endphp
@endwhile

<h1> For</h1>
@for($i=1;$i<=10;$i++)

	<h6> {{ (7*$i) }}</h6>
@endfor

<h1> Foreach</h1>
@foreach($data as $key=>$d)

<h6>key is  {{ $key }} data is {{ $d }}</h6>

@endforeach

<h1> Forelse</h1>

<!--
@if(count($person))
	@foreach($person as $key=>$d)

	<h6>key is  {{ $key }} data is {{ $d }}</h6>

	@endforeach
@else

<h6> No found any data</h6>

@endif

-->

@forelse($person as $key=>$d)
	
	<h6>key is  {{ $key }} data is {{ $d }}</h6>
@empty
	<h6> No found any data</h6>
@endforelse











