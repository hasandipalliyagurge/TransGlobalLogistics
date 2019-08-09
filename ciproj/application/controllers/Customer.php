<?php
 class Customer extends CI_Controller
 {
 	public function index()
 	{

 		$this->load->model('Customer_model');
 		$records=$this->Customer_model->getData();

 		$this->load->view('customer_view',['records'=>$records]);
 		
 	}

    public function index1()
    {
        $this->load->view('homeview');
        
    }

 	public function create(){
       $this->load->view('create');
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

        

 	public function edit($record_id){
		 	$this->load->model('Customer_model');
		 	$record=$this->Customer_model->getAllData($record_id);
		    $this->load->view('update',['record'=>$record]);
 	}

    public function update($record_id)
    {
    	  $this->form_validation->set_rules('name', 'name', 'required');
                $this->form_validation->set_rules('dob', 'Date of birth', 'required');
                $this->form_validation->set_rules('mobile', 'Mobile', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                // $this->form_validation->set_rules('username', 'Username', 'required');
                // $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('avail', 'avail', 'required');
                $this->form_validation->set_rules('register_date', 'register_date', 'required');
               
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');




                if ($this->form_validation->run())
                {
                $data=$this->input->post();
                $this->load->model('Customer_model');
                if($this->Customer_model->updateData($record_id,$data) )
                {
                	$this->session->set_flashdata('response','Record updated successfully!');
                }
                else
                {
                	$this->session->set_flashdata('response','Record Failed!');
                }
                return redirect('customer');
				}
				else 
				{
				$this->load->view('update');
				}
    }

    public function delete($record_id)
    {
     $this->load->model('Customer_model');
     if($this->Customer_model->deleteData($record_id))
     {
     	$this->session->set_flashdata('response','Record deleted successfully!');
     }
     else{
     	$this->session->set_flashdata('response','Failed to delete!');
     }
      return redirect('customer');
    }

  
 }

?>