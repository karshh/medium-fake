<div class="form-group">
    <label for="{{ $name }}">
        {{ $label }}
    </label>
    <textarea
        name="{{ $name }}"
        placeholder="{{ $label }}"
        value="{{ old($name) }}"
        class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
        rows="{{ $rows }}"
         ></textarea>
    @if($errors->has($name))
        <span class="invalid-feedback">
            {{ $errors->first($name) }}
        </span>
    @endif
</div>