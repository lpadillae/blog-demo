<div class="form-group">
    <label for="body">Content:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Post title"
           value="@isset($post->title){{ $post->title }}@endisset">
</div>

<div class="form-group">
    <label for="body">Content:</label>
    <textarea class="form-control" rows="5" id="body"
              name="body">@isset($post->body){{ $post->body }}@endisset</textarea>
</div>
<div class="btn-group">
    <button type="submit" class="btn btn-primary">Save post</button>
</div>
