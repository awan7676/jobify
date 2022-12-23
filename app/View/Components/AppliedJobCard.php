<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppliedJobCard extends Component
{
    public $jobName;
    public $dateOfApplication;
    public $img;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($jobName, $dateOfApplication, $img)
    {
        $this->jobName = $jobName;
        $this->dateOfApplication = $dateOfApplication;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.applied-job-card');
    }
}