@extends('layouts.app_ck')
@section('title')
  TCN | Create Lecture

    
@endsection


@section('content')
  <!-- section -->
	
	<section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="full">
                       <h3 class = "resource-title">Create Lecture</h3>
                   </div>
                </div>
            </div>
        </div>
      </section>
      <div class="container py-4">
        
        
        <form action="{{route('lectures.store')}}" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '',['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
        
            <div class="form-group">
                {{Form::label('summary', 'Summary')}}
                {{Form::textarea('summary','' ,['id'=>'summary','class'=>'form-control','placeholder'=>'Summary', "rows" => "3"])}}
            </div>

            
            <div class="form-group">
                {{Form::label('belong_to', 'Category')}}
                <select class = "form-control" name = "belong_to">  
                    <option selected disabled>Pick a category</option>
                    <option value="pcm">Protection, Control, & Metering</option>
                    <option value="sl">System Lines</option>
                    <option value="so">System Operation</option>
                    <option value="em">Electrical Maintainance</option>
                </select>
            </div>

            <div class="form-group">
                {{Form::label('content', 'Content')}}
                {{Form::textarea('content','' ,['id'=>'content','class'=>'form-control','placeholder'=>'Content'])}}
            </div>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>
        
            



            @csrf
            
           
            
            
            {{Form::submit('Save', ['class'=>'btn btn-primary'])}}
        


           

        
        
        
        </form>
    </div>
      
      <!-- end section -->
      {{-- from here down ought to be done in view --}}

      <!-- controls section -->
	
@endsection

