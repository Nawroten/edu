@extends('master')

@extends('sidebar')


@section('content')

  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
<div class="container mt-2">
<br />
  <h3 class="text-center">Wybierz Grupę:</h3>
  <br />
<div class="row">
@foreach($groups as $row)
<div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kierunek: {{$row['kierunek']}}</h5>
        <p class="card-text">
      <p>Semestr: {{$row['semestr']}}</p>
      <p>Grupa dziekańska: {{$row['gr_dziekanska']}}</p>
      <p>Id grupy: {{$row['id_groups']}}</p> 
      </p>
     <a href="{{ url('livetable') }}" class="btn btn-primary">Wybierz</a>
    </div>
  </div>
  </div>
   @endforeach
</div>
<!--  <br />

      <table class="table table-striped table-bordered">
       <tbody>
       
       </tbody>
      </table>
      {{ csrf_field() }}


 
<script>
$(document).ready(function(){
 
 fetch_data();
 
 function fetch_data()
 {
  $.ajax({
   url:"/livetable/fetch_data",
   dataType:"json",
   success:function(data)
   
   {
    var html = '';


 
 
    for(var count=0; count < data.length; count++)
    {
    html +='<tr>';
    html +='<td contenteditable class="column_name" data-column_name="id_group" data-id="'+data[count].id_group+'">'+data[count].id_group+'</td>';
    html +='<td contenteditable class="column_name" data-column_name="kierunek" data-id="'+data[count].id_Student+'">'+data[count].kierunek+'</td>';
    html += '<td contenteditable class="column_name" data-column_name="semestr" data-id="'+data[count].id_Student+'">'+data[count].semestr+'</td>';
    html += '<td contenteditable class="column_name" data-column_name="gr_dziekanska" data-id="'+data[count].id_Student+'">'+data[count].gr_dziekanska+'</td>';
    }
    $('tbody').html(html);
   }
  });
 }
});
</script> -->

@endsection
