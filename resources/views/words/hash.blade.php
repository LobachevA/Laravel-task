@extends('layouts.app')
@section('hash')
    <p>Выбранные слова и их хеш</p>
    @if(!empty($_POST['submit']))
    @foreach($_POST['words'] as $word)
        @foreach ($_POST['alg'] as $alg)
        <p>Слово {!!$word!!} Метод {!!$alg!!} Результат: {!!hash($alg,$word)!!}</p>
        @endforeach
    @endforeach
    @endif
    <form action="/home" method="post">
        <input type="hidden" id="_token"  name="_token" value="{{ csrf_token() }}">
        <input type="hidden"  name="s" value="{{ $s }}">
        <input type="submit" name="save" value="Save">
    </form>

@stop