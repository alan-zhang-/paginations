@extends('base')

@section('content')

<ul class="pure-paginator">
    @if (isset($pages['prev']))
        <li><a class="pure-button prev" href="/prev-next/{{ $pages['prev'] }}">&#171;</a></li>
    @endif

    @if (isset($pages['next']))
        <li class="next"><a class="pure-button next" href="/prev-next/{{ $pages['next'] }}">&#187;</a></li>
    @endif
</ul>

<dl>
    <dt>
        Total Pages
    </dt>
    <dd>
        {{ $pages['total'] }}
    </dd>
    <dt>
        Current Page
    </dt>
    <dd>
        {{ $pages['current'] }}
    </dd>
</dl>

@stop