@extends('admin.master')
@section('body')	

<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break">Contact Info</span></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="{{url('/admin/save-contact-info')}}" enctype="multipart/form-data">
                        @csrf
                        @if(session('msg'))
                            <h1 class="bg-success">  {{session('msg')}}  </h1> <br>
                        @endif

                        @if(count($errors)>0)
                        
                        <!-- validation errors   -->
                        @foreach($errors->all() as $error )
                        <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                        @endif
                        <!--end validation errors    -->
						  <fieldset>
                            

                            <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Address*</label>
							  <div class="controls">
								<textarea class="span6 typeahead"  name="addresss" id="textarea2" required rows="3">@if($data) {{ $data->addresss }} @endif</textarea>
							  </div>
							</div>

                            <div class="control-group">
							    <label class="control-label" for="typeahead">Phone No.</label>
							    <div class="controls">
								 <input type="text" class="span6 typeahead" value="@if($data) {{ $data->phone }} @endif" name="phone" required >	
							  </div>
							</div>
                            <div class="control-group">
							    <label class="control-label" for="typeahead">Email Address</label>
							    <div class="controls">
								 <input type="text" class="span6 typeahead" value="@if($data) {{ $data->email }} @endif" name="email" required >	
							  </div>
							</div>
							
                <hr>
                <div class="control-group">
							    <label class="control-label" for="typeahead">Office time</label>
							    <div class="controls">
								 <input type="text" class="span6 typeahead" value="@if($data) {{ $data->office_time }} @endif" placeholder="9 AM - 5 PM" name="office_time" required >	
							  </div>
							</div>
                            <div class="control-group">
							    <label class="control-label" for="typeahead">Office Day</label>
							    <div class="controls">
								 <input type="text" class="span6 typeahead" value="@if($data) {{ $data->office_day }} @endif" placeholder="Monday - Friday" name="office_day" required >	
							  </div>
							</div>
                            <div class="control-group">
							    <label class="control-label" for="typeahead">Off Day</label>
							    <div class="controls">
								 <input type="text" class="span6 typeahead" value="@if($data) {{ $data->off_day }} @endif" placeholder="Friday" name="off_day" required >	
							  </div>
							</div>

                            <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Get In Touch Message</label>
							  <div class="controls">
								<textarea class="span6 typeahead"  name="get_in_touch" id="textarea2" required rows="3">@if($data) {{ $data->get_in_touch }} @endif</textarea>
							  </div>
							</div>
                            <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">MAP (api url only)</label>
							  <div class="controls">
								<textarea class="span6 typeahead" " name="map" id="textarea2" required rows="3">@if($data) {{ $data->map }} @endif</textarea>
							  </div>
							</div>

                           
						    <div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save </button>
							  
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->



@endsection