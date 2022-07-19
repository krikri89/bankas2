@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New account creation</div>

                <div class="card-body">
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
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
