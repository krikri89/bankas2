@extends('main')
@section('content')
<ul>
    <form action="{{route('banks-update', $bank)}}" method="post">
        <input type="text" name="create_color_title" value="{{$bank->title}}" />

        <input type="color" name="create_color_input" value="{{$bank->color}}" />
        @csrf
        @method('put')
        <button type="submit">Ja, this is a new account</button>
    </form>
</ul>
@endsection
