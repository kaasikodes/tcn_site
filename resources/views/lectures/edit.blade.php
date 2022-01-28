@extends('layouts.app_ck')
@section('title')
  TCN | Edit Lecture

    
@endsection


@section('content')
  <!-- section -->
	
	<section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="full">
                       <h3 class = "resource-title">Edit Lecture</h3>
                   </div>
                </div>
            </div>
        </div>
      </section>
      <div class="container py-4">
        
        
        <form action="{{route('lectures.update', ['lecture' => $lecture])}}" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $lecture->title,['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
        
            <div class="form-group">
                {{Form::label('summary', 'Summary')}}
                {{Form::textarea('summary',$lecture->summary ,['id'=>'summary','class'=>'form-control','placeholder'=>'Summary', "rows" => "3"])}}
            </div>

            
            <div class="form-group">
                {{Form::label('belong_to', 'Category')}}
                <select class = "form-control" name = "belong_to">  
                    <option  disabled selected>Pick a category</option>
                    @foreach ($lecture->options as $key=>$value)
                        @if ($lecture->belong_to === $value)
                            <option value = "{{$value}}" class = "" selected>{{$key}}</option>
                        @else
                            <option value = "{{$value}}" class = "">{{$key}}</option>
                        @endif

                        
                    @endforeach
                    {{-- selected = "{{$lecture->belong_to === "pcm" ? "true":"false"}}" --}}
                </select>
            </div>

            <div class="form-group">
                {{Form::label('content', 'Content')}}
                {{Form::textarea('content',$lecture->content ,['id'=>'content','class'=>'form-control','placeholder'=>'Content'])}}
            </div>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>
        
            
        {{Form::hidden('_method','PUT')}}


            @csrf
            
           
            
            
            {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
        


           

        
        
        
        </form>
    </div>
      
      <!-- end section -->
      {{-- from here down ought to be done in view --}}

      <!-- controls section -->
	
@endsection

