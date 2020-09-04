<?php
 $this->session       = \Config\Services::session();


if ($this->session->getFlashdata('message')!='') { 

 echo '<div class="alert alert-block alert-success">'.$this->session->getFlashdata('message').'</div>';

} 
else if($this->session->getFlashdata('success')!='')
{

 echo '<div class="alert alert-block alert-success">'.$this->session->getFlashdata('success').'</div>';

}
else if($this->session->getFlashdata('error')!='')
{

 echo '<div class="alert alert-danger">'.$this->session->getFlashdata('error').'</div>';

}
else if($this->session->getFlashdata('warning')!='')
{

 echo '<div class="alert alert-block alert-warning">'.$this->session->getFlashdata('warning').'</div>';

}else{

  if($message!=''){
  
  echo '<div class="alert alert-block alert-success">'.$message.'</div>';
}
}

 ?>