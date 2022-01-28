@extends('layouts.app_alt')
@section('title')
  TCN | Submit Material

    
@endsection


@section('content')
  <!-- section -->
	
	<section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="full">
                       <h3 class = "resource-title">Submit Material</h3>
                   </div>
                </div>
            </div>
        </div>
      </section>
      <div class="container py-4">
          @include('inc.messages')
        
        
        <form action="{{route('materials.store')}}" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Name'])}}
            </div>
        
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description','' ,['id'=>'description','class'=>'form-control','placeholder'=>'Description', "rows" => "3"])}}
            </div>

            {{-- first allow for user to select a category for video to be attached to --}}
            {{-- based of selection an api call is made to enable user select preferred lecture --}}
            {{-- allow for user to select a lecture for video to be attached to --}}

            <div class="form-group">
                <label for="file">Upload material here (.pdf, .docx)</label>
                <input type="file" name="file" id="" class="form-control"> 
            </div>

            
           
        
            



            @csrf
            
           
            
            
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        


           

        
        
        
        </form>
    </div>
      
      <!-- end section -->
      {{-- from here down ought to be done in view --}}

      <!-- controls section -->
	
@endsection

