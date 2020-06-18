<?php

require_once ('ControllerBase.php');

class UserContoller extends ControllerBase
{
    public function createDBHandler() {
        try { // on utilise un try catch pour renvoyer vers une erreur si la requête n'a pas fonctionné
            $user = [
                
                'name' => $_POST['name'],
                'family_name' => $_POST['family_name'],
                'pseudo' => $_POST['pseudo'],
                ':mail' => $_POST ['mail'],
                ':password' => $_POST ['password'],
                ':birth' => $_POST ['birth']
            ];

            $result = $this->model->inset($user);

            if(!$result) {
                $this->render('createUser', ['user' => $user, 'error' => true]);
            }

            $flash = "Bienvenue";
            $this->redirect('modelUser.php?flash=' . urlencode($flash));

        } catch (Exception $e) {
            $this->render('createUser', ['user' => $user, 'error' => $e]);
        }
    }
}

