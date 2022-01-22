<x-layout class="edit">
	<x-slot name="title">
		{{ $activity->name }}
	</x-slot>
	<form method="POST" name="activity">
		@csrf
		@method('PUT')

		<input type="text" name="name" value="{{ $activity->name }}">
		<input type="datetime" name="start_time" value="{{ $activity->start_time }}">
		<input type="datetime" name="end_time" value="{{ $activity->end_time }}">
		
		<textarea name="description" id="" cols="30" rows="10">{{ $activity->description }}</textarea>

		<button name="submit" type="submit">Save</button>
		<button 
			name="delete" 
			type="submit"
			onclick="document.forms.activity._method.value = 'DELETE'">
			Delete
		</button>
	</form>
</x-layout>