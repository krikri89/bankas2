@extends('main')

@section('content')

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Personal Number</th>
        <th>Account Number</th>
        <th>Amount</th>
    </tr>


    @forelse($banks as $bank)
    <tr>

        <td>{{$bank->id}}</td>
        <td>{{$bank->name}}</td>
        <td>{{$bank->surname}}</td>
        <td>{{$bank->personal_nb}}</td>
        <td>{{$bank->account_nb}}</td>
        <td>{{$bank->amount}}</td>

    </tr>

    <div>
        <a href="{{route('banks-edit', $bank->id)}}">Edit</a>
        <a href="{{route('banks-show', $bank->id)}}">Show</a>
        <form class="delete" action="{{route('banks-delete', $bank)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
    </div>


    @empty
    <li>No banks, no life.</li>
    @endforelse

</table>
<a href="{{route('banks-create')}}">Create a new account</a>

@endsection
