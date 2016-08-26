<div  class="container-fluid ">
  <div class="row  ">
    <div class="col-md-12 ">
      <nav class="navbar navbar-default  row">
        <div class="container-fluid border">
          <div class="navbar-header">
			       
          </div>
            <ul class="nav navbar-nav ">
              <li ><?php echo $this->Html->image('logo.png', array('alt' => 'logo', 'border' => '0','width'=>'150','height'=>'60')); ?></li >
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li style="border-radius:50%" class="dropdown">
                  <a  class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->Html->image('profile.jpg', array('alt' => 'logo', 'border' => '0','width'=>'40','height'=>'30')); ?> User name
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><span>
                  <?php echo $this->Html->link( "Logout",array('controller'=>'Users','action'=>'logout'),array('style'=>'color:green','class'=>'glyphicon glyphicon-lock ') );?></span></a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li> 
                  </ul>
                </li>
              <li ><?php echo $this->Html->link( "Add Costomer",array('controller'=>'Costomers','action'=>'add'),array('style'=>'color:green','class'=>'glyphicon glyphicon-edit') );?></li>
              
            </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row ">
     <div class="col-md-12">
    <h1 class="text-center">All list of Costomer</h1>
    </div>
    <div class="col-md-12 ">
        <div class="col-md-1"></div>
        <div class="col-md-10 well">
             <table class="col-md-12"cellpadding="0" cellspacing="0">
			<thead> 
				<tr> 
				<th class="table-header">No</th>

                    <th class="table-header" style="text-align: center;">Name</th>
                    <th class="table-header" style="text-align: center;">Gender</th>
                    <th class="table-header" style="text-align: center;">Phone</th>
                    <th class="table-header" style="text-align: center;">Email</th>
				</tr>
			</thead>
      <?php $count=0; ?>
        <?php foreach($costomers as $costomer): ?>                
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td><?php echo $this->Form->checkbox('Costomer.id'.$costomer['Costomer']['id']); ?></td>
            <td style="text-align: center;"><?php echo $costomer['Costomer']['name'];?></td>
            <td style="text-align: center;"><?php echo $costomer['Costomer']['gender'];?></td>
            <td style="text-align: center;"><?php echo $costomer['Costomer']['phone']; ?></td>
            <td style="text-align: center;"><?php echo $costomer['Costomer']['email']; ?></td>
        </tr>
		<tr>
            <td>
                <?php echo $this->Html->link('view',array('controller'=>'costomers','action'=>'view',$costomer['Costomer']['id']),array('escape'=>false)); ?>   </td>
			<td>
        </tr>
        <?php endforeach; ?>

			</tbody>
		</table>
            </div>
             <div class="col-md-1"></div>
    </div>
  </div>
</div>


<footer class="container-fluid text-center success well">
    ក្រុមហ៊ុន រស្មីពេជ្រកណ្ដៀង
</footer>
<?php //echo $this->element('header'); ?> 
<?php //echo $this->element('customer'); ?> 
<?php //echo $this->element('pagination'); ?>
<?php //echo $this->element('footer'); ?> 
