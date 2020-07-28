@extends('layouts.admin')
@section('render')
    
<div class="container">
  
<div class="alert alert-primary py-0" role="alert">
All News Category
  </div>

<div class="jumbotron py-3">
   <div class="row"> <div class="ml-auto mx-3">@include('admin.category.form')</div></div>
   <table class="table-striped" id="table_id">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>date and Time</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($newsCategories as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>@include('admin.category.description')</td>
            <td>{{$item->created_at}}</td>
            <td> @include('admin.category.edit')<span class="mx-3"></span> @include('admin.category.delete')</div></td>
        </tr>
            
        @endforeach
    </tbody>
   </table>
</div>
 </div>


@endsection
