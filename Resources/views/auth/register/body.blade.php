<!-- REGISTER -->
<div class="col-md-8">
	<div class="widget">
		<div class="widget-body">
			{!! Form::bsOpen($row,'store',"",null,"createRestaurantForm") !!}
				<div class="row">
					<div class="form-group col-sm-6">
						{{ Form::bsText('firstname') }}
					</div>
					<div class="form-group col-sm-6">
						{{ Form::bsText('surname') }}
					</div>
					<div class="form-group col-sm-6">
						{{ Form::bsText('email') }} 
					</div>
					<div class="form-group col-sm-6">
						{{ Form::bsText('handle') }}
					</div>
					<div class="form-group col-sm-6">
						{{ Form::bsText('passwd') }}
					</div>
					<div class="form-group col-sm-6">
						{{ Form::bsText('passwd_confirm') }} 
					</div>
					@include('pub_theme::widgets.privacy')					
				</div>
				<div class="row">
					{{ Form::bsSubmit('register') }}
				</div>
			{{ Form::close() }}
		</div>
		<!-- end: Widget -->
	</div>
	<!-- /REGISTER -->
</div>