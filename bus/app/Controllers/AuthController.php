<?php


namespace App\Controllers;

use App\Models\UtilisateurModel;

class AuthController extends BaseController
{
    // login process

    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $utilisateur = new UtilisateurModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (!$email || !$password) {
            return redirect()->to('/login')->withInput()->with('error', 'All fields are required');
        } else {
            $validationRules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]',
            ];

            if (!$this->validate($validationRules)) {
                return redirect()->to('/login')->withInput()->with('errors', $this->validator->getErrors());
            }

            $user = $utilisateur->where('email', $email)->first();

            //user found
            if ($user) {

                // $verifyPassword = password_verify($password, $user['password']);

                if ($password === $user['motDePasse']) {
                    $session = session();

                    $session->set([
                        'user_id' => $user['id'],
                        'username' => $user['nom'] . ' ' . $user['prenom'],
                        'email' => $user['email'],
                        'isLogged' => true,
                    ]);

                    return redirect()->to('/')->with('success', 'You are logged successfully !');
                } else {

                    return redirect()->to('/login')->withInput()->with('error', 'incorrect Password');
                }
            } else {

                return redirect()->to('/login')->withInput()->with('error', 'No user found with this email');
            }
        }
    }


    // registration process

    public function register()
    {
        return view('auth/register');
    }

    public function registerPost()
    {

        $utilisateur = new UtilisateurModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $phone = $this->request->getPost('telephone');
        $nom = $this->request->getPost('nom');
        $prenom = $this->request->getPost('prenom');


        if (!$email || !$password || !$phone || !$nom || !$prenom) {
            return redirect()->to('/register')->withInput()->with('error', 'All fields are required');
        } else {

            $validationRules = [
                'email' =>    'required|valid_email',
                'password' => 'required|min_length[8]',
                'telephone' => 'required|numeric|min_length[10]',
                'nom' =>     'required|min_length[3]',
                'prenom' =>     'required|min_length[3]',
            ];

            if (!$this->validate($validationRules)) {
                return redirect()->to('/register')->withInput()->with('errors', $this->validator->getErrors());
            }


            $isFound = $utilisateur->where('email', $email)->first();

            if ($isFound) {
                return redirect()->to('/register')->withInput()->with('error', 'There is already a user with this email.');
            } elseif (!$isFound) {

                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $data = [
                    'email' => $email,
                    'motDePasse' => $password,
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'telephone' => $phone
                ];

                $utilisateur->insert($data);

                return redirect()->to('/login')->with('success', 'Your account has been created successfully !');
            }
        }
    }


    // logout process

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'You logged out !');
    }
}