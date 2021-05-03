@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as admin!') }}



                    <div class="panel-body">
                     <div class="table-responsive">     
      
<div id="chatter">
      <table class="table">
      <p>Users in the system</p>
    <thead>
      <tr>
       
        <th>Name</th>
        <th>Email  Address</th>
        
      </tr>
    </thead>
    <tbody>
         @foreach( $users as $user )
   <tr>
        <td>{{$user->name}}</td>
     
        <td>{{$user->email}}</td>
  
        


            <!-- <button type="button" class="btn btn-info btn-sm">Activate</button>
<button type="button" class="btn btn-warning btn-smss">Deactivate</button> --></td>
      </tr>
  @endforeach
     
    </tbody>
  </table>




  
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
