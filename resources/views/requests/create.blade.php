@extends('layouts.app_alt')
@section('title')
  TCN | Submit Request

    
@endsection


@section('content')
  <!-- section -->
	
	<section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="full">
                       <h3 class = "resource-title">Make a Lecture Request</h3>
                   </div>
                </div>
            </div>
        </div>
      </section>
      <div class="container py-4">
          @include('inc.messages')
        
        
        <form action="{{route('requests.store')}}" method="POST" >

            <div class="form-group">
                {{Form::label('topic', 'Topic')}}
                {{Form::text('topic', '',['class'=>'form-control','placeholder'=>'Topic'])}}
            </div>
        
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description','' ,['id'=>'description','class'=>'form-control','placeholder'=>'Description', "rows" => "3"])}}
            </div>

            {{-- first allow for user to select a category for video to be attached to --}}
            {{-- based of selection an api call is made to enable user select preferred lecture --}}
            {{-- allow for user to select a lecture for video to be attached to --}}

            
           
        
            



            @csrf
            
           
            
            
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        


           

        
        
        
        </form>
    </div>
      
      <!-- end section -->
      {{-- from here down ought to be done in view --}}

      <!-- controls section -->
	
@endsection

