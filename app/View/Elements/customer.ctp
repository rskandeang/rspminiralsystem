
<div class="container-fluid">
  <div class="row ">
     <div class="col-md-12">
  
        <!-- <div  class="col-md-2"><h4 class="text-center">List for all customers</h4></div> -->
    </div>
    <div class="col-md-12 ">
        <div style="background-color:#E7E7E7;padding:6px;margin-bottom: 20px; " class="col-md-2 panel-body">
           
            <div style="background-color:#fff;padding-left:10px;padding-right:10px;padding-bottom:10px;">
                <span class="btn btn-default" id="btn-default" style="width:100%;background:#1d933F;"><?php echo $this->Html->link( "បង្កើតអតិថិជនថ្មី",array('controller'=>'Costomers','action'=>'add'),array('style'=>'color:#fff') );?></span>

            <?php echo $this->Form->create('Costomer', array('type' => 'get')); ?>
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
                    <h1 class="panel-title "><strong class="pull-left" style="color:#1d933F;">បញ្ជីឈ្មោះអតិថិជន</strong>
                      <i style="color:green; font-size:20px;" class="fa fa-users fa-lg pull-right"></i><h1>
                </div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <p><?php echo $this->Session->flash(); ?></p>
                    <table class="col-md-12 table table-bordered table-hover table-striped " cellpadding="0" cellspacing="0">
                      <thead style="background-color:#f5f5f5;" > 
                        <tr> 
                      <!-- <th class="table-header" style="text-align:center;">
                          <?php echo $this->Paginator->sort('id', 'No',array('style'=>'color:#000;')); ?></th>
                      -->
                                  <th class="table-header" style="text-align: center;">
                                    <?php echo $this->Paginator->sort('first_name', 'នាមត្រកូល',array('style'=>'color:#000;')); ?></th>
                          
                                  <th class="table-header" style="text-align: center;">
                                    <?php echo $this->Paginator->sort('last_name', 'នាមខ្លួន',array('style'=>'color:#000;')); ?></th>
                        
                        <th class="table-header" style="text-align: center;">
                                    <?php echo $this->Paginator->sort('user_name', 'កូដគណនី',array('style'=>'color:#000;')); ?></th>
                                  <th class="table-header" style="text-align: center;">
                                    <?php echo $this->Paginator->sort('gender', 'ភេទ',array('style'=>'color:#000;')); ?></th>
                          
                                  <th class="table-header" style="text-align: center;">
                                    <?php echo $this->Paginator->sort('phone', 'លេខទូរស័ព្ទ',array('style'=>'color:#000;')); ?></th>
                                  <th class="table-header" style="text-align: center;">
                        
                                    <?php echo $this->Paginator->sort('email', 'សារអេឡិចទ្រនិច',array('style'=>'color:#000;')); ?></th>
                                  <!-- <th class="table-header" style="text-align: center;"> -->
                        
                                  <!-- <?php echo $this->Paginator->sort('status', 'Status',array('style'=>'color:#000;')); ?></th> -->
                      
                                  <th class="table-header" style="text-align: center;">សកម្មភាព</th>
                      </tr>
                      </thead>
                      <tbody>
      <?php $id=0; ?>
        <?php foreach($costomers as $costomer): ?>                
        <?php $id ++;?>
       <tr>
        
       
            <!-- <td scope="row"><?php echo $id; ?></td> -->
      
			<td style="text-align: center;"><?php echo $costomer['Costomer']['first_name'];?></td>
			
			<td style="text-align: center;"><?php echo $costomer['Costomer']['last_name'];?></td>
			
			<td style="text-align: center;"><?php echo $costomer['Costomer']['user_name'];?></td>
      
            <td style="text-align: center;"><?php echo $costomer['Costomer']['gender'];?></td>
      
            <td style="text-align: center;"><?php echo $costomer['Costomer']['phone']; ?></td>
      
            <td style="text-align: center;"><?php echo $costomer['Costomer']['email']; ?></td>
      
           <!-- <td style="text-align: center;"><?php echo $costomer['Costomer']['status']; ?></td>  -->

            <td >

            <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', 
                    array('action'=>'edit', $costomer['Costomer']['id']),array('escape' => false,'title'=>'កែតម្រូវ','style'=>'color:#2DB4DB')); ?>
             | <?php echo $this->Html->link('<i class="fa fa-paper-plane" aria-hidden="true"></i>', 
                    array('action'=>'view', $costomer['Costomer']['id']),array('escape' => false,'title'=>'ពត៌មានលំអិត','style'=>'color:green')); ?>
             | 
            <?php
                if( $costomer['Costomer']['status'] != 0){ 
                     echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')). " ",array('action'=>'delete', $costomer['Costomer']['id']) ,array('escape'=>false,'title'=>'លុបចេញ','style'=>'color:red','confirm'=>'តើអ្នកច្បាស់ទេថាត្រូវលុបអតិថិជនម្នាក់នេះ?'));}
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
