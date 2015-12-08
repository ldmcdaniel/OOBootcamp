<?php

interface CanBeFiltered {
    public function filter();
}

class Favorited implements CanBeFiltered
{
    public function filter()
    {

    }
}

class Unwatched implements CanBeFiltered
{
    public function filter()
    {

    }
}

class Difficulty implements CanBeFiltered
{
    public function filter()
    {

    }
}

//*****Repository example*****//

interface Repository {
    public function save($data);
}

class MongoRepository implements Repository {
    public function save($data)
    {

    }
}

class FileRepository implements Repository {
    public function save($data)
    {

    }
}

//***** JSON example *****//

interface CastsToJson {
    public function toJson();
}

class User implements CastsToJson {}

class Collection implements CastsToJson {}


//Program to an interface, not to an implementation

interface Logger {
    public function execute($message);
}

class LogToFile implements Logger {
    public function execute($message)
    {
        var_dump('log the message to a file: ' . $message);
    }
}

class LogToDatabase implements Logger {
    public function execute($message)
    {
        var_dump('log the message to a database: ' . $message);
    }
}

class UsersController {

    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = "JohnDoe";

        //How do we log this information??
        $this->logger->execute($user);

    }
}

$controller = new UsersController(new LogToDatabase);

$controller->show();

//Think of an interface as a contract.  There is going to
//be an real logic inside. It lays down the terms for what
//any interpretation must adhere to.
interface Animal {
    public function communicate();
}

//This is an implematation
class Dog implements Animal {
    public function communicate()
    {
        return 'bark';
    }
}

class Cat implements Animal {
    public function communicate()
    {
        return 'meow';
    }
}

//Extra credit:  Polymorphism and the strategy pattern