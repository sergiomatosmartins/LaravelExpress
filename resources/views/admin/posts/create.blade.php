

@extends('template')

@section('content')

    <h1> new Post</h1>

    {!! Form::open(['route'=>'admin.posts.store','method' => 'post']) !!}

    @include('admin.posts._form')

    <div class="form-group">

        {!! Form::submit('Creat Post', ['class'=>'btn-primary']) !!}

    </div>


    {!! Form::Close() !!}


@endsection