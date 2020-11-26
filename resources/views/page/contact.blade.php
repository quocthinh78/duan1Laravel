@extends('layouts.masterContact')

@section('title', 'Contact')

@section('contact')
<div class="container" id="contactus" style="margin-top: 120px;">

  <div class="row">
    <h1 class="header-title"> Liên hệ </h1>
    <hr>
    <div class="col-sm-12 d-sm-flex" id="parent">
    	<div class="col-sm-6">
    	<iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJaY32Qm3KWTkRuOnKfoIVZws&key=AIzaSyAf64FepFyUGZd3WFWhZzisswVx2K37RFY" allowfullscreen></iframe>
    	</div>

    	<div class="col-sm-5">
			<form action="/contact/submit" class="contact-form" method="post">
				@csrf
		        <div class="form-group">
				  <input type="text" class="form-control" id="name" name="name" placeholder="Tên" autofocus="">
				<div>{{$errors->first('name')}}</div>
		        </div>
		    
		    
		        <div class="form-group form_left">
				  <input type="text" class="form-control" id="email" name="email" placeholder="Email" >
				  {{$errors->first('email')}}
		        </div>
		    
		      <div class="form-group">
				   <input type="text" class="form-control" name="phone" placeholder="Điện thoại"  id="phone" >
				   {{$errors->first('phone')}}
		      </div>
		      <div class="form-group">
			  <textarea class="form-control textarea-contact" rows="5" id="comment" name="comment" placeholder="Phản hồi của bạn"></textarea>
			  {{$errors->first('comment')}}
		      <br>
	      	  <button class=" mt-4 btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send </button>
		      </div>
     		</form>
    	</div>
    </div>
  </div>

  <div class="container second-portion">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">MAIL & WEBSITE</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp gondhiyahardik6610@gmail.com
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.hardikgondhiya.com
						</p>
					
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">CONTACT</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
							<br>
							<br>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+91)-756706XXXX
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">ADDRESS</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Junction Plot 
							 "Shree Krishna Krupa", Rajkot - 360001.
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		<!-- /Boxes de Acoes -->
		
		<!--My Portfolio  dont Copy this -->
	    
	</div>
</div>

</div>
@endsection
<style>
	#contactus div.form-group  {
		color :red;
		font-size : 14px;
	}
</style>