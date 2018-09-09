<?php
    class Users extends CI_Controller{
        public function show($user_id)
        {
            $this->load->model('Users_model');
            $result = $this->Users_model->get_users($user_id);
           $data['user'] = $result;
            
           //var_dump($result);
        /* foreach($result as $object){
             echo $object->id;
             echo $object->username;
             
         }*/
        $this->load->view('display_users',$data);
        }

        public function insert(){

            $username = "abcd";
            $password = "pass1234";

            $this->load->model('users_model');
            $this->users_model->create_users([
                'username' => $username,
                'password' => $password
            ]);
        }

        public function update(){   
            $id = 1;
            $username = "a1s1";
            $password = "1234567890";

            $this->load->model('users_model');
            $this->users_model->update_users([
                'username' => $username,
                'password' => $password
            ],$id);
        }
        
        public function delete(){
            $id = 2;
            $this->load->model('users_model');
            $this->users_model->delete_users($id);
        }
    }
?>