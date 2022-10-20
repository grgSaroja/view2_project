@props(['name', 'type', 'class', 'value'])
<div>
    <div class="form-group">
        <label>{{ ucwords($name) }}</label>

        <input 
        class="{{ $class }}"
        type="{{ $type }}" 
        name="{{ $name }}" 
        value="{{ $value }}"
        />

    </div>
</div>

