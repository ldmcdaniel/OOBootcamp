<?php

//Example of Abstract Class and Interface working together

interface Provider {
    public function getAuthorizationUrl(;)
}

abstract class AbstractProvider {
    protected function related()
    {

    }
}

class FacebookProvider implements Provider {
    protected function getAuthorizationUrl()
    {
        return ''
    }
}

//Example of Abstract Class
abstract class Provider {
    abstract protected getAuthorizationUrl();
}

class FacebookProvider extends Provider {
    protected function getAuthorizationUrl()
    {
        return ''
    }
}


//Example of Interface
interface Provider {
    public function authorize();
}

//The login function doesn't need to know what provider we have,
//it just needs to know that whatever object we feed to it
//does adhere to the provider method and does offer an authorized method
function login(Provider $provider)
{
    $provider->authorize();
}

Auth::attempt();