@extends('main')

@section('content')
<ul>
    @forelse($colors as $color)
    <li>
        <div class="color-box" style="background:{{$color->color}};">{{$color->color}}</div>
        <a href="{{route('banks-edit', $color)}}">|EDIT|</a>
        <form class="delete" action="{{route('banks-delete', $color)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">|Destroy|</button>
        </form>
    </li>
    @empty
    <li>No colors, no life.</li>
    @endforelse
</ul>
<a href="{{route('colors-create')}}">Add colors to your life</a>
@endsection
