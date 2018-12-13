@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Mo</h1>
        <p class="lead">
            燕南天
        </p>
        <p>
            行侠仗义，武功天下第一
        </p>
        <p>
            一切，将从这里开始。
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
        </p>
    </div>
@stop