<li {{ Request::is($href) ? "class='active'" : false }}>
    <a href="{{ url($href) }}" class="@stack('classes')">
        {{ $slot }}
    </a>
</li>