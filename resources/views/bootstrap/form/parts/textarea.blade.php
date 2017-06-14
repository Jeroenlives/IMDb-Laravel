<div class="form-group">
    <label for="{{ $id }}"> {{ ucfirst($label).':' }} </label>
    <textarea name="{{ $name }}"
              id="{{ $id }}"
              cols="{{ $cols ?? 10 }}"
              rows="{{ $rows ?? 3 }}"
              placeholder="{{ $label }}"
              class="form-control"
              @if(isset($required) AND $required == TRUE)
                  required
              @endif
    >{{ $value ?? old($name) }}</textarea>
</div>