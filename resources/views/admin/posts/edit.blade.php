

@extends('template')

@section('content')

    <h1> Edit Post: {{ $post->title }}</h1>

    {!! Form::model($post, ['route'=>['admin.posts.store', $post->id],'method' => 'put']) !!}


    @include('admin.posts._form')

    <div class="form-group">

        {!! Form::submit('Salve', ['class'=>'btn-primary']) !!}

    </div>


    {!! Form::Close() !!}


@endsection