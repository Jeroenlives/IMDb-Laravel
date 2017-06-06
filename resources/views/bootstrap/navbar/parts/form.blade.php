<form
        action="{{ url($url) }}"
        method="{{ $method }}"
        class="navbar-form @stack('classes')">
    {{ $slot }}
</form>