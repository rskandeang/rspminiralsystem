
<div class="container-fluid">
  <div class="row ">
     <div class="col-md-12">
        <div style="background-color:#32800A; color:#fff;" class="col-md-2"> <h4 class="text-center">List for all users</h4></div>
    </div>
    <div class="col-md-12 ">
        <div style="background-color:#32800A;" class="col-md-2 well">
           
            <span class="btn btn-default" id="btn-default" style="width:100%;"><?php echo $this->Html->link( "Create NewUser",array('controller'=>'Users','action'=>'add'),array('style'=>'color:green;') );?></span>

            <?php echo $this->Form->create('User', array('type' => 'get')); ?>
            <?php echo $this->Form->input('Search',array('class'=>'form-control','placeholder'=>'Search...','label'=>false,'style'=>'margin-top:20px;')); ?>
            <?php echo $this->Form->submit('Search',array('class'=>'form-control','style'=>'width:100%;margin-top:20px;')); ?>
            <?php echo $this->Form->end(); ?>
        
        </div>
        <div class="col-md-10 ">
             <table class="col-md-12 table table table-hover table-striped"cellpadding="0" cellspacing="0">
			<thead style="background-color:#32800A;color:#fff;"> 
				<tr> 
            <th class="table-header" style="text-align:center;">
                <?php echo $this->Paginator->sort('id', 'No',array('style'=>'color:#fff;')); ?></th>
            <th class="table-header" style="text-align:center;">
                <?php echo $this->Paginator->sort('username', 'User Name',array('style'=>'color:#fff;')); ?></th>
            <th class="table-header" style="text-align:center;">
                <?php echo $this->Paginator->sort('gender', 'Gender',array('style'=>'color:#fff;')); ?></th>
            <th class="table-header" style="text-align:center;">
                <?php echo $this->Paginator->sort('created', 'Created',array('style'=>'color:#fff;')); ?></th>
            <th class="table-header" style="text-align:center;">
                <?php echo $this->Paginator->sort('modified', 'Last Update',array('style'=>'color:#fff;')); ?></th>
            <th class="table-header" style="text-align:center;">
                <?php echo $this->Paginator->sort('phone', 'Phone',array('style'=>'color:#fff;')); ?></th>
            <th class="table-header" style="text-align:center;">
                <?php echo $this->Paginator->sort('email', 'Email',array('style'=>'color:#fff;')); ?></th>
            <th class="table-header" style="text-align:center;">
                <?php echo $this->Paginator->sort('status', 'Status',array('style'=>'color:#fff;')); ?></th>
            <!-- <th class="table-header" style="text-align:center;">Image</th> -->
            <th class="table-header" style="text-align:center;">Action</th>
    
				</tr>
			</thead>
      <?php $id=0; ?>
        <?php foreach($users as $user): ?>                
        <?php $id ++;?>
          
            <td scope="row"><?php echo $id; ?></td>
            <td style="text-align: center;"><?php echo $user['User']['username'];?></td>
            <td style="text-align: center;"><?php echo $user['User']['gender'];?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['created']); ?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['modified']); ?></td>
            <td style="text-align: center;"><?php echo $user['User']['phone']; ?></td>
            <td style="text-align: center;"><?php echo $user['User']['email']; ?></td>
            <td style="text-align: center;"><?php echo $user['User']['status']; ?></td>
            <!-- <td style="text-align: center;"><?php echo $this->Html->image($user['User']['image'], array('alt' => 'story image','style'=>'width:25px;')); ?></td> -->
            <td >

            <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', 
                    array('action'=>'edit', $user['User']['id']),array('escape' => false,'style'=>'color:green')); ?>
             | 
            <?php
                if( $user['User']['status'] != 0){ 
                     echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')). " ",array('action'=>'delete', $user['User']['id']) ,array('escape'=>false,'style'=>'color:red'));}
                else {
                    echo $this->Html->link('<i class="glyphicon glyphicon-repeat"></i>', array('action'=>'activate', $user['User']['id']),array('escape' => false,'style'=>'color:#2E86C1'));
                }
            ?>
            </td>
        </tr>
        <?php endforeach; ?>
 <?php unset($user); ?>

			</tbody>
		</table>
            </div>
            
    </div>
  </div>
</div>
