@extends('pub_theme::layouts.app')
@section('content')
@include('extend::includes.components')
@include('extend::includes.flash')
<div class="page-wrapper">
	{{--
	@include('pub_theme::layouts.partials.inner_page')
	--}}
	@include('pub_theme::layouts.partials.breadcrumb_params')
	<div class="container m-t-30">
		<div class="widget clearfix">
			<!-- /widget heading -->
			<div class="widget-heading">
				<h3 class="widget-title text-dark">
					Carrello
				</h3>
				<div class="clearfix"></div>
			</div>
			<div class="widget-body">
				{!! Form::bsOpen($row,'store') !!}
				{{--
				<form method="post" action="#">
				--}}
					<div class="row">
						<div class="col-sm-6 margin-b-30">
							<div class="row">
								<div class="col-sm-12">
								<h4>Indirizzo di consegna</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
								{{ Form::bsText('firstname') }}
								</div>
								<div class="col-sm-6">
								{{ Form::bsText('surname') }}
								</div>
							</div>
							{{--
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Country*</label>
										<select class="form-control">
											<option>India</option>
											<option>USA</option>
											<option>UK</option>
											<option>Australia</option>
											<option>Japan</option>
											<option>Columbia</option>
											<option>Poland</option>
										</select>
									</div>
									<!--/form-group-->
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Company Name</label>
										<input type="text" class="form-control" placeholder="Lorem ipsum"> 
									</div>
									<!--/form-group-->
								</div>
							</div>
							--}}
							<div class="row">
								<div class="col-sm-12">
									{{ Form::bsAddress('address') }}
									{{--
									<div class="form-group">
										<label>Full Address*</label>
										<input type="text" class="form-control" placeholder="124, Lorem Street.."> 
									</div>
									--}}
									<!--/form-group-->
								</div>
							</div>
							{{--
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>City / State*</label>
										<input type="text" class="form-control" placeholder="Jaipur"> 
									</div>
									<!--/form-group-->
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Zip/ Postal Code*</label>
										<input type="text" class="form-control" placeholder="302012"> 
									</div>
									<!--/form-group-->
								</div>
							</div>
							--}}
							<div class="row">
								<div class="col-sm-6">
								{{ Form::bsText('email') }}
								</div>
								<div class="col-sm-6">
								{{ Form::bsText('phone') }}
								</div>
								{{--
									<div class="form-group">
										<label>Email Address*</label>
										<input type="text" class="form-control" placeholder="john@doe.com"> 
									</div>
									<!--/form-group-->
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>phone*</label>
										<input type="text" class="form-control" placeholder="123-345-3322"> 
									</div>
									<!--/form-group-->
								</div>
								--}}
							</div>
							<div class="row">
								<div class="col-sm-12">
									{{ Form::bsTextarea('note') }}
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="cart-totals margin-b-20">
								<div class="cart-totals-title">
									<h4>Cart Summary</h4>
								</div>
								<div class="cart-totals-fields">
									{{--  table  --}}
									<table  class="table table-striped table-bordered table-condensed table-hover ">
										<tbody>
											@foreach($item0->cartItems as $cart_item)
												<tr>
													<td>{{ $cart_item->pivot->related->title }}</td>
													<td align="right">{{ $cart_item->qty }}</td>
													<td align="right">{{ $cart_item->pivot->price }}</td>
												</tr>
												@foreach($cart_item->sons as $son)
												<tr>
													<td>+ {{ $son->pivot->related->title }}</td>
													<td align="right">{{ $son->qty }}</td>
													<td align="right">{{ $son->pivot->price }}</td>
												</tr>
												@endforeach
												<tr><td align="right">SubTotal</td>
													<td colspan="2" align="right">{{ $cart_item->subtot }}</td> 
											@endforeach
											{{--
											<tr>
												<td>Cart Subtotal</td>
												<td>$29.00</td>
											</tr>
											<tr>
												<td>Shipping &amp; Handling</td>
												<td>$2.00</td>
											</tr>
											<tr>
												<td class="text-color"><strong>Total</strong></td>
												<td class="text-color"><strong>$31.00</strong></td>
											</tr>
											--}}
											<tr>
												<td class="text-color"><strong>Total</strong></td>
												<td class="text-color" colspan="2" align="right"><strong>{{ $item0->cart_item_tot}}</strong></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!--cart summary-->
							<div class="payment-option">
								{{--
								<ul class=" list-unstyled">
									<li>
										<label class="custom-control custom-radio  m-b-20">
										<input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Payment on delivery</span>
										<br> <span>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span> </label>
									</li>
									<li>
										<label class="custom-control custom-radio  m-b-10">
										<input name="radio-stacked" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Paypal <img src="images/paypal.jpg" alt="" width="90"></span> </label>
									</li>
								</ul>
								--}}
								<p class="text-xs-center">
									{{-- 
									<a href="#" class="btn btn-outline-success btn-block">Conferma</a> 
									--}}
									{{ Form::bsSubmit('conferma') }}
								</p>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection