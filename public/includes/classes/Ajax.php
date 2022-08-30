<?php
/**
 * 
 */
class Ajax
{	private $displayId;
	private $pageLink;
	private $passedId;
	private $functionName;	
	function ajaxFetch($functionName,$displayId,$pageLink,$passedId)
	{
$this->displayId=$displayId;
$this->pageLink=$pageLink;
$this->passedId=$passedId;
$this->functionName=$functionName;
echo'<script>
try{
function '.$functionName.'('.$passedId.'){
   var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
      if(this.readyState==4 && this.status==200)
      {
        document.getElementById("'.$displayId.'").innerHTML=this.responseText;
      }
    }
      xmlhttp.open("GET","'.$pageLink.'?'.$passedId.'="+'.$passedId.',true);
      xmlhttp.send();
  }
}
catch(err){
	document.getElementById("tel").innerHTML=err.message;
}
  
</script>';
} 

}
?>
