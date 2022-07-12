@extends('main')

@section('content')
<ul>
    <li>
        <div>{{$bank->color}}
            <h2>{{$bank->title}}</h2>
        </div>
        <div class="controls">
            <a href="{{route('banks-edit', $color)}}">EDIT</a>
            <form class="delete" action="{{route('banks-delete', $bank)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
        </div>
    </li>
</ul>

@endsection
