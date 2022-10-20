@props(['name', 'type', 'class'])
<div>
    <div class="form-group">
        <label>{{ ucwords($name) }}</label>

        <input 
        class="{{ $class }}"
        type="{{ $type }}" 
        name="{{ $name }}" 
        required
        />

    </div>
</div>

