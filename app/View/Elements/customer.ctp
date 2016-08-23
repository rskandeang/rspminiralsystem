<div class="container-fluid">
  <div class="row ">
     <div class="col-md-2" style="margin-top:30px"><p style="margin-left: 109px;" class="btn btn-default"><?php echo $this->Html->link( "<< User list",array('controller'=>'Users','action'=>'index'),array('style'=>'color:green') );?></p></div>
     <div class="col-md-8">
        <h1 class="text-center">All list of Costomer</h1>
     </div>
     <div class="col-md-2" style="margin-top:30px;"> <button class="btn btn-default" style="margin-left: -36px;"><?php echo $this->Html->link( "Add Customer",array('controller'=>'Costomers','action'=>'add'),array('style'=>'color:green') );?></button></div>
    <div class="col-md-12 ">
        <div class="col-md-1"></div>
        <div class="col-md-10 well">
             <table class="col-md-12"cellpadding="0" cellspacing="0">
			<thead> 
				<tr> 
				<th class="table-header">No</th>

                    <th class="table-header" style="text-align: center;">First Name</th>
                    <th class="table-header" style="text-align: center;">Last Name</th>
                    <th class="table-header" style="text-align: center;">User Name</th>
                    <th class="table-header" style="text-align: center;">Gender</th>
                    <th class="table-header" style="text-align: center;">Phone</th>
                    <th class="table-header" style="text-align: center;">Email</th>
                    <th class="table-header" style="text-align: center;">Status</th>
                    <th class="table-header" style="text-align: center;">Action</th>
				</tr>
			</thead>
      <?php $id=0; ?>
        <?php foreach($costomers as $costomer): ?>                
        <?php $id ++;?>
       
        
       
            <td><?php echo $id; ?></td>
            <td style="text-align: center;"><?php echo $costomer['Costomer']['firstname'];?></td>
            <td style="text-align: center;"><?php echo $costomer['Costomer']['lastname'];?></td>
            <td style="text-align: center;"><?php echo $costomer['Costomer']['username'];?></td>
            <td style="text-align: center;"><?php echo $costomer['Costomer']['gender'];?></td>
            <td style="text-align: center;"><?php echo $costomer['Costomer']['phone']; ?></td>
            <td style="text-align: center;"><?php echo $costomer['Costomer']['email']; ?></td>
            <td style="text-align: center;"><?php echo $costomer['Costomer']['status']; ?></td>

            <td >

            <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', 
                    array('action'=>'edit', $costomer['Costomer']['id']),array('escape' => false,'style'=>'color:green')); ?>
             | 
            <?php
                if( $costomer['Costomer']['status'] != 0){ 
                     echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')). " ",array('action'=>'delete', $costomer['Costomer']['id']) ,array('escape'=>false,'style'=>'color:red'));}
                else {
                    echo $this->Html->link('<i class="glyphicon glyphicon-repeat"></i>', array('action'=>'activate', $costomer['Costomer']['id']),array('escape' => false,'style'=>'color:#2E86C1'));
                }
            ?>
            </td>
        </tr>
        <?php endforeach; ?>

			</tbody>
		</table>
            </div>
             <div class="col-md-1"></div>
    </div>
  </div>
</div>