<h2 class="display-2">{{ $title }}</h2>
<form action="{{ url($href) }}"
      method="{{ in_array($method, ['get', 'post']) ? $method : 'post' }}"
      role="form"
      data-toggle="validator">
    @if(in_array($method, ['post', 'put', 'delete']))
        {{ csrf_field() }}
        {{ method_field($method) }}
    @endif
    {{ $slot }}
</form>