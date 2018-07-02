<style type="text/css">
	.widget-task-list tbody tr td h4,
	.widget-task-list tbody tr td p{
		margin: 0px;
		white-space: nowrap; 
		text-overflow: ellipsis; 
		overflow: hidden; 
		width: 300px;
	}

	.widget-task-list thead tr th,
	.widget-task-list tbody tr td {
		padding: 10px 15px;
	}
	.widget-task-list thead tr th {
		padding-bottom: 5px;
	}
</style>
<div class="panel panel-default">
	<table class="table table-hover widget-task-list">
		<thead>
			<tr>
				<th>Title</th>
				<th>User</th>
				<th>Date Created</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tasks as $task)
				<tr>
					<td style="width: 70%;">
						<h4>{{ $task->title }}</h4>
						<p><small>{{ $task->description }}</small></p>
					</td>
					<td>{{ $task->name }}</td>
					<td>{{ date("M i, Y", strtotime($task->created_at)) }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>