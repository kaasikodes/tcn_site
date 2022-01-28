@extends('layouts.app_alt')
@section('title')
  TCN | Materials

    
@endsection


@section('content')
  <!-- section -->
	
	<section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="full">
                       <h3 class = "resource-title">Materials</h3>
                   </div>
                </div>
            </div>
        </div>
      </section>
      <div class="container">
        @include('inc.messages')
      </div>
      <materials-container></materials-container>   
      <!-- end section -->
      {{-- from here down ought to be done in view --}}

      <!-- controls section -->
	
@endsection

