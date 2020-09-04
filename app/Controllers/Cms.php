<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CmsModel;

class Cms extends Controller {

  public function __construct()
        {
    $db = \Config\Database::connect();
    $this->ionAuth    = new \IonAuth\Libraries\IonAuth();
    $this->validation = \Config\Services::validation();
    helper(['form', 'url','string','text']);
    $this->configIonAuth = config('IonAuth');
    $this->session       = \Config\Services::session();
    $pager = \Config\Services::pager();
    }
        public function get_csrf_nonce()
    {
        
        $key = random_string('alnum', 8);
        $value = random_string('alnum', 20);
        $this->session->setFlashdata('csrfkey', $key);
        $this->session->setFlashdata('csrfvalue', $value);

        return [$key => $value];
    }

    /**
     * @return bool Whether the posted CSRF token matches
     */
    public function valid_csrf_nonce(){
        $csrfkey = $this->request->getPost($this->session->getFlashdata('csrfkey'));
        if ($csrfkey && $csrfkey === $this->session->getFlashdata('csrfvalue'))
        {
            return TRUE;
        }
            return FALSE;
    }

        public function index()
        {
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
        }

      



      public function admin_list()
       {


        if (! $this->ionAuth->loggedIn())
        {
            // redirect them to the login page
            return redirect()->to('/auth/login');
        }
      else if (! $this->ionAuth->isAdmin())// remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            throw new \Exception('You must be an administrator to view this page.');
        }
        else
        {



           //unpublish Record
        if($this->request->getPost()){
        if($this->request->getPost('unpublish')=='submitted')
        {
       $cnt    =   $this->request->getPost('count');
       $list   =   array();
       for($i=0;$i<$cnt;$i++){

        if($this->request->getPost('chkId'.$i)){
            $list[] =   $this->request->getPost('chkId'.$i);
        }
         }
        if(count($list)>0){
        $cmsmodel = new CmsModel();
       $cmsmodel->unpublish_records($list);

       $data['message']="Selected Items Unpublished";
       $this->session->setFlashdata('warning', 'Selected Items Unpublished');
        }else{
        $data['message']="No Items Selected";
        $this->session->setFlashdata('warning', 'No Items Selected');
        }   
       return redirect()->to('/auth/cms/list/');
       }


          if($this->request->getPost('publish')=='submitted')
        {
       $cnt    =   $this->request->getPost('count');
       $list   =   array();
       for($i=0;$i<$cnt;$i++){

        if($this->request->getPost('chkId'.$i)){
            $list[] =   $this->request->getPost('chkId'.$i);
        }
         }
        if(count($list)>0){
        $cmsmodel = new CmsModel();
       $cmsmodel->publish_records($list);

       $data['message']="Selected Items Published";
       $this->session->setFlashdata('success', 'Selected Items Published');
        }else{
        $data['message']="No Items Selected";
        $this->session->setFlashdata('warning', 'No Items Selected');
        }   
       return redirect()->to('/auth/cms/list/');
       }
          if($this->request->getPost('delete')=='submitted')
        {
       $cnt    =   $this->request->getPost('count');
       $list   =   array();
       for($i=0;$i<$cnt;$i++){

        if($this->request->getPost('chkId'.$i)){
            $list[] =   $this->request->getPost('chkId'.$i);
        }
         }
        if(count($list)>0){
        $cmsmodel = new CmsModel();
       $cmsmodel->delete_records($list);

       $data['message']="Selected Items Deleted";
       $this->session->setFlashdata('error', 'Selected Items Deleted');
        }else{
        $data['message']="No Items Selected";
        $this->session->setFlashdata('warning', 'No Items Selected');
        }   
       return redirect()->to('/auth/cms/list/');
       }

       if($this->request->getPost('updateOrder')=='submitted')
       {
        $cnt    =   $this->request->getPost('count');
        $list   =   array();
      $p  =   0;
    for($i=0;$i<$cnt;$i++){
        $list[$p][0]    =  $this->request->getPost('id'.$i);
        $list[$p][1]    =   $this->request->getPost('txtOrder'.$i);
        $p++;
         }
        if(count($list)>0){
          $cmsmodel = new CmsModel();
       $cmsmodel->setorder_records($list);
       $data['message']="Selected Items Ordered";
       $this->session->setFlashdata('success', 'Selected Items Ordered');
        }else{
        $data['message']="No Items Selected";
        $this->session->setFlashdata('warning', 'No Items Selected');
        }   
        return redirect()->to('/auth/cms/list/');
       }
   }
              $data['currentpage']="page-content";
 if($this->request->getPost('keyword')!='')
{
  $keyword=$this->request->getPost('keyword');
}else if($this->request->getVar('keyword')!=''){
$keyword=$this->request->getVar('keyword');
}else{
  $keyword='';
}
          $searchparameters='';
          $user = $this->ionAuth->user()->row();
          $data['user']=$user;
          $data['keyword']=$keyword;
          $order=2;
          $per_page_records=5; 
          $cmsmodel = new CmsModel();
           if($this->request->getVar('page'))
           {
            $page=$this->request->getVar('page');
           }else{
            $page=0;
           }

         $totalrecords= $cmsmodel->get_allrecords($searchparameters);
          //$data['count']=count($totalrecords);
      if($keyword!=''){
         $cmsmodel->like('title',$keyword);
         $cmsmodel->orlike('page_title',$keyword);
         $cmsmodel->orlike('seo_title',$keyword);
         $cmsmodel->orlike('seo_keywords',$keyword);
       }
       
        $data['records']=$cmsmodel->paginate($per_page_records);
        $data['pager']=$cmsmodel->pager;

        $data['cmsmodel']=$cmsmodel;

        //   $data = [
        //     'records' => $cmsmodel->paginate($per_page_records),
        //     'pager' => $cmsmodel->pager
        // ];

        $data['pagepass']=$page;
        $data['per_page_records']=$per_page_records;
        if($this->validation->getErrors()){
            $data['message']=$this->validation->listErrors();
        }

      //$data['pagelinks']=$pager->makeLinks($page,$per_page_records,$totalrecords,'admin_pagination');

       $mainheader=view('Admin\Views\admin_template\admin_mainheader', $data);
       $sidemenu =view('Admin\Views\admin_template\admin_sidebar' , $data);
      $notificationbar = view("Admin\Views\admin_template\admin_notification" , $data);
       $topheader = view('Admin\Views\admin_template\admin_topbar', $data);
      $messagebar = view('Admin\Views\admin_template\admin_message' , $data);
      $footer = view('Admin\Views\admin_template\admin_footer', $data);

      $data['mainheader']=$mainheader;
      $data['sidemenu']=$sidemenu;
        $data['topheader']=$topheader;
         $data['footer']=$footer;
        $data['messagebar']=$messagebar;


    echo view('cms\admin_list', $data);
  

          // Loading Libraries
        }
    }


public function unpublish_record($id){


     if (! $this->ionAuth->loggedIn())
        {
            // redirect them to the login page
            return redirect()->to('/auth/login');
        }
      else if (! $this->ionAuth->isAdmin())// remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            throw new \Exception('You must be an administrator to view this page.');
        }
        else
        {
      
        $data = array();
        $data = array('published' =>'0');
        $cmsmodel = new CmsModel();
        $cmsmodel->update_record($id, $data);
         $this->session->setFlashdata('warning', 'Selected Items Unpublished');
        echo '<script type="text/javascript">location.reload();</script>';

        }   

}


public function publish_record($id){
   if (! $this->ionAuth->loggedIn())
        {
            // redirect them to the login page
            return redirect()->to('/auth/login');
        }
      else if (! $this->ionAuth->isAdmin())// remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            throw new \Exception('You must be an administrator to view this page.');
        }
        else
        {
      
  
        $data = array();
        $data = array('published' =>'1');
          $cmsmodel = new CmsModel();
      $this->session->setFlashdata('success', 'Selected Items Published');
        $cmsmodel->update_record($id, $data);
        echo '<script type="text/javascript">location.reload();</script>';

        }   

}

public function del_record($id){

   if (! $this->ionAuth->loggedIn())
        {
            // redirect them to the login page
            return redirect()->to('/auth/login');
        }
      else if (! $this->ionAuth->isAdmin())// remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            throw new \Exception('You must be an administrator to view this page.');
        }
        else
        {
      
   
        $data = array();
          $cmsmodel = new CmsModel();
        $cmsmodel->delete_record($id);
              $this->session->setFlashdata('success', 'Selected Items Deleted');
        echo '<script type="text/javascript">location.reload();</script>';

        }   

}


public function create()
{
  
   if (! $this->ionAuth->loggedIn())
        {
            // redirect them to the login page
            return redirect()->to('/auth/login');
        }
      else if (! $this->ionAuth->isAdmin())// remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            throw new \Exception('You must be an administrator to view this page.');
        }
        else
        {

         $data['title'] = 'Create Page';
                // validate form input
        $this->validation->setRule('txtMenuTitle', 'Title', 'trim|required');
        $this->validation->setRule('txtParent', 'Parent', 'trim|required');
        $this->validation->setRule('txtTitle', 'PageTitle', 'trim|required');
        $this->validation->setRule('txtContent', 'Content', 'trim|required');


         if ($this->request->getPost() && $this->validation->withRequest($this->request)->run())
       {
         if ($this->valid_csrf_nonce() === FALSE)
            {
                throw new \Exception('You doesnt have authorisation to submit form.');
            }

       if ($this->validation->withRequest($this->request)->run())
        {

           $txtMenu        =    $this->request->getPost('txtMenuTitle');
           $txtParent      =    $this->request->getPost('txtParent');
           $txtTitle       =    $this->request->getPost('txtTitle');
           $txtContent     =    $this->request->getPost('txtContent');
           $seo_title      =    $this->request->getPost('seo_title');
           $seo_description=    $this->request->getPost('seo_description');
           $seo_keywords   =    $this->request->getPost('seo_keywords');
           $seo_slug       =    $this->request->getPost('seo_slug');
           $radPublish     =    1;
           $txtPosition    =    1;
            $imagename='';

     $validated = $this->validate([
            'txtFile' => [
                'uploaded[txtFile]',
                'mime_in[txtFile,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[txtFile,4096]',
            ],
        ]);

          if ($validated) {
         
            $avatar = $this->request->getFile('txtFile');
            $imagename = $avatar->getRandomName();
            $avatar->move(ROOTPATH . 'public/uploads',$imagename);
            //$imagename=$avatar->getClientName();

        }else{

          $imagename="demo.png";

        }



 $cmsmodel = new CmsModel();
        $level  = $cmsmodel->getLevl($txtParent);
        $order  =  $cmsmodel->getNextOrder($txtParent);
        $txtContent1=addslashes($txtContent);
        $date_update=date("Y-m-d H:i:s");
        if($seo_slug!=''){
         $seo_slug = url_title($seo_slug, 'dash', TRUE);    
        }else{ 
        $seo_slug = url_title($txtMenu, 'dash', TRUE); 
        }
       

        $insertdata = array('order'=>$order,'level'=>$level,'parent'=>$txtParent,'published'=>$radPublish,'title'=>$txtMenu,'page_title'=>$txtTitle,'content'=>$txtContent1,'position'=>$txtPosition,'date_update'=>$date_update,'seo_title'=>$seo_title,'seo_description'=>$seo_description,'seo_keywords'=>$seo_keywords,'seo_slug'=>$seo_slug,'banner'=>$imagename);

                // check to see if we are updating the user
                if ($cmsmodel->insertrecord($insertdata))
                {
                    $lastid=$cmsmodel-> getlastinsertid();
                    $successmessage='Record Inserted successfuly with Id: '.$lastid;
                    // redirect them back to the admin page if admin, or to the base url if non admin
                    $this->session->setFlashdata('success', $successmessage);
                    return redirect()->to('/auth/cms/list/');

                }
                else
                {
                    // redirect them back to the admin page if admin, or to the base url if non admin
                    $this->session->setFlashdata('error', $this->cmsmodel->geterrormessages());
                   return redirect()->to('/auth/cms/list/');

                }


        }//form submitted
    } //form valid
    

   
     $data['txtMenuTitle']=set_value('txtMenuTitle');
 
     $data['txtParent']=set_value('txtParent');
   
     $data['txtTitle']=set_value('txtTitle');

     $data['txtContent']=set_value('txtContent');

     $data['seo_title']=set_value('seo_title');
  
     $data['seo_keywords']=set_value('seo_keywords');

     $data['seo_slug']=set_value('seo_slug');

     $data['seo_description']=set_value('seo_description');

     $data['remainingtitlecount']='';
     $data['remainingdesccount']='';

      $cmsmodel = new CmsModel();
      $data['parentList']=$cmsmodel->get_level_selection();
      $data['csrf'] = $this->get_csrf_nonce();
      $data['currentpage']="edit_user";
      if($this->validation->getErrors()){
            $data['message']=$this->validation->listErrors();
        }
       $user = $this->ionAuth->user()->row();
          $data['user']=$user;

   $mainheader=view('Admin\Views\admin_template\admin_mainheader', $data);
       $sidemenu =view('Admin\Views\admin_template\admin_sidebar' , $data);
      $notificationbar = view("Admin\Views\admin_template\admin_notification" , $data);
       $topheader = view('Admin\Views\admin_template\admin_topbar', $data);
      $messagebar = view('Admin\Views\admin_template\admin_message' , $data);
      $footer = view('Admin\Views\admin_template\admin_footer', $data);

      $data['mainheader']=$mainheader;
      $data['sidemenu']=$sidemenu;
        $data['topheader']=$topheader;
         $data['footer']=$footer;
        $data['messagebar']=$messagebar;
    echo view('cms\create', $data);


      
        }

}




    public function edit($id)
      {
        
    if (! $this->ionAuth->loggedIn())
        {
            // redirect them to the login page
            return redirect()->to('/auth/login');
        }
      else if (! $this->ionAuth->isAdmin())// remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            throw new \Exception('You must be an administrator to view this page.');
        }
        else
        {

           $cmsmodel = new CmsModel();
      
            $data['title'] = 'Edit Page';
                // validate form input
        $this->validation->setRule('txtMenuTitle', 'Title', 'trim|required');
        $this->validation->setRule('txtParent', 'Parent', 'trim|required');
        $this->validation->setRule('txtTitle', 'PageTitle', 'trim|required');
        $this->validation->setRule('txtContent', 'Content', 'trim|required');

        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run())
      {

      if ($this->valid_csrf_nonce() === FALSE || $id != $this->request->getPost('id'))
            {
                throw new \Exception('You doesnt have authorisation to submit form.');
            }      
    if ($this->validation->withRequest($this->request)->run())
        {
           
           $txtMenu        =    $this->request->getPost('txtMenuTitle');
           $txtParent      =    $this->request->getPost('txtParent');
           $txtTitle       =    $this->request->getPost('txtTitle');
           $txtContent     =    $this->request->getPost('txtContent');
           $seo_title      =    $this->request->getPost('seo_title');
           $seo_description=    $this->request->getPost('seo_description');
           $seo_keywords   =    $this->request->getPost('seo_keywords');
           $seo_slug       =    $this->request->getPost('seo_slug');
     

          $validated = $this->validate([
            'txtFile' => [
                'uploaded[txtFile]',
                'mime_in[txtFile,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[txtFile,4096]',
            ],
        ]);
           
          if ($validated) {
         
            $avatar = $this->request->getFile('txtFile');
            $imagename = $avatar->getRandomName();
            $avatar->move(ROOTPATH . 'public/uploads',$imagename);
            //$imagename=$avatar->getClientName();
            $imagedata=array('banner'=>$imagename);
            $cmsmodel->updaterecord($imagedata,$id);

           }
 

        $base=$cmsmodel->getdetails($id);
        $txtContent1=addslashes($txtContent);
        $date_update=date("Y-m-d H:i:s");
        if($seo_slug!=''){
         $seo_slug = url_title($seo_slug, 'dash', TRUE);    
        }else{ 
        $seo_slug = url_title($txtMenu, 'dash', TRUE); 
        }
       

        $updatedata = array('parent'=>$txtParent,'title'=>$txtMenu,'page_title'=>$txtTitle,'content'=>$txtContent1,'date_update'=>$date_update,'seo_title'=>$seo_title,'seo_description'=>$seo_description,'seo_keywords'=>$seo_keywords,'seo_slug'=>$seo_slug);

                // check to see if we are updating the user
                if ($cmsmodel->updaterecord($updatedata,$id))
                {
                
                if($base["parent"]!=$txtParent){
                    $level  =  $cmsmodel->getLevl($txtParent);
                    $order  =  $cmsmodel->getNextOrder($txtParent);
              
                    $options=Array('order'=>$order,'level'=>$level);
                    $cmsmodel->updaterecord($options,$id);

                if($level!=1 && $base[0]["default"]==1){
                    
                    $options=Array('default'=>0);
                    $cmsmodel->updaterecord($options,$id);
                }
                
            }

                    $successmessage='Record Updated successfuly with Id: '.$id;
                    // redirect them back to the admin page if admin, or to the base url if non admin
                    $this->session->setFlashdata('success', $successmessage);
                    return redirect()->to('/auth/cms/list/');

                }
                else
                {
                    // redirect them back to the admin page if admin, or to the base url if non admin
                    $this->session->setFlashdata('error', $this->cmsmodel->geterrormessages());
                   return redirect()->to('/auth/cms/list/');

                }


        }//form submitted
    } //form valid
    



        $data['record']=$cmsmodel->getdetails($id);
        
        $data['remainingtitlecount']='';
        $data['remainingdesccount']='';
        $data['parentList']=$cmsmodel->get_level_selection();
        $data['csrf'] = $this->get_csrf_nonce();
        $data['currentpage']="edit_cms";
        $data['id']=$id;
        if($this->validation->getErrors()){
            $data['message']=$this->validation->listErrors();
        }
        $user = $this->ionAuth->user()->row();
        $data['user']=$user;
      $mainheader=view('Admin\Views\admin_template\admin_mainheader', $data);
      $sidemenu =view('Admin\Views\admin_template\admin_sidebar' , $data);
      $notificationbar = view("Admin\Views\admin_template\admin_notification" , $data);
      $topheader = view('Admin\Views\admin_template\admin_topbar', $data);
      $messagebar = view('Admin\Views\admin_template\admin_message' , $data);
      $footer = view('Admin\Views\admin_template\admin_footer', $data);

      $data['mainheader']=$mainheader;
      $data['sidemenu']=$sidemenu;
        $data['topheader']=$topheader;
         $data['footer']=$footer;
        $data['messagebar']=$messagebar;
      echo view('cms\edit', $data);
        




        }//valid request form submit    

     }






}







?>