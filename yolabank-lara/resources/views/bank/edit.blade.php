@extends('main')
@section('content')
<ul>
    <form action="{{route('banks-update', $color)}}" method="post">

        <input type="color" name="create_color_input" value="{{$color->color}}" />
        @csrf
        @method('put')
        <button type="submit">Ja, this is a new color</button>
    </form>
</ul>
@endsection
