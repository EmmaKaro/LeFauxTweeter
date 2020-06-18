<?php

require_once ('ControllerBase.php');

class UserController extends ControllerBase
{
    public function createUser() {
        try { // on utilise un try catch pour renvoyer vers une erreur si la requête n'a pas fonctionné
            $user = [
                
                'name' => $_POST['name'],
                'family_name' => $_POST['family_name'],
                'pseudo' => $_POST['pseudo'],
                'mail' => $_POST ['mail'],
                'password' => $_POST ['password'],
                'birth' => $_POST ['birth']
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

    public function deleteUser() {
        try { // on utilise un try catch pour renvoyer vers une erreur si la requête n'a pas fonctionné
            
            $result = $this->model->delete($id);

            if(!$result) {
                $this->render('deleteUser', ['user' => $id, 'error' => true]);
            }

            $flash = "you die";
            $this->redirect('modelUser.php?flash=' . urlencode($flash));

        } catch (Exception $e) {
            $this->render('deleteUser', ['user' => $id, 'error' => $e]);
        }
    }

    public function modifyUser() {
        try { // on utilise un try catch pour renvoyer vers une erreur si la requête n'a pas fonctionné
            $user = [
                
                'name' => $_POST['name'],
                'family_name' => $_POST['family_name'],
                'infoPerso' => $_POST['infoPerso'],
                'birth' => $_POST ['birth']
            ];

            $result = $this->model->update($user);
            if(!$result) {
                $this->render('modifyUser', ['user' => $user, 'error' => true]);
            }

            $flash = "Modifications are successful";
            $this->redirect('modelUser.php?flash=' . urlencode($flash));

        } catch (Exception $e) {
            $this->render('modifyUser', ['user' => $user, 'error' => $e]);
        }
    }
}

