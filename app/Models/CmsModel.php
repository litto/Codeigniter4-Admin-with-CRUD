<?php
namespace App\Models;

use CodeIgniter\Model;


class CmsModel extends Model {
 
 protected $table = 'cms_pages';
 protected $primaryKey = 'page_id';
 protected $allowedFields = ['order','level','parent','position','published','default','featured','title','page_title','content','banner','date_update','seo_title','seo_keywords','seo_description','seo_slug'];


      
        public function get_records($limit,$start,$search) {
 
      
        return $this->findAll($limit, $start);
    }

        public function get_allrecords($search) {
    
 
        return $this->findAll();
    
    }


    public function update_record($id, $data) {
      
       $this->db->table('cms_pages')->update($data, ['page_id'=> $id]);

    }

    public function delete_record($id){
    
       $this->delete($id);

    }

    public  function unpublish_records($list){

       for($i=0;$i<count($list);$i++){
          $data = array('published' =>'0');
         $this->db->table('cms_pages')->update($data, ['page_id'=> $list[$i]]);

        }
         
    }

    public  function publish_records($list){

       for($i=0;$i<count($list);$i++){
          $data = array('published' =>'1');
         $this->db->table('cms_pages')->update($data, ['page_id'=> $list[$i]]);

        }
    }

    public  function delete_records($list){

       for($i=0;$i<count($list);$i++){
           $this->delete($list[$i]);

        }
    }

        public  function setorder_records($list){

       for($i=0;$i<count($list);$i++){
          $data = array('order' =>$list[$i][1]);
                $this->db->table('cms_pages')->update($data, ['page_id'=> $list[$i][0]]);

        }
    }
public function insertrecord($data)
{

    return $this->insert($data);
}

   public function getdetails($id)
        {
        
        return $this->where('page_id', $id)
                  ->first();
       }

public function updaterecord($data,$id) {
    $this->update($id, $data);
    return true;
}

    public function geterrormessages(){
        return $this->error(); 
    }

    public function getlastinsertid(){
        return $this->insertID();
    }

   public function get_level_selection()
        {
        $rec = $this->where(array('level' => '1'))->findAll();
         $list      =   array();
         for($i=0;$i<count($rec);$i++){
            $list[$i]["id"] =   $rec[$i]['page_id'];
            $list[$i]["title"]  =   $rec[$i]['title'];
            
            $recc = $this->where(array('level' => '2','parent'=>$rec[$i]['page_id']))->findAll();
            for($j=0;$j<count($recc);$j++){
                $list[$i]["items"][$j]['id']=$recc[$j]['page_id'];
                $list[$i]["items"][$j]['title']=$recc[$j]['title'];     
                $reccc = $this->where(array('level' => '3','parent'=>$recc[$i]['page_id']))->findAll();
                for($k=0;$k<count($reccc);$k++) {
                    $list[$i]["items"][$j]["items"][$k]['id']       =   $reccc[$k]['page_id'];
                    $list[$i]["items"][$j]["items"][$k]['title']    =   $reccc[$k]['title'];
                }
                unset($reccc);
                
            }
            unset($recc);
        
        }       
        unset($rec);        
        return $list;
       }


           function getLevl($id){
     
        if(empty($id)){
            return 1;
        }else{
             $rec = $this->where(array('page_id' => $id))->findAll();
            $level  =   $rec[0]['level'];
            return $level+1;
        }
    }

        function getNextOrder($parent){
       $this->selectMax('order');
       $rec = $this->findAll();

        if(count($rec)>0){
            return $rec[0]['order']+1;
        }else{
            return 1;
        }
    }





}

?>