 <div style="float:left;margin-left:-15%;margin-top:1%;width:15%;height:90%;">
<table> 
       <tbody> 
            <?php  
		 
         foreach ($brand as $row) 
         {  
            ?>
            <tr>  
            <td>
			<?php
			echo anchor('product_controller/view_product_by_brands',$row->brand_name);
			 ?>
            </td>  
            </tr>  
         <?php }  
         ?>  
      </tbody>
</table>
</div>