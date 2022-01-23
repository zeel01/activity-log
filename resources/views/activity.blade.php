<x-layout class="edit">
	<x-slot name="title">
		{{ $activity->name }}
	</x-slot>
	<form method="POST" name="activity" class="activity">
		@csrf
		@method('PUT')

		<div class="name">
			<label for="name">Name</label>
			<input type="text" name="name" value="{{ $activity->name }}">
		</div>
		<div class="time start">
			<label for="time">Start</label>
			<input type="datetime" name="start_time" value="{{ $activity->start_time }}">
		</div>
		<div class="time end">
			<label for="time">End</label>
			<input type="datetime" name="end_time" value="{{ $activity->end_time }}">
		</div>
		
		<div class="description">
			<label for="description">Description</label>
			<textarea name="description" id="" cols="30" rows="10">{{ $activity->description }}</textarea>
		</div>

		<button name="submit" type="submit">Save</button>
		<button 
			name="delete" 
			type="submit"
			onclick="document.forms.activity._method.value = 'DELETE'">
			Delete
		</button>
	</form>
</x-layout>