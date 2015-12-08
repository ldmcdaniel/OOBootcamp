<?php namespace Acme;

class AuthController {

    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }

    //Method Injection: where we pass a dependency into the method
    public function register(RegisterUser $registration)
    {
        $this->registration->execute([], $this);
    }

    public function userRegisteredSuccessfully()
    {
        var_dump('created successfully. redirect somewhere.')
    }

    public function userRegisteredFailed(){
        var_dump('created unsuccessfully. redirect back.')
    }
}