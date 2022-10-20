<?php
    namespace App\Services;

    use App\Models\User;

    class UserService
    {
        public function get($id = null) 
        {
            if ($id) {
                return User::select($id);
            } else {
                return User::selectAll();
            }
        }

        public static function post($data = null) 
        {
            if($data){
                return User::ValidaLogin($data);
            }else{
                $data = $_POST;

                return User::insert($data);
            }
        }

        public function update() 
        {
            $data = $_POST;

            return User::insert($data);
        }

        public function delete() 
        {
            $data = $_POST;

            return User::insert($data);
        }
    }