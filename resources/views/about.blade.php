@extends('layouts.main')

<!------------------------------------------php---------------------------------------------- ->
//


@section('stuff')
<h1> @lang('messages.about')</h1>
<br>
 <div class="row">
    <div class="col-12">
      <h3> GitHub: <a href='https://github.com/MeSans/Web-expenses-tracker' target="_blank"> Click here </a> </h3>
    </div>
  
  </div> 
   <hr>
   <div class="row">
    <div class="col-12">
      <h3> @lang('messages.creators'): Patriks Misāns, Georgs Tumans </h3>
    </div>
  </div>
@endsection