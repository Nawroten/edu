@extends('master')

@extends('sidebar')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 class="text-center">Dodaj grupę:</h3>
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

  <form method="post" action="{{url('Group')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="kierunek" class="form-control" placeholder="Kierunek" />
   </div>
   <div class="form-group">
    <input type="text" name="semestr" class="form-control" placeholder="Semestr" />
   </div>
   <div class="form-group">
    <input type="text" name="gr_dziekanska" class="form-control" placeholder="Grupa dziekańska" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection