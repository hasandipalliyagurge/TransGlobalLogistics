<?php
class RegisterC extends CI_Controller
 {

    public function index()
 	{

 		$this->load->model('RegisterModel');
 		$records=$this->Customer_model->getData();

 		$this->load->view('customer_register',['records'=>$records]);
 		
 	}

 	public function create(){
       $this->load->view('customer_register');
 	}


    public function save(){

                $this->form_validation->set_rules('name', 'name', 'required');
                $this->form_validation->set_rules('dob', 'Date of birth', 'required');
                $this->form_validation->set_rules('mobile', 'Mobile', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('register_date', 'register_date', 'required');
                $this->form_validation->set_rules('avail', 'avail', 'required');
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');




                if ($this->form_validation->run())
                {
                $data=$this->input->post();
                $this->load->model('Customer_model');
                if($this->Customer_model->saveData($data) )
                {
                	$this->session->set_flashdata('response','Recorded successfully!');
                }
                else
                {
                	$this->session->set_flashdata('response','Record Failed!');
                }
                return redirect('customer');
				}
				else 
				{
				$this->load->view('create');
				}
    }

        

 }
?>