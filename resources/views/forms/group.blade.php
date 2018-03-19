<div class="form-group">
    <label for="{{ $name }}">
        {{ $label }}
    </label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        placeholder="{{ $label }}"
        value="{{ old($name) }}"
        class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
        required>
    @if($errors->has($name))
        <span class="invalid-feedback">
            {{ $errors->first($name) }}
        </span>
    @endif
</div>