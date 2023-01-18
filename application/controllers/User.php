<?php
class User extends CI_controller{

    function index()
    {
        $this->load->model('User_model');
        $tblpriorities = $this->User_model->all();
        $data = array();
        $data['tblpriorities'] = $tblpriorities;
        $this->load->view('list',$data); 
    
    }


function create(){
$this->load->model('User_model');
// $this->form_validation ->set_rules('priorityid','priorityid', 'required');       
$this->form_validation ->set_rules('name','Name', 'required');
$this->form_validation ->set_rules('NotificationTIme','NotificationTIme', 'required');
$this->form_validation ->set_rules('EscalationTime','EscalationTime', 'required');
$this->form_validation ->set_rules('escalationLevel','escalationLevel', 'required');
    


if ($this->form_validation->run() == false) {
    $this-> load -> view('create');
        } else {
        //Save record to database
            $formArray = array();
            // $formArray['priorityid'] = $this->input->post('priorityid');
            $formArray['name'] = $this->input->post('name');
            $formArray['NotificationTIme'] = $this->input->post('NotificationTIme');
            $formArray['EscalationTime'] = $this->input->post('EscalationTime');
            $formArray['escalationLevel'] = $this->input->post('escalationLevel');
            


            $this -> User_model -> create($formArray);
            $this->session->set_flashdata('success', 'Record added successfully! ');
            redirect(base_url().'index.php/user/index');

        
        }
          }


          function edit($priorityid){
            
            $this->load->model('User_model');
            $tblpriorities = $this->User_model->getUser($priorityid);
            $data = array();
            $data['tblpriorities'] = $tblpriorities;

            $this->form_validation ->set_rules('name','Name', 'required');
            $this->form_validation ->set_rules('NotificationTIme','NotificationTIme', 'required');
            $this->form_validation ->set_rules('EscalationTime','EscalationTime', 'required');
            $this->form_validation ->set_rules('escalationLevel','escalationLevel', 'required');

                if ($this->form_validation->run() == false) {
                    $this->load->view('edit',$data);
        } else {
        //update record to database
            // $formArray = array();
            // // $formArray['priorityid'] = $this->input->post('priorityid');
            // $formArray['name'] = $this->input->post('name');
            // $formArray['NotificationTIme'] = $this->input->post('NotificationTIme');
            // $formArray['EscalationTime'] = $this->input->post('EscalationTime');
            // $formArray['escalationLevel'] = $this->input->post('escalationLevel');
            $formArray=array();
            $formArray['name']=$this->input->post('name');
            $formArray['NotificationTIme']=$this->input->post('NotificationTIme');
            $formArray['EscalationTime']=$this->input->post('EscalationTime');
            $formArray['escalationLevel']=$this->input->post('escalationLevel');
            $this->User_model->updateUser($priorityid, $formArray);


            // $this -> User_model -> create($formArray);
            $this->session->set_flashdata('success', 'Record updated successfully.');
            
            redirect(base_url().'index.php/user/index');

        }
          }



        //   function deleteuser($priorityid){
            
        //     $this->load->model('User_model');
        //     $tblpriorities = $this->User_model->getUser($priorityid);




        //     if (empty($tblpriorities)) {
        //         $this->session->set_flashdata('failure', 'Record not found in database.');
        //         redirect(base_url().'index.php/user/index');
        //     }
        // else {

        //     $this->User_model->deleteUser($priorityid);
        //     $this->session->set_flashdata('success', 'Record deleted successfully.');
            
        //     redirect(base_url().'index.php/user/index');

        // }
        //   }





          function delete($priorityid)
          {
            
            $this->load->model('User_model');
            $tblpriorities = $this->User_model->getUser($priorityid);
            if (empty($tblpriorities)) {
                $this->session->set_flashdata('failure', 'Record not found in database.');
                redirect(base_url().'index.php/user/index');
            }
            else{

            $this->User_model->deleteUser($priorityid);
            $this->session->set_flashdata('success', 'Record updated successfully.');
            redirect(base_url().'index.php/user/index');
                
            }

            // $this->User_model->deleteUser($priorityid);
            // $this->session->set_flashdata('success', 'Record updated successfully.');
            // redirect(base_url().'index.php/user/index');




          }




           






}
?>