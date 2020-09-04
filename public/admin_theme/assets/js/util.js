// JavaScript Document

function checkAll(obj){
		var count	=	document.getElementById('count').value;		
		if(obj.checked==false){
				for(var i=0;i<count;i++){
						document.getElementById('chkId'+i).checked=false;
				}
		}
		else if(obj.checked==true){
				for(var i=0;i<count;i++){
						document.getElementById('chkId'+i).checked=true;
				}
		}
}
					
					

function showMenuPos(obj){		
		if(obj.value=='' || obj.value=='0'){
			document.getElementById('menuPos').style.display='block';
		}else{
			document.getElementById('menuPos').style.display='none';
		}
}