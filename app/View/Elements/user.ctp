
<div class="container-fluid">
  <div class="row ">
     <div class="col-md-2">
        
        <!-- <div style="" class="col-md-12"><h4 class="text-center">List for all users</h4></div> -->
    </div>
    <div class="col-md-12 ">
         
      
        <div style="background-color:#E7E7E7;padding:6px;margin-bottom: 20px; " class="col-md-2 panel-body">
           
            <div style="background-color:#fff;padding-left:10px;padding-right:10px;padding-bottom:10px;">
                <span class="btn btn-default" id="btn-default" style="width:100%;background:#1d933F;"><?php echo $this->Html->link( "បង្កើតអ្នកប្រើថ្មី",array('controller'=>'Users','action'=>'add'),array('style'=>'color:#fff;') );?></span>

            <?php echo $this->Form->create('User', array('type' => 'get')); ?>
            <?php echo $this->Form->input('Search',array('class'=>'form-control','placeholder'=>'ស្វែងរក...','label'=>false,'style'=>'margin-top:10px;')); ?>
             <button type="submit" style='width:100%;margin-top:10px;' class="form-control">ស្វែងរក</button>
            <!-- <?php echo $this->Form->submit('Search',array('class'=>'form-control','style'=>'width:100%;margin-top:10px;')); ?> -->
            <?php echo $this->Form->end(); ?>
            </div>
        
        </div>
        <div class="col-md-10">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                   
        
                    <h1 class="panel-title "><strong class="pull-left" style="color:#1d933F;">​បញ្ជីឈ្មោះអ្នកគ្រប់គ្រង</strong>
                      <i style="color:green; font-size:20px;" class="fa fa-users fa-lg pull-right"></i><h1>
                </div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <p><?php echo $this->Session->flash(); ?></p>
                    <table class="col-md-12 table table-bordered table-hover table-striped " cellpadding="0" cellspacing="0">
                      <thead style="background-color:#f5f5f5;" > 
                        <tr> 
                           <!--  <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('id', 'No',array('style'=>'color:#000;')); ?></th> -->
                            <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('username', 'ឈ្មោះគណនីយ',array('style'=>'color:#000;')); ?></th>
                            <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('gender', 'ភេទ',array('style'=>'color:#000;')); ?></th>
                            <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('created', 'ថ្ងៃបង្កើត',array('style'=>'color:#000;')); ?></th>
                            <!-- <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('modified', 'Last Update',array('style'=>'color:#000;')); ?></th> -->
                            <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('phone', 'លេខទូរស័ព្ទ',array('style'=>'color:#000;')); ?></th>
                            <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('email', 'សារអេឡិចទ្រនិច',array('style'=>'color:#000;')); ?></th>
                            <!-- <th class="table-header" style="text-align:center;">
                                <?php echo $this->Paginator->sort('status', 'Status',array('style'=>'color:#000;')); ?></th> -->
                            <!-- <th class="table-header" style="text-align:center;">Image</th> -->
                            <th class="table-header" style="text-align:center;">សកម្មភាព</th>
                    
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
                                        array('action'=>'edit', $user['User']['id']),array('escape' => false,'title'=>'កែតម្រូវ','style'=>'color:#2DB4DB')); ?>
                                 | 
                                <?php
                                    if( $user['User']['status'] != 0){ 
                                         echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')). " ",array('action'=>'delete', $user['User']['id']) ,array('escape'=>false,'title'=>'លុបចេញ','style'=>'color:red','confirm'=>'តើអ្នកច្បាស់ទេថាត្រូវលុបអ្នកគ្រប់គ្រងម្នាក់នេះ?'));}
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





