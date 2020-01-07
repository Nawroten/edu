
@extends('master')

@extends('sidebar')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 class="text-center">Dodaj studenta:</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('Student')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Imie" />
   </div>
   <div class="form-group">
    <input type="text" name="surname" class="form-control" placeholder="Nazwisko" />
   </div>
   <div class="form-group">

    <input type="text" name="id_group" class="form-control" placeholder="ID Grupy" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection