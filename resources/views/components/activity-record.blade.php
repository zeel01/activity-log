<li>
    <a class="activity-record activity" href="{{ route('activities.show', $activity->id) }}">
        <div class="name">
            <span class="label">Name</span>
            <span class="value">{{ $activity->name }}</span>
        </div>
        <div class="time">
            <span class="label">Start</span>
            <span class="value">{{ $activity->start_time }}</span>
        </div>
        <div class="time">
            <span class="label">End</span>
            <span class="value">{{ $activity->end_time }}</span>
        </div>
        <div class="description">
            <span class="label">Description</span>
            <span class="value">{{ $activity->description }}</span>
        </div>
    </a>
</li>