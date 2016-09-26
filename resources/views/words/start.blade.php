@extends('layouts.app')
@section('startform')
<form action="" method="post">
    <p>Choose words</p>
    <select name = "words[]" multiple size="4">
        @foreach($words as $word)
            echo "<option value ={{$word->word}}>{{$word->word}}</option>";
        @endforeach
    </select>
    <p>Choose algorithm</p>
    <select name = "alg[]" multiple size="4">
        <option value ="md5">md5</option>
        <option value ="sha1">sha1</option>
        <option value ="ripemd160">ripemd128</option>
        <option value ="crc32">crc32</option>
        <option value ="haval128,3">haval128,3</option>
    </select>
    <p>
        <input type="hidden" id="_token"  name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="submit" value="Send">
    </p>
</form>
@stop