<label for="">Status</label>
<select class="form-control" name="published">
    @if (isset($article->id))
        <option value="0" @if ($article->published ==0) selected="" @endif> Not published</option>
        <option value="1" @if ($article->published ==1) selected="" @endif> Published</option>
    @else
        <option value="0"> Not published</option>
        <option value="1"> Published</option>
    @endif
</select>

<label for="">Name</label>
<input type="text" class="form-control" name="title" placeholder="Title of article" value="{{$article->title or
""}}" required>

<label for="">Slug (uni)</label>
<input type="text" class="form-control" name="slug" placeholder="Automatic generation" value="{{$article->slug or
""}}" readonly>

<label for="">Parent article</label>
<select class="form-control" name="categories[]" multiple>
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Short title</label>
<textarea class="form-control" id="description_short" name="description_short">
    {{$article->description_short or ""}}
</textarea>

<label for="">Big title</label>
<textarea class="form-control" id="description" name="description">
    {{$article->description or ""}}
</textarea>

<hr/>

<label for="">Meta title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta title" value="{{$article->meta_title or
""}}">

<label for="">Meta description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta description"
       value="{{$article->meta_description or ""}}">

<label for="">Meta keyword</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Meta keyword"
       value="{{$article->meta_keyword or ""}}">

<hr />

<input class="btn btn-primary" type="submit" value="Save">
