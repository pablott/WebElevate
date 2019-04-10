<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Users_model extends CI_Model {
  //
  public function __construct()
  {
    // Initialize DB
    $this->load->database();
    //echo 'DB initialized';
  }


  // Get the whole list of users from DB
  public function get_users()
  {
    // Get table from DB
    $query = $this->db->get('users');
    if($query->num_rows() > 0){
      $result = $query->result_array();
      return $result;
    }else{
      return false;
    }
  }


  // Get user info from DB
  public function get_info($id)
  {
    // This code is duplicated and could be moved to the constructor,
    // however, reallistically a complex app may need a different query
    // for each method
    $query = $this->db->get('users');
    $result = $query->result_array();

    // Lookup by user_id
    foreach ($result as $key => $user) {
      if ($user['user_id'] == $id) {
        $thisUser = $user;
        return $thisUser;
        // The IDs are set to unique and autoincrement so
        // we can be confident that once we find one result
        // is time to break
        break;
      }
    }
  }
}
