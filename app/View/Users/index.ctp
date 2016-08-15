<div class="container-fluid">
  <div class="row ">
    <div class="col-md-12">
      <nav class="navbar navbar-default success row">
        <div class="container-fluid">
          <div class="navbar-header">
			
          </div>
            <ul class="nav navbar-nav ">
              <li ><?php echo $this->Html->link( "រស្មីពេជ្រកណ្ដៀង",array('controller'=>'staffs','action'=>'index'),array('style'=>'color:white') );?></li >
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li ><?php echo $this->Html->link( "Sign Up",array('controller'=>'Users','action'=>'add'),array('style'=>'color:white') );?></li>
              <li><span class="glyphicon glyphicon-log-out" style="margin-top:15px;margin-right:10px;">
                  <?php echo $this->Html->link( "Logout",array('controller'=>'Users','action'=>'logout'),array('style'=>'color:white') );?></span></li>
            </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
<h1>User​​​​​​​​​​​​​​​​</h1>
<div class="container-fluid">
  <div class="row ">
     <div class="col-md-12">
    <h1 class="text-center">All list of User</h1>
    </div>
    <div class="col-md-12 ">      
        <div class="col-md-9 well">
             <table class="col-md-12"cellpadding="0" cellspacing="0">
			<thead> 
				<tr> 
				<th class="table-header">No</th>
                    <th class="table-header">First Name</th>
                    <th class="table-header">Last Name</th>
                    <th class="table-header">User Name</th>
                    <th class="table-header">Gender</th>
                    <th class="table-header">Phone</th>
                    <th class="table-header">Email</th>
				</tr>
			</thead>
				<?php 
					foreach($users as $user){
						?>
						<tr> 
							<td><?php echo $user['User']['u_id']?></td>
							<td><?php echo $user['User']['firstname']?></td>
              <td><?php echo $user['User']['lastname']?></td>
							<td><?php echo $user['User']['username']?></td>
							<td><?php echo $user['User']['gender']?></td>
							<td><?php echo $user['User']['phone']?></td>
							<td><?php echo $user['User']['email']?></td>
				<?php
					}
				?>
			</tbody>
		</table>
            </div>
    </div>
  </div>
</div>


<footer class="container-fluid text-center success well">
    ក្រុមហ៊ុន រស្មីពេជ្រកណ្ដៀង
</footer>