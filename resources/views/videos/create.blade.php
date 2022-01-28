@extends('layouts.app_alt')
@section('title')
  TCN | Submit Video

    
@endsection


@section('content')
  <!-- section -->
	
	<section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="full">
                       <h3 class = "resource-title">Submit Video</h3>
                   </div>
                </div>
            </div>
        </div>
      </section>
      <div class="container py-4">
        
        
        <form action="{{route('videos.store')}}" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '',['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
        
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description','' ,['id'=>'description','class'=>'form-control','placeholder'=>'Description', "rows" => "3"])}}
            </div>

            {{-- first allow for user to select a category for video to be attached to --}}
            {{-- based of selection an api call is made to enable user select preferred lecture --}}
            {{-- allow for user to select a lecture for video to be attached to --}}

            <div class="form-group">
                <label for="video">Upload your video here</label>
                <input type="file" name="video" id="" class="form-control"> 
            </div>

            
           
        
            



            @csrf
            
           
            
            
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        


           

        
        
        
        </form>
    </div>
      
      <!-- end section -->
      {{-- from here down ought to be done in view --}}

      <!-- controls section -->
	
@endsection

