<?php

namespace App\Validation;

use App\Models\ApnaCollegeModel;

class ApnaCollegeRules
{
    // public function custom_rule(): bool
    // {
    //     return true;
    // }
    public function validateUser(string $str, string $fields, array $data){
        $model = new ApnaCollegeModel();
        $user = $model->where('email', $data['email'])
                      ->first();
    
        if(!$user)
          return false;
    
        return password_verify($data['password'], $user['password']);
      }
}
