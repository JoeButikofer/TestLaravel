<?php

class Test extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function index()
    {
        return View::make('testLayout');
    }

}