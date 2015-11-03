<div style="float:right;width:84%">           
         <?php 
         foreach ($product as $row) 
         {  
            ?>
                    <div style="float:left;border:1px solid red;width:220px;height:320px;">
                    <img  src='../../img/<?php echo $row->image;?>' />
                    <div>Model: <?php echo $row->name;?></div>
                    <div>Price: <?php echo $row->price;?> </div>
                    </div>
               <?php }  
   ?> 
