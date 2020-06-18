<?php
require_once __DIR__ . '/../Controller/UserController.php';
require_once __DIR__ . '/../Controller/ControllerBase.php';
require_once __DIR__ . '/../Model/modelUser.php';
require_once __DIR__ . '/../Database/db.php';


class Routing {

    /**
     * @var App
     */
    private $app;

    public function __construct(App $app)
    {
        $this->app = $app;
    }

    public function setup() {
        $this->app->get('/', function(){
            $user = new userController(
                $this->seupModel('UserModel', $this->setupDatabase())
            );
            $user->createUser();
        });
    }

    private function setupDatabase() : Database{
        $Database = new Database(
            "127.0.0.1",
            "tweeter",
            "root",
            "root",
            "8889"
        );
        return $Database;
    }

    private function setupModel(string $modelName, Database $Database){
        $model= new $modelName($Database);

        return $model;
    }
}
    
