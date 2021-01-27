@extends('pub_theme::layouts.app')
@section('content')

<div class="page-wrapper">
	{!! Theme::include('inner_page',[],get_defined_vars() ) !!}
	
	@include('pub_theme::layouts.partials.breadcrumb')
	

	<div class="container">
	<div class="row">
		<div class="col-sm-12">
        	<h5 class="card-title">Per Continuare</h5>
    	</div>

  


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Registrati</h5>
        <p class="card-text">Se non sei registrato che aspetti ?</p>
        <a href="{{ route('container0.create',['lang'=>$lang,'container0'=>'profile']) }}" class="btn btn-primary">Crea Profilo</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Login</h5>
        <p class="card-text">Se hai gia' un profilo esegui login</p>
        <a href="{{ route('login',['lang'=>$lang]) }}" class="btn btn-primary">login</a>
      </div>
    </div>
  </div>
</div>
<br/>
</div>
<br/>
</div>
@endsection