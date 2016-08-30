<div class="container-fluid">
  <div class="row ">
    <div class="col-md-12">
        <div style="background-color:#32800A; color:#fff;" class="col-md-2"> <h4 class="text-center">List for all customers</h4></div>
    </div>
     <!-- <div class="col-md-2" style="margin-top:30px"><p style="margin-left: 109px;" class="btn btn-default"><?php echo $this->Html->link( "<< User list",array('controller'=>'Users','action'=>'index'),array('style'=>'color:green') );?></p></div>
     <div class="col-md-8">
        
     </div>
     <div class="col-md-2" style="margin-top:30px;"> <button class="btn btn-default" style="margin-left: -36px;"><?php echo $this->Html->link( "Add Customer",array('controller'=>'Costomers','action'=>'add'),array('style'=>'color:green') );?></button></div> -->
    <div class="col-md-12 ">
         <div style="background-color:#32800A;" class="col-md-2 well">
           
            <button class="btn btn-default" style="width:100%;" ><?php echo $this->Html->link( "Add Customer",array('controller'=>'Costomers','action'=>'add'),array('style'=>'color:green') );?></button>

            <?php echo $this->Form->create('Costomer', array('type' => 'get')); ?>
            <?php echo $this->Form->input('Search',array('class'=>'form-control','placeholder'=>'Search...','label'=>false,'style'=>'margin-top:20px;')); ?>
            <?php echo $this->Form->submit('Search',array('class'=>'form-control','style'=>'width:100%;margin-top:20px;')); ?>
            <?php echo $this->Form->end(); ?>
        
        </div>
        <div class="col-md-10 ">
             <table class="col-md-12 table table-hover table-striped"cellpadding="0" cellspacing="0">
			<thead style="background-color:#32800A;color:#fff;"> 
				<tr> 
        <th class="table-header" style="text-align:center;">
            <?php echo $this->Paginator->sort('id', 'No',array('style'=>'color:#fff;')); ?></th>
                    <th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('firstname', 'First Name',array('style'=>'color:#fff;')); ?></th>
                    <th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('lastname', 'Last Name',array('style'=>'color:#fff;')); ?></th>
                      <th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('username', 'User Name',array('style'=>'color:#fff;')); ?></th>
                    <th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('Gender', 'Gender',array('style'=>'color:#fff;')); ?></th>
                    <th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('phone', 'Phone',array('style'=>'color:#fff;')); ?></th>
                    <th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('email', 'Email',array('style'=>'color:#fff;')); ?></th>
                    <th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('status', 'Status',array('style'=>'color:#fff;')); ?></th>
                    <th class="table-header" style="text-align: center;">Action</th>
				</tr>
      </thead>
			<tbody>
      <?php $id=0; ?>
        <?php foreach($costomers as $costomer): ?>                
        <?php $id ++;?>
       
        
       
            <td scope="row"><?php echo $id; ?></td>
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
             | <?php echo $this->Html->link('<i class="fa fa-external-link" aria-hidden="true"></i>', 
                    array('action'=>'detail', $costomer['Costomer']['id']),array('escape' => false,'style'=>'color:green')); ?>
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
             <!-- <div class="col-md-1"></div> -->
    </div>
  </div>
</div>