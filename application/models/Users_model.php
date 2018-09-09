<?php
    class Users_model extends CI_Model{
    
        public function get_users($user_id)
        {
            /*$config['hostname'] = "localhost";
            $config['username'] = "root";
            $config['password'] = "";
            $config['database'] = "users";

           $conection =   $this->load->database($config);
           */
          //$query = $this->db->get('users_login');
            $this->db->where('id',$user_id);
          $query = $this->db->get('users_login');
            
          //return $query->num_rows();
          return $query->result();
        }

        public function create_users($data){
           $this->db->insert('users_login',$data);

        }
        public function update_users($data,$id){
            $this->db->where('id',$id);
            $this->db->update('users_login',$data);
        }
        public function delete_users($id){
            $this->db->where('id',$id);
            $this->db->delete('users_login');
        }
    }
?>