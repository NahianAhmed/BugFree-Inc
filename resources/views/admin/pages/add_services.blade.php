@extends('admin.master')
@section('body')
<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break">Add Services</span></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="{{url('/admin/save-services')}}" enctype="multipart/form-data">
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
                          <div class="control-group">
							    <label class="control-label" for="typeahead">Service Name</label>
							    <div class="controls">
								 <input type="text" class="span6 typeahead" name="name" required >
								
							  </div>
						</div>
    

                        <div class="control-group">
							    <label class="control-label" for="typeahead">Short Description (200 char)</label>
							    <div class="controls">
								 <input type="text" class="span6 typeahead" name="short_description" required >
								
							  </div>
						</div>

                        

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Long Description</label>
                            <div class="controls">
                            <textarea class="cleditor" name="long_description" id="textarea2" rows="3"></textarea>
                            </div>
                        </div>

							
                <div class="control-group">
							  <label class="control-label" for="fileInput"> Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="image" id="fileInput" type="file" required>
							  </div>
                <p class="help-block"> Images Must Be 800X800 pixel </p>
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