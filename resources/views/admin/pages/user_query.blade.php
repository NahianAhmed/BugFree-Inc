@extends('admin.master')
@section('body')
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>Email</th>
								  <th>Date</th>
								  <th>Subject</th>
								  <th>Question</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                          @foreach($data as $data)
							<tr>
								<td>{{$data->name}}</td>
								<td class="center">{{$data->email}}</td>
								<td class="center">{{$data->created_at}}</td>
								<td class="center">
									<span >{{$data->subject}} </span>
								</td>
                                <td class="center">
									<span >{{$data->message}} </span>
								</td>
								<td class="center">
									
									<a class="btn btn-info" href="{{url('admin/read-user-query')}}/{{$data->id}}" title="Mark as read" >
										<i class="halflings-icon white check"></i>  
									</a>
									
								</td>
							</tr>
							@endforeach
							</tr>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection