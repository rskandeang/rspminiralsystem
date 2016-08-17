
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
                  <?php echo $this->Html->link( " Logout",array('controller'=>'Users','action'=>'logout'),array('style'=>'color:green','class'=>'glyphicon glyphicon-lock') );?></span></a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li> 
                  </ul>
                </li>
              <li ><?php echo $this->Html->link( "SignUp",array('controller'=>'Users','action'=>'add'),array('style'=>'color:green','class'=>'glyphicon glyphicon-edit') );?></li>
              
            </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row ">
     <div class="col-md-12">
    <h1 class="text-center">All list of User</h1>
    </div>
    <div class="col-md-12 ">
        <div class="col-md-1"></div>
        <div class="col-md-10 well">
             <table class="col-md-12"cellpadding="0" cellspacing="0">
			<thead> 
				<tr> 
				<!-- <th class="table-header">No</th> -->
            <!-- <th class="table-header">First Name</th>
            <th class="table-header">Last Name</th> -->
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('id', 'No'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('username', 'User Name'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('gender', 'Gender'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('created', 'Created'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('modified', 'Last Update'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('phone', 'Phone'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('email', 'Email'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('status', 'Status'); ?></th>
            <th class="table-header" style="text-align: center;">Image</th>
            <th class="table-header" style="text-align: center;">Action</th>
            <!-- <th class="table-header" style="text-align: center;">User Name</th>
            <th class="table-header" style="text-align: center;">Gender</th>
            <th class="table-header" style="text-align: center;">Created</th>
            <th class="table-header" style="text-align: center;">Last update</th>
            <th class="table-header" style="text-align: center;">Phone</th>
            <th class="table-header" style="text-align: center;">Email</th>
            <th class="table-header" style="text-align: center;">Status</th>
            <th class="table-header" style="text-align: center;">Image</th>
            <th class="table-header" style="text-align: center;">Action</th> -->
				</tr>
			</thead>
      <?php $count=0; ?>
        <?php foreach($users as $user): ?>                
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td><?php echo $this->Form->checkbox('User.id'.$user['User']['id']); ?></td>
            <td style="text-align: center;"><?php echo $user['User']['username'];?></td>
            <td style="text-align: center;"><?php echo $user['User']['gender'];?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['created']); ?></td>
            <td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['modified']); ?></td>
            <td style="text-align: center;"><?php echo $user['User']['phone']; ?></td>
            <td style="text-align: center;"><?php echo $user['User']['email']; ?></td>
            <td style="text-align: center;"><?php echo $user['User']['status']; ?></td>
            <td style="text-align: center;"><?php echo $this->Html->image($user['User']['image'], array('alt' => 'story image','style'=>'width:25px;')); ?></td>
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
             <div class="col-md-1"></div>
    </div>
  </div>
</div>

<?php echo $this->element('pagination'); ?>  
<footer class="container-fluid text-center success well">
    ក្រុមហ៊ុន រស្មីពេជ្រកណ្ដៀង
</footer>