@extends('layouts.app_alt')
@section('title')
  TCN | Lectures

    
@endsection


@section('content')
  <!-- section -->
	
	<section class="inner_banner">
        <div class="container">
    
            <div class="row">
                <div class="col-12">
                   <div class="full">
                       <h3 class = "resource-title">Lectures</h3>
                   </div>
                </div>
            </div>
        </div>
      </section>

     <div class="container">
      @include('inc.messages')
     </div>
      <lectures-container></lectures-container>   
      <!-- end section -->
      {{-- from here down ought to be done in view --}}

      <!-- controls section -->
	
@endsection

