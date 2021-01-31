<head>
    <meta charset="utf-8">
    {{-- ChartScript --}}
    @if($usersChart)
    {!! $usersChart->script() !!}
    @endif
</head>

<h1 align=center>Grafico</h1>

<div style="width: 50%">
    {!! $usersChart->container() !!}
</div>