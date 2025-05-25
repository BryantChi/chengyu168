<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $catalog->id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $catalog->title }}</p>
</div>

<!-- Intro Field -->
<div class="col-sm-12">
    {!! Form::label('intro', 'Intro:') !!}
    <p>{{ $catalog->intro }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $catalog->image }}</p>
</div>

<!-- File Field -->
<div class="col-sm-12">
    {!! Form::label('file', 'File:') !!}
    <p>{{ $catalog->file }}</p>
</div>

<!-- Views Field -->
<div class="col-sm-12">
    {!! Form::label('views', 'Views:') !!}
    <p>{{ $catalog->views }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $catalog->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $catalog->updated_at }}</p>
</div>

