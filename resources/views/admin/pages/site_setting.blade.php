@extends('admin.master')
@section('body')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break">Site Setting</span></h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" method="post" action="{{url('/admin/save-setting')}}"
                enctype="multipart/form-data">
                @csrf
                @if(session('msg'))
                <h1 class="bg-success"> {{session('msg')}} </h1> <br>
                @endif

                @if(count($errors)>0)

                <!-- validation errors   -->
                @foreach($errors->all() as $error )
                <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @endif
                <!--end validation errors    -->
                <fieldset>
<hr>
<h4>Site Basic</h4>
                <div class="control-group">
							  <label class="control-label" for="fileInput">Logo</label>
							  <div class="controls">
								<input class="input-file uniform_on"  name="logo" id="fileInput" type="file">
							  </div>
                <p class="help-block"> Images Must Be 222X108 pixel </p>
				</div>
                <div class="control-group">
                
							  <div class="controls">
				 <img src="@if($logo){{asset($logo->values)}}@endif" alt="">
                 </div>
                 
				</div>

                    <div class="control-group">
                            <label class="control-label" for="typeahead">Site title</label>
                            <div class="controls">
                                <input type="text" value="@if($title){{$title->values}}@endif" class="span6 typeahead" name="title" required >
                            
                            </div>
                    </div>
                    <hr>
                    <h4>Counting Section</h4>
                    @php
                      $data = explode(',',$counting->values);
                    @endphp

                    <div class="control-group">
                            <label class="control-label" for="typeahead">Total client</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" value="{{$data[0]}}" name="count[]" required >
                            
                            </div>
                    </div>
                    <div class="control-group">
                            <label class="control-label" for="typeahead">Company In Business (year)</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" value="{{$data[1]}}" name="count[]" required >
                            
                            </div>
                    </div>
                    <div class="control-group">
                            <label class="control-label" for="typeahead">Hign Score</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" value="{{$data[2]}}" name="count[]" required >
                            
                            </div>
                    </div>

                    <div class="control-group">
                            <label class="control-label" for="typeahead">Total No. Client Meeting</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" value="{{$data[3]}}" name="count[]" required >
                            
                            </div>
                    </div>

                    


                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save </button>

                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->


@endsection
