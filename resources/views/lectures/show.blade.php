@extends('layouts.app_alt')
@section('title')
  TCN | {{$lecture->title}} Lecture

    
@endsection


@section('content')

{{-- <hr> --}}
<section class="inner_banner">
  <div class="container">
      <div class="row">
          <div class="col-12">
             <div class="full">
                 <h3 class = "">{{$lecture->title}}</h3>
             </div>
          </div>
      </div>
  </div>
</section>
  @auth
    @if (Auth::user()->lectures->where('id',$lecture->id)->first() !== null)
        <div class="container py-3">

          <a href="{{url('lectures/'.$lecture->id.'/edit')}}" class="btn btn-success float-left">Edit</a>
          {!!Form::open(['action' => ['App\Http\Controllers\LecturesController@destroy',$lecture->id],'class'=> 'float-right'])!!}
          {{Form::hidden('_method','DELETE')}}
          @csrf
      
          {{Form::submit('Delete', ['class'=>' btn btn-danger'])}}
          {!!Form::close()!!}
        </div>
        
    @endif
  @endauth
  	
<div class  =  "container" style="margin-top: 50px">
  @include('inc.messages')
    
    
    
    {!!$lecture->content!!}
</div>
@endsection