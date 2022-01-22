<x-layout class="list">
	<x-slot name="title">Activities</x-slot>
	<h2>Activities</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Start Time</th>
				<th>End Time</th>
				<th>Category</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			@foreach($activities as $activity)
				<tr>
					<td>
						<a href="/activities/{{ $activity->id }}">
							{{ $activity->name }}
						</a>
					</td>
					<td>{{ $activity->start_time }}</td>
					<td>{{ $activity->end_time }}</td>
					<td>{{ $activity->category_name }}</td>
					<td>{{ $activity->description }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</x-layout>