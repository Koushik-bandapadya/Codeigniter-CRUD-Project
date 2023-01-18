<?php
class User_model extends CI_model{

    function create($formArray)
    {
        $this->db->insert('tblpriorities',$formArray);  //INSERT INTO  users (name , email values (? , ?))
      

    }

    function all()
    {
       return $tblpriorities = $this->db->get('tblpriorities')->result_array(); //SELECT * FROM tblpriorities


    }


    function getUser($priorityid)
    {
        $this->db->where('priorityid',$priorityid);
        return $tblpriorities = $this->db->get('tblpriorities')->row_array(); //SELECT * FROM tblpriorities where priorityid = ?


    }

    function updateUser($priorityid,$formArray)
    {
        $this->db->where('priorityid',$priorityid);
        $this->db->insert('tblpriorities',$formArray);    //UPDATE tblpriorities SET name = ? , where priorityid = ?
    }
 

    function deleteUser($priorityid)
    {
        $this->db->where('priorityid',$priorityid);
        $this->db->delete('tblpriorities');         //DELETE FROM tblpriorities where priorityid= ?
    }

}


?>