@extends('master')
@section('content')  
<div class="container">
    <div class="row d-flex  justify-content-center align-items-center ">
        <div class="col-4">
            <form class="border p-2 shadow mt-5" method="post" action="login">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form> 
        </div>
    </div>
</div>
@endsection