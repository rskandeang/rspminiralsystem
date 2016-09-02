<!-- <div class="container-fluid">
  <div class="row ">
    <div class="col-md-12">
        <div style="background-color:#1d933F; color:#fff;" class="col-md-2"> <h4 class="text-center">List for all customers</h4></div>
    </div> -->
     <!-- <div class="col-md-2" style="margin-top:30px"><p style="margin-left: 109px;" class="btn btn-default"><?php echo $this->Html->link( "<< User list",array('controller'=>'Users','action'=>'index'),array('style'=>'color:green') );?></p></div>
     <div class="col-md-8">
        
     </div>
     <div class="col-md-2" style="margin-top:30px;"> <button class="btn btn-default" style="margin-left: -36px;"><?php echo $this->Html->link( "Add Customer",array('controller'=>'Costomers','action'=>'add'),array('style'=>'color:green') );?></button></div> -->
<!--     <div class="col-md-12 ">
         <div style="background-color:#1d933F;" class="col-md-2 well">
           
            <button class="btn btn-default" style="width:100%;" ><?php echo $this->Html->link( "Add Customer",array('controller'=>'Costomers','action'=>'add'),array('style'=>'color:green') );?></button>

            <?php echo $this->Form->create('Costomer', array('type' => 'get')); ?>
            <?php echo $this->Form->input('Search',array('class'=>'form-control','placeholder'=>'Search...','label'=>false,'style'=>'margin-top:20px;')); ?>
            <?php echo $this->Form->submit('Search',array('class'=>'form-control','style'=>'width:100%;margin-top:20px;')); ?>
            <?php echo $this->Form->end(); ?>
        
        </div>
        <div class="col-md-10 ">
             <table class="col-md-12 table table-hover table-striped"cellpadding="0" cellspacing="0">
			<thead style="background-color:#1d933F;color:#fff;"> 
				<tr> 
        <th class="table-header" style="text-align:center;">
            <?php echo $this->Paginator->sort('id', 'No',array('style'=>'color:#fff;')); ?></th> -->
				<!--
                    <th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('firstname', 'First Name',array('style'=>'color:#fff;')); ?></th>
					  
                    <th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('lastname', 'Last Name',array('style'=>'color:#fff;')); ?></th>
					  
                      <th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('username', 'User Name',array('style'=>'color:#fff;')); ?></th>
					--> 
<!-- 					<th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('username', 'User Name',array('style'=>'color:#fff;')); ?></th>
                    <th class="table-header" style="text-align: center;">
                      <?php echo $this->Paginator->sort('gender', 'Gender',array('style'=>'color:#fff;')); ?></th>
					  
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
       
        
       
            <td scope="row"><?php echo $id; ?></td> -->
		<!--	
            <td style="text-align: center;"><?php echo $costomer['Costomer']['firstname'];?></td>
			
            <td style="text-align: center;"><?php echo $costomer['Costomer']['lastname'];?></td>
			
            <td style="text-align: center;"><?php echo $costomer['Costomer']['username'];?></td> -->
			
<!-- 			<td style="text-align: center;"><?php echo $costomer['Costomer']['username'];?></td>
			
            <td style="text-align: center;"><?php echo $costomer['Costomer']['gender'];?></td>
			
            <td style="text-align: center;"><?php echo $costomer['Costomer']['phone']; ?></td>
			
            <td style="text-align: center;"><?php echo $costomer['Costomer']['email']; ?></td>
			
           <td style="text-align: center;"><?php echo $costomer['Costomer']['status']; ?></td> 

            <td >

            <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', 
                    array('action'=>'edit', $costomer['Costomer']['id']),array('escape' => false,'style'=>'color:green')); ?>
             | <?php echo $this->Html->link('<i class="fa fa-external-link" aria-hidden="true"></i>', 
                    array('action'=>'view', $costomer['Costomer']['id']),array('escape' => false,'style'=>'color:green')); ?>
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
            
    </div>
  </div>
</div> -->


<!-- /********************************************************************************************************/ -->

<div class="container-fluid">
  <div class="row ">
     <div class="col-md-2">
        
        <div style="" class="col-md-12"><h4 class="text-center">List for all users</h4></div>
    </div>
    <div class="col-md-12 ">
        <div style="background-color:#E7E7E7;padding:6px;margin-bottom: 20px; " class="col-md-2 panel-body">
           
            <div style="background-color:#fff;padding-left:10px;padding-right:10px;padding-bottom:10px;">
                <span class="btn btn-default" id="btn-default" style="width:100%;"><?php echo $this->Html->link( "Add Customer",array('controller'=>'Costomers','action'=>'add'),array('style'=>'color:green') );?></span>

            <?php echo $this->Form->create('Costomer', array('type' => 'get')); ?>
            <?php echo $this->Form->input('Search',array('class'=>'form-control','placeholder'=>'Search...','label'=>false,'style'=>'margin-top:20px;')); ?>
            <?php echo $this->Form->submit('Search',array('class'=>'form-control','style'=>'width:100%;margin-top:20px;')); ?>
            <?php echo $this->Form->end(); ?>
            </div>
        
        </div>
        <div class="col-md-10">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title "><strong class="pull-left"> Users List</strong>
                      <i style="color:green; font-size:20px;" class="fa fa-cogs fa-lg pull-right"></i><h1>
                </div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="col-md-12 table table-bordered table-hover table-striped " cellpadding="0" cellspacing="0">
                      <thead style="background-color:#f5f5f5;" > 
                        <tr> 
                      <th class="table-header" style="text-align:center;">
                          <?php echo $this->Paginator->sort('id', 'No',array('style'=>'color:#000;')); ?></th>
                      <!--
                                  <th class="table-header" style="text-align: center;">
                                    <?php echo $this->Paginator->sort('firstname', 'First Name',array('style'=>'color:#000;')); ?></th>
                          
                                  <th class="table-header" style="text-align: center;">
                                    <?php echo $this->Paginator->sort('lastname', 'Last Name',array('style'=>'color:#000;')); ?></th>
                          
                                    <th class="table-header" style="text-align: center;">
                                    <?php echo $this->Paginator->sort('username', 'User Name',array('style'=>'color:#000;')); ?></th>
                        --> 
                        <th class="table-header" style="text-align: center;">
                                    <?php echo $this->Paginator->sort('username', 'User Name',array('style'=>'color:#000;')); ?></th>
                                  <th class="table-header" style="text-align: center;">
                                    <?php echo $this->Paginator->sort('gender', 'Gender',array('style'=>'color:#000;')); ?></th>
                          
                                  <th class="table-header" style="text-align: center;">
                                    <?php echo $this->Paginator->sort('phone', 'Phone',array('style'=>'color:#000;')); ?></th>
                                  <th class="table-header" style="text-align: center;">
                        
                                    <?php echo $this->Paginator->sort('email', 'Email',array('style'=>'color:#000;')); ?></th>
                                  <th class="table-header" style="text-align: center;">
                        
                                  <?php echo $this->Paginator->sort('status', 'Status',array('style'=>'color:#000;')); ?></th>
                      
                                  <th class="table-header" style="text-align: center;">Action</th>
                      </tr>
                      </thead>
                      <tbody>
      <?php $id=0; ?>
        <?php foreach($costomers as $costomer): ?>                
        <?php $id ++;?>
       <tr>
        
       
            <td scope="row"><?php echo $id; ?></td>
    <!--  
            <td style="text-align: center;"><?php echo $costomer['Costomer']['firstname'];?></td>
      
            <td style="text-align: center;"><?php echo $costomer['Costomer']['lastname'];?></td>
      
            <td style="text-align: center;"><?php echo $costomer['Costomer']['username'];?></td> -->
      
      <td style="text-align: center;"><?php echo $costomer['Costomer']['username'];?></td>
      
            <td style="text-align: center;"><?php echo $costomer['Costomer']['gender'];?></td>
      
            <td style="text-align: center;"><?php echo $costomer['Costomer']['phone']; ?></td>
      
            <td style="text-align: center;"><?php echo $costomer['Costomer']['email']; ?></td>
      
           <td style="text-align: center;"><?php echo $costomer['Costomer']['status']; ?></td> 

            <td >

            <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', 
                    array('action'=>'edit', $costomer['Costomer']['id']),array('escape' => false,'style'=>'color:green')); ?>
             | <?php echo $this->Html->link('<i class="fa fa-external-link" aria-hidden="true"></i>', 
                    array('action'=>'view', $costomer['Costomer']['id']),array('escape' => false,'style'=>'color:green')); ?>
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
            </div>
           </div>
          </div>
        </div>
</div>
</div>
</div>
