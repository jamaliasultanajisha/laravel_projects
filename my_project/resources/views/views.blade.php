@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

		    <table>
    			<thead>
        			<tr>
            				<th> id</th>
            				<th> name</th>
            				<!<th> <!last name  </th>
            				<th> email </th>
            				<!<th> <!phone</th>
            				<!<th> <!adddress </th>
        			</tr>
    			</thead>
    			<tbody>
         			@foreach($users as $user)
          			<tr>
              				<td> {{$user->id}} </td>
              				<td> {{$user->name}} </td>
              				<td> {{$user->email}} </td>
          			</tr>
         			@endforeach
   				</tbody>
			</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
