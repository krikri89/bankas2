@extends('main')
@section('content')
<ul>
    <h1>Create</h1>
    <form action="{{route('banks-store')}}" method="post">

        Name <input type="text" name="name_input" />
        Surname<input type="text" name="surname_input" />
        Personal Number<input type="number" name="personal_nb_input" />
        Account Number<input type="number" name="account_nb_input" />
        Amount <input type="number" name="amount_input" />
        @csrf
        <button type="submit">Create a new account</button>
    </form>
</ul>
@endsection
