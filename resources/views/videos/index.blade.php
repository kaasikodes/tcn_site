@extends('layouts.app_alt')
@section('title')
  TCN | Videos

    
@endsection


@section('content')
  <!-- section -->
	
	<section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="full">
                       <h3 class = "resource-title">Videos</h3>
                   </div>
                </div>
            </div>
        </div>
      </section>
      <videos-container></videos-container>   
      <!-- end section -->
      {{-- from here down ought to be done in view --}}

      <!-- controls section -->
	
@endsection

