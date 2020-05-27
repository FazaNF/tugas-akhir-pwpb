<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    </div>
</div>

<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
    {!! Form::label('body', 'Body', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('body', null, ['class' => 'form-control text-editor']) !!}
        <span class="help-block">
            <strong>{{ $errors->first('body') }}</strong>
        </span>
    </div>
</div>

<div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
    {!! Form::label('category_id', 'Category', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-12">
        {!! Form::select('category_id', $categories, old('category_id'), ['class' => 'form-control']) !!}
        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
        </span>
    </div>
</div>

@php
    if(isset($post)) {
        $tag = $post->tags->pluck('name')->all();
    } else {
        $tag = null;
    }
@endphp

<div class="form-group {{ $errors->has('tags') ? ' has-error' : '' }}">
    {!! Form::label('tags', 'Tag', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-12">
        {!! Form::select('tags[]', $tags, $tag, ['class' => 'form-control select2-tags', 'multiple']) !!}
        <span class="help-block">
            <strong>{{ $errors->first('tags') }}</strong>
        </span>
    </div>
</div>