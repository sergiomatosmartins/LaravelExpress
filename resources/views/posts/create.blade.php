
@extends('template')

    @section('content')

        <h1> Create new Post</h1>

        @if($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>'admin.posts.store','method' => 'post'])!!}

        <div class="form-group">

            {!!  Form::label('title','Title:') !!}
            {!!  Form::text('title', null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!!  Form::label('content','Comentario:') !!}
            {!!  Form::textarea('content', null,['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!!  Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

        </div>


        {!! Form::Close !!}

    @endsection