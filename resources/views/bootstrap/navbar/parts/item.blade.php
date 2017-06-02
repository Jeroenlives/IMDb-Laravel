<li {{ Request::is($href) ? "class='active'" : false }}>
    <a href="{{ url($href) }}">{{ $slot }}</a>
</li>