@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customer {{$bank->name}}</div>


                <div class="card-body">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Personal Number</th>
                            <th>Account Number</th>
                            <th>Amount</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>


                        <tr>

                            <td>{{$bank->id}}</td>
                            <td>{{$bank->name}}</td>
                            <td>{{$bank->surname}}</td>
                            <td>{{$bank->personal_nb}}</td>
                            <td>{{$bank->account_nb}}</td>
                            <td>{{$bank->amount}}</td>
                            <td><a href="{{route('banks-edit', $bank->id)}}">Cash in / Cash out</a></td>

                            <td>
                                <form class="delete" action="{{route('banks-delete', $bank)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>


                        </tr>



                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
