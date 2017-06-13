<li class="{{ Request::is($href) ? "active" : false }}">
    <a href="{{ url($href) }}" >
        {{ $slot }}
    </a>
</li>