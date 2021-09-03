<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
     public function __construct(){
          parent::__construct();
         $this->load->library('session');
         $this->load->model('Query');
     }
	public function index()
	{
		$data['event_list_data']=$this->Query->select_event_list();
		$this->load->view('event_add',$data);
	}
	public function event_save(){
         $this->form_validation->set_rules('event_title','Event Title', 'required');
         $this->form_validation->set_rules('start_date','Start Date', 'required');
         $this->form_validation->set_rules('repeat_every','Repeat Every', 'required');
         $this->form_validation->set_rules('repeat_type','Repeat Type', 'required');
         $this->form_validation->set_rules('end_type','End Type', 'required');
         if($this->form_validation->run()==FALSE){
         	$this->session->set_flashdata('msg','Required fields are mandatory');
         	redirect(base_url());
         }else{
              $event_title = $this->input->post('event_title');
              $start_date = $this->input->post('start_date');
              $repeat_every = $this->input->post('repeat_every');
              $repeat_type = $this->input->post('repeat_type');
              $end_type = $this->input->post('end_type');
              $week_days= '';
              if($repeat_type=='Week'){
              	$week_days = $this->input->post('week_day');
                 $repeat_on = $repeat_every.'-'.$repeat_type.'|'.implode(',',$this->input->post('week_day'));
              }else{
              	$repeat_on = $repeat_every.'-'.$repeat_type; 
              }
              $end_date= '';
              $end_occurence= '0';
              $to = '';
            	$from = strtotime($start_date); 
            if($end_type == 'On'){
            	$end_date = $this->input->post('end_date');
            	$to = strtotime($end_date);
            	if($to<=$from){
            	     $this->session->set_flashdata('msg','End date must be greater than to start date');
         	         redirect(base_url());
                }
            }else{
            	$end_occurence = $this->input->post('end_occurence_day');
            }
            $array = [  
            			'event_title'=>$event_title,
            			'event_start_date'=>$start_date,
            			'event_repeat_every'=>$repeat_every,
            			'event_repeat_type'=>$repeat_type,
            			'event_repeat_on'=>$repeat_on,
            			'event_end_type'=>$end_type,
            			'event_end_date'=>$end_date,
            			'event_occurence'=>$end_occurence
            ];
           $last_id = $this->Query->insert_event('st_event',$array);
         //   echo $last_id;
           if($last_id>0){
           	     $duration_time = $repeat_every;
           	     $duration_type ='days';
           	    if($repeat_type=='Day'){
                     $duration_type = 'days';
           	    }elseif($repeat_type=='Week'){
                     $duration_type = 'weeks';
           	    }elseif($repeat_type=='Month'){
                     $duration_type = 'months';
           	    }elseif($repeat_type=='Year'){
                     $duration_type = 'years';
           	    }
           	  $recurrence_event_dates = array();
              $add_event_days = "+".$duration_time.$duration_type; 
              if($end_type=='On'){
              	     $current_date = $from;
              	     if($repeat_type=='Week'){
              	         while($current_date<=$to){ 
              	         	foreach ($week_days as $key => $value) {
              	         		$week_date = 'this week '.$value;	
              	                $dates= date('Y-m-d',strtotime($week_date,$current_date));
              	                $d_dates= strtotime($week_date,$current_date);
              	               if (($d_dates>=$from) && ($d_dates<=$to)) {
              	                	// echo $dates;
              	                $recurrence_arr = [
               						'event_id' => $last_id,
               						'start_date'=>$dates,
               						'event_day'=>date('l',strtotime($week_date,$current_date))
               					];
               					// var_dump($recurrence_arr);
               		          $this->Query->insert_recurrence_event('st_event_recurrence',$recurrence_arr);
               		   
              	                } 
              	     	   }
                 
              	     	   $current_date = strtotime($add_event_days,$current_date);  
                   }
              	     }else{
              	          while($current_date<=$to){ 
              	     	    $recurrence_arr = [
               						'event_id' => $last_id,
               						'start_date'=>date('Y-m-d',$current_date),
               						'event_day'=>date('l',$current_date)
               					];
               					// var_dump($recurrence_arr);
               		    $this->Query->insert_recurrence_event('st_event_recurrence',$recurrence_arr);
               		    $current_date = strtotime($add_event_days,$current_date);  
                     }
                   }
              }elseif($end_type=='After'){
              		 $current_date = $from;
              	  if($repeat_type=='Week'){
              	  		 $i=0;
              	
              	         while($i<=$end_occurence){ 
              	         	foreach ($week_days as $key => $value) {
              	         		echo $value;
              	         		// die;
              	         		$week_date = 'this week '.$value;	
              	                $dates= date('Y-m-d',strtotime($week_date,$current_date));
              	                $d_dates= strtotime($week_date,$current_date);
              	               if (($d_dates>=$from)) {
              	                	// echo $dates;
	              	                $recurrence_arr = [
	               						'event_id' => $last_id,
	               						'start_date'=>$dates,
	               						'event_day'=>date('l',strtotime($week_date,$current_date))
	               					];
	               					// var_dump($recurrence_arr);
	               		          $this->Query->insert_recurrence_event('st_event_recurrence',$recurrence_arr);
               		   
              	                } 
              	     	   }
                 
              	     	   $current_date = strtotime($add_event_days,$current_date); 
              	     	  $i++;  
                     
                   }
              	     }else{
              	     		 $i=1;
              	     while($i<=$end_occurence){ 
              	     	    $recurrence_arr = [
               						'event_id' => $last_id,
               						'start_date'=>date('Y-m-d',$current_date),
               						'event_day'=>date('l',$current_date)
               					];
               					// var_dump($recurrence_arr);
               		    $this->Query->insert_recurrence_event('st_event_recurrence',$recurrence_arr);
               		    $current_date = strtotime($add_event_days,$current_date);
               		    $i++;  
                     }
                     }

              }
             
           		 $this->session->set_flashdata('msg','Event Added Successfully.');
         	      redirect(base_url());
           }else{
           		     $this->session->set_flashdata('msg','Something happened wrong, Please Try again.');
         	         redirect(base_url());
            
           }

         }
	}

	public function event_delete($id)
	{
	     $this->Query->delete_event($id);
		$this->session->set_flashdata('msg','Event Deleted Successfully.');
         	         redirect(base_url());
	}
	public function event_view($id)
	{
	     $this->Query->event_view($id);
		$data['event_list_data']=$this->Query->event_view($id);
		$this->load->view('event_view',$data);
	
	}
}
