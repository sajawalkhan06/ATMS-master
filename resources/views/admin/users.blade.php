@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
    <p>Welcome to the Users page.</p>

    @if(count($users)>0)

    	<div>
    		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    			<thead>
    				<tr>
		    			<th>#</th>
		    			<th>Name</th>
		    			<th>E-mail</th>
		    			<th class="text-center">Details</th>    					
    				</tr>
    			</thead>
    			<tbody>
			    	@foreach($users as $user)
			    		<tr>
			    			<td>{{$user->id}}</td>
			    			<td>{{$user->name}}</td>
			    			<td>{{$user->email}}</td>
			    			<td align="center">
			    				<form action="{{ url('users/'.$user->id) }}" method="POST">
			    					<input type="hidden" name="_method" value="GET">
			    					{{ csrf_field() }}
						    		<button type="submit" class="btn btn-block">Show</button>
			    				</form>
			    			</td>
			    		</tr>
			    	@endforeach
		    	</tbody>    			
    		</table>
    	</div>

    @else
    @endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
<!--     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

 -->
@stop

@section('js')
	<script type="text/javascript">
		$(document).ready(function() {
	    $('#example').DataTable();
	} );		
	</script>
@stop