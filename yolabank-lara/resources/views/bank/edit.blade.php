@extends('main')
@section('content')
<ul>
    <form action="{{route('banks-update', $bank)}}" method="post">
        Name <input type="text" name="name_input" value="{{$bank->name}}" readonly />
        Surname<input type="text" name="surname_input" value="{{$bank->surname}}" readonly />

        Personal Number<input type="number" name="personal_nb_input" value="{{$bank->personal_nb}}" readonly />

        Account Number<input type="number" name="account_nb_input" value="{{$bank->account_nb}}" readonly />

        Amount <input type="number" name="amount_input" value="{{$bank->amount}}" />

        @csrf
        @method('put')
        <button type="submit">Ja, this is a new account</button>
    </form>
</ul>
@endsection
