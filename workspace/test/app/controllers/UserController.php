<?php

class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile()
    {
        return View::make('bonjour');
    }

}