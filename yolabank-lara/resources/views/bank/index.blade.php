@extends('main')

@section('content')
<ul>
    @forelse($banks as $bank)
    <li>
        <div>{{$bank->color}}</div>
        <a href="{{route('banks-edit', $bank)}}">EDIT</a>
        <form class="delete" action="{{route('banks-delete', $color)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Destroy</button>
        </form>
    </li>
    @empty
    <li>No banks, no life.</li>
    @endforelse
</ul>
<a href="{{route('banks-create')}}">Add banks to your life</a>
@endsection
