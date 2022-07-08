@extends('main')
@section('content')
<ul>
    <form action="{{route('banks-store')}}" method="post">

        <input type="color" name="create_color_input" />
        @csrf
        <button type="submit">Ja, nice color</button>
    </form>
</ul>
@endsection
