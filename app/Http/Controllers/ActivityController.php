<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;

use Illuminate\Support\Facades\Log;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::select('activities.*', 'categories.name as category_name')
            ->join('categories', 'activities.category_id', '=', 'categories.id')
            ->get();

        return view('activities', ['activities' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activity = Activity::create([
            'name' => 'New Activity',
            'start_time' => date('Y-m-d H:i:s'),
            'end_time' => date('Y-m-d H:i:s', strtotime('+1 hour')),
            'category_id' => 1,
            'description' => ''
        ]);

        return redirect()->action(
            [ActivityController::class, 'show'], ['activity' => $activity->id]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        return view('activity', ['activity' => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('activity', ['activity' => $activity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityRequest  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        $updated = Activity::where('id', $activity->id)
            ->update([
                'name' => $request->name ?? '',
                'start_time' => date('Y-m-d H:i:s', strtotime($activity->start_time)),
                'end_time' => date('Y-m-d H:i:s', strtotime($activity->end_time)),
                //'category_id' => $request->category_id,
                'description' => $request->description ?? ''
            ]);

        return redirect()->action(
            [ActivityController::class, 'show'], ['activity' => $activity->id]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->action([ActivityController::class, 'index']);
    }
}
