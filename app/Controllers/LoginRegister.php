<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApnaCollegeModel;
use App\Validation\ApnaCollegeRules;

class LoginRegister extends BaseController

{
    public function login()
    {
        $data = [];
        helper(['form']);
        
        if ($this->request->getMethod(true)== 'POST') {

            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password don't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {
               //  return redirect()->to(base_url())->withInput()->with('validation', $this->validator);

                return view('home', [
                    "validation" => $this->validator,
                ]);

            } else {
                $model = new ApnaCollegeModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

                // Stroing session values
                $this->setUserSession($user);
                // Redirecting to dashboard after login
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to(base_url('homelogin'));

            }
        }
        return view('home');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'phone' => $user['phone'],
            'email' => $user['email'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function register()
    {
        $data = [];

        if ($this->request->getMethod()=='POST') {
            //let's do the validation here
            $rules = [
                // 'name' => 'required|min_length[3]|max_length[20]',
                // 'phone' => 'required|min_length[9]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[apnacollegestudents.email]',
                // 'password' => 'required|min_length[8]|max_length[255]',
                // 'password_confirm' => 'matches[password]',
            ];

            if (!$this->validate($rules)) {

                return view('home', [
                    "validation" => $this->validator,
                ]);
            } else {
                $model = new ApnaCollegeModel();

                $newData = [
                    'name' => $this->request->getVar('name'),
                    'phone' => $this->request->getVar('phone'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to(base_url('homelogin'));
            }
        }
        return view('home');
    }

    public function homelogin()
    {

        $data = [];
        $model = new ApnaCollegeModel();

        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('homelogin', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
?>