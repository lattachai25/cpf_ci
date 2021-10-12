<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class News extends CI_Model{ 
     
    function __construct() { 
        $this->newsTbl   = 'news'; 
        $this->imgTbl = 'news_images'; 
    } 
     
    /* 
     * Fetch news data from the database 
     * @param id returns a single record if specified, otherwise all records 
     */ 
    public function getRows($id = ''){ 
        $this->db->select("*, (SELECT file_name FROM ".$this->imgTbl." WHERE news_id = ".$this->newsTbl.".id ORDER BY id DESC LIMIT 1) as default_image"); 
        $this->db->from($this->newsTbl); 
        if($id){ 
            $this->db->where('id', $id); 
            $query  = $this->db->get(); 
            $result = ($query->num_rows() > 0)?$query->row_array():array(); 
             
            if(!empty($result)){ 
                $this->db->select('*'); 
                $this->db->from($this->imgTbl); 
                $this->db->where('news_id', $result['id']); 
                $this->db->order_by('id', 'desc'); 
                $query  = $this->db->get(); 
                $result2 = ($query->num_rows() > 0)?$query->result_array():array(); 
                $result['images'] = $result2;  
            }  
        }else{ 
            $this->db->order_by('id', 'desc'); 
            $query  = $this->db->get(); 
            $result = ($query->num_rows() > 0)?$query->result_array():array(); 
        } 
         
        // return fetched data 
        return !empty($result)?$result:false; 
    } 
     
    /* 
     * Fetch image data from the database 
     * @param id returns a single record 
     */ 
    public function getImgRow($id){ 
        $this->db->select('*'); 
        $this->db->from($this->imgTbl); 
        $this->db->where('id', $id); 
        $query  = $this->db->get(); 
        return ($query->num_rows() > 0)?$query->row_array():false; 
    } 
     
    /* 
     * Insert news data into the database 
     * @param $data data to be insert based on the passed parameters 
     */ 
    public function insert($data = array()) { 
        if(!empty($data)){ 
            // Add created and modified date if not included 
            if(!array_key_exists("created", $data)){ 
                $data['created'] = date("Y-m-d H:i:s"); 
            } 
            if(!array_key_exists("modified", $data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
             
            // Insert news data 
            $insert = $this->db->insert($this->newsTbl, $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 
     
    /* 
     * Insert image data into the database 
     * @param $data data to be insert based on the passed parameters 
     */ 
    public function insertImage($data = array()) { 
        if(!empty($data)){ 
             
            // Insert news data 
            $insert = $this->db->insert_batch($this->imgTbl, $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 
     
    /* 
     * Update news data into the database 
     * @param $data array to be update based on the passed parameters 
     * @param $id num filter data 
     */ 
    public function update($data, $id) { 
        if(!empty($data) && !empty($id)){ 
            // Add modified date if not included 
            if(!array_key_exists("modified", $data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
             
            // Update news data 
            $update = $this->db->update($this->newsTbl, $data, array('id' => $id)); 
             
            // Return the status 
            return $update?true:false; 
        } 
        return false; 
    } 
     
    /* 
     * Delete news data from the database 
     * @param num filter data based on the passed parameter 
     */ 
    public function delete($id){ 
        // Delete news data 
        $delete = $this->db->delete($this->newsTbl, array('id' => $id)); 
         
        // Return the status 
        return $delete?true:false; 
    } 
     
    /* 
     * Delete image data from the database 
     * @param array filter data based on the passed parameter 
     */ 
    public function deleteImage($con){ 
        // Delete image data 
        $delete = $this->db->delete($this->imgTbl, $con); 
         
        // Return the status 
        return $delete?true:false; 
    } 
     
}