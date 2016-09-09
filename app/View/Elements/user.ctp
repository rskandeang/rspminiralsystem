
<div class="container-fluid">
  <div class="row ">
     <div class="col-md-2">
        
        <!-- <div style="" class="col-md-12"><h4 class="text-center">List for all users</h4></div> -->
    </div>
    <div class="col-md-12 ">
        <p><?php echo $this->Session->flash(); ?></p>
      
        <div style="background-color:#E7E7E7;padding:6px;margin-bottom: 20px; " class="col-md-2 panel-body">
           
            <div style="background-color:#fff;padding-left:10px;padding-right:10px;padding-bottom:10px;">
                <span class="btn btn-default" id="btn-default" style="width:100%;background:#1d933F;"><?php echo $this->Html->link( "Create New User",array('controller'=>'Users','action'=>'add'),array('style'=>'color:#fff;') );?></span>

            <?php echo $this->Form->create('User', array('type' => 'get')); ?>
            <?php echo $this->Form->input('Search',array('class'=>'form-control','placeholder'=>'Search...','label'=>false,'style'=>'margin-top:10px;')); ?>
            <?php echo $this->Form->submit('Search',array('class'=>'form-control','style'=>'width:100%;margin-top:10px;')); ?>
            <?php echo $this->Form->end(); ?>
            </div>
        
        </div>
        <div class="col-md-10">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title "><strong class="pull-left"> Users List</strong>
                      <i style="color:green; font-size:20px;" class="fa fa-users fa-lg pull-right"></i><h1>
                </div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="col-md-12 table table-bordered table-hover table-striped " cellpadding="0" cellspacing="0">
                      <thead style="background-color:#f5f5f5;" > 
                        <tr> 
                           <!--  <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('id', 'No',array('style'=>'color:#000;')); ?></th> -->
                            <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('username', 'User Name',array('style'=>'color:#000;')); ?></th>
                            <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('gender', 'Gender',array('style'=>'color:#000;')); ?></th>
                            <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('created', 'Created',array('style'=>'color:#000;')); ?></th>
                            <!-- <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('modified', 'Last Update',array('style'=>'color:#000;')); ?></th> -->
                            <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('phone', 'Phone',array('style'=>'color:#000;')); ?></th>
                            <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('email', 'Email',array('style'=>'color:#000;')); ?></th>
                            <!-- <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('status', 'Status',array('style'=>'color:#000;')); ?></th> -->
                            <!-- <th class="table-header" style="text-align:center;">Image</th> -->
                            <th class="table-header" style="text-align:center;">Action</th>
                    
                        </tr>
                      </thead>
                      <tbody>
                        <?php $id=0; ?>
                        <?php foreach($users as $user): ?>                
                            <?php $id ++;?>
                              <tr>
                                <!-- <td scope="row"><?php echo $id; ?></td> -->
                                <td style="text-align: center;"><?php echo $user['User']['username'];?></td>
                                <td style="text-align: center;"><?php echo $user['User']['gender'];?></td>
                                <td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['created']); ?></td>
                                <!-- <td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['modified']); ?></td> -->
                                <td style="text-align: center;"><?php echo $user['User']['phone']; ?></td>
                                <td style="text-align: center;"><?php echo $user['User']['email']; ?></td>
                                <!-- <td style="text-align: center;"><?php echo $user['User']['status']; ?></td> -->
                                <!-- <td style="text-align: center;"><?php echo $this->Html->image($user['User']['image'], array('alt' => 'story image','style'=>'width:25px;')); ?></td> -->
                                <td >

                                <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', 
                                        array('action'=>'edit', $user['User']['id']),array('escape' => false,'style'=>'color:#2DB4DB')); ?>
                                 | 
                                <?php
                                    if( $user['User']['status'] != 0){ 
                                         echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')). " ",array('action'=>'delete', $user['User']['id']) ,array('escape'=>false,'style'=>'color:red'),array('confirm'=>'Are you sure you want to delet?'));}
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
        </div>
</div>
</div>
</div>





