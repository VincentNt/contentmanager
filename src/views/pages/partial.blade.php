@csrf
<div class="form-group">
    <label class="col-form-label">Name</label>
    <input class="form-control" type="text" name="title" placeholder="Page title" required value="{{old('title', isset($page)?$page->title:'')}}">
</div>

<div class="form-group">
    <label class="col-form-label">Body</label>
    <textarea id="summernote" class="form-control" name="summer_note" cols="30" rows="10">{{old('summer_note', isset($page)?$page->body:'')}}</textarea>
</div>
