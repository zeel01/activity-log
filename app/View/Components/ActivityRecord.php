<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Activity;

class ActivityRecord extends Component
{
    public Activity $activity;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Activity $activity)
    {
        $this->activity = $activity;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.activity-record');
    }
}
