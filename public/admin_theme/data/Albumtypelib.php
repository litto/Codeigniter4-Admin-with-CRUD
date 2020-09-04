<?php

class Bodyconditionlib{



function deleteList($list){


		for($i=0;$i<count($list);$i++){								
			$user = bodycondition::byId($list[$i]);
            $user->delete();
		}
	}
	

	function unpublishList($list){
		for($i=0;$i<count($list);$i++){
$obj = bodycondition::byId($list[$i]);
$obj->status=0;
$obj->save();
		}
	}
	

	
	function publishList($list){
for($i=0;$i<count($list);$i++){
$obj = bodycondition::byId($list[$i]);
$obj->status=1;
$obj->save();
		}
	}

				function getnamedetails($id){
				 global $db;
		         $id=trim(strip_tags($id));
		         $query	=	"SELECT * FROM `cms_bodycondition` WHERE `name` LIKE '%".$id."%' LIMIT 0,1";

			     $rec		=	$db->rawQuery($query);
		
				return $rec;
			}


				function getdetails($id){
				 global $db;
				 $query	=	"SELECT * FROM `cms_bodycondition` WHERE `id`='$id' LIMIT 0,1";
				$rec		=	$db->rawQuery($query);
				
				return $rec;
			}

		function getall(){
				 global $db;
				 $query	=	"SELECT * FROM `cms_bodycondition` WHERE `status`='1' ORDER BY `name` ASC ";
				$rec		=	$db->rawQuery($query);
				
				return $rec;
			}


				

function listall($values){
	                global $db;
					$start		=	$values['start'];
					$limit		=	$values['limit'];
					$mode			=	trim($values['mode']);
					$ord			=	trim($values['ord']);
					$keyword	=	trim($values['keyword']);		
					$filter		=	trim($values['filter']);
					$searchcategory=$values['searchcategory'];
					$email=$values['searchemail'];
					$product=$values['searchproduct'];
					$qry="";
					$order	=	'';	

	       $brand=$values['searchbrand'];
				
					
			
						
					if(!empty($filter)){
						if($filter=='featured'){
								$qry.=' AND c.`featured`=\'1\'';
						}
						if($filter=='archived'){
								$qry.=' AND c.`archived`=\'1\'';
						}
					}
		
					
					$query	=	"SELECT count(c.`id`) FROM `cms_bodycondition` c WHERE c.`id`!=''";
					$query.=$qry;

					$rec	=	$db->rawQuery($query);
					$this->totalRecords	=	$rec[0]['count(c.`id`)'];
					
					$query	=	"SELECT c.* FROM `cms_bodycondition` c WHERE c.`id`!=''";
					$query.=$qry;
					$query.=' ORDER BY id ASC';
				   $query.=' LIMIT '.$start.','.$limit;
					$rec	=	$db->rawQuery($query);
					$this->pageRecords	=	count($rec);					
					return $rec;		
		
			}


}
?>	