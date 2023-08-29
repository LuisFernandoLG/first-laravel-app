<div class="field">
    <label for="title">Título</label>
    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
    @error('title')
        <small class="error-msg">{{ $message }}</small>
    @enderror
</div>
<div class="field">
    <label for="body">Contenido</label>
    <textarea name="body" id="body" cols="30" rows="10">{{ old('body', $post->body) }}</textarea>
    @error('body')
        <small class="error-msg">{{ $message }}</small>
    @enderror
</div>
