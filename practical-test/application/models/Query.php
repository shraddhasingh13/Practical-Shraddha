<?php 
   class Query extends CI_Model{


  public function insert_event($table,$array){
  	$qry = $this->db->insert($table,$array);
  	return $this->db->insert_id();

  }

public function insert_recurrence_event($table,$array){
  	$qry = $this->db->insert($table,$array);
  	return $qry;

  }

public function select_event_list(){
  	$qry = $this->db->select('*')->from('st_event')->get();
  	return $qry->result();

  }
  public function event_view($id){
  	$qry = $this->db->select('*')->where('event_id',$id)->from('st_event_recurrence')->get();
  	return $qry->result();

  }
  public function delete_event($id){
  	$qry = $this->db->where('event_id',$id)->delete('st_event');
  	$qry = $this->db->where('event_id',$id)->delete('st_event_recurrence');
  	return $qry;

  }




   }





 ?>