<x-layout class="list">
	<x-slot name="title">Activities</x-slot>
	<h2>
		<span>Activities</span>
		<a href="{{ route('activities.create') }}">+</a>
	</h2>
	@if ($activities->count() > 0)
		<ul class="activities">
			@foreach($activities as $activity)
				<x-activity-record :activity="$activity" />
			@endforeach
		</ul>
	@else
		<div class="activities">
			<a class="activity-record" href="{{ route('activities.create') }}">No Activities. Click to create.</a>
		</div>
	@endif
</x-layout>