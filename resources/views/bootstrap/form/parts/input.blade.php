<div class="form-group@if($errors->has($name)) has-error@endif">
    <label for="{{ $id }}"> {{ ucfirst($label).':' }} </label>
    <input type="{{ $type }}"
           id="{{ $id }}"
           class="form-control"
           name="{{ $name }}"
           placeholder="{{ $placeholder ?? ucfirst($label) }}"
           {{ isset($required) ? 'required=""' : '' }}
           @if(in_array($type, ['password', 'password_confirmation']))
                value="{{ $value ?? old($name) }}"
           @endif
            @stack('attributes')
    >
</div>