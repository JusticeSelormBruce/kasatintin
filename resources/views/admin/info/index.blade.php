@extends('layouts.admin')
@section('render')
   <div class="container">
    <div class="alert alert-light shadow-sm" role="alert">
     <div class="row">
         <div class="mx-auto">  <h4>System Information</h4></div>
     </div>
       <br>
       <div class="row">
           <div class="ml-auto mx-5">@include('admin.info.logo')</div>
       </div>
    </div>
    <div class="shadow-lg">
          @include('admin.info.form')
    </div>
  
   </div>
@endsection