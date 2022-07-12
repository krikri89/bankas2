@extends('main')
@section('content')
<ul>
    <h1>Create</h1>
    <form action="{{route('Banks-store')}}" method="post">

        <input type="text" name="create_color_title" />
        <input type="color" name="create_color_input" />
        @csrf
        <button type="submit">Ja, nice color</button>
    </form>
</ul>
@endsection
