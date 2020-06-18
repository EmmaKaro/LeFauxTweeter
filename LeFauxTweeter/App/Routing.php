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
            $user = new UserController(
                $this->setupModel('UserModel', $this->setupDatabase())
            
            );
            
            $user-> ??
        });
        this->app->post('/Inscrip', [$user, 'createUser']);
        
    }

    private function setupDatabase() : Database{
        $Database = new Database(
            "127.0.0.1",
            "tweeter",
            "root",
            "",
            "3306"
        );
        return $Database;
    }

    private function setupModel(string $modelName, Database $Database){
        $model= new $modelName($Database);
        
        return $model;
    }
}
    
