<?php

namespace App\View\Components;

use Illuminate\Queue\Jobs\JobName;
use Illuminate\View\Component;

class AvailableJobCard extends Component
{
    public $jobName;
    public $img;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($jobName, $img)
    {
        $this->jobName = $jobName;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.available-job-card');
    }
}