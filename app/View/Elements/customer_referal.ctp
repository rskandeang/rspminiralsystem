<div class="col-md-9">
<?php 
	foreach($customers as $customer){
		$fist = $customer['first'];
		$id = $customer['id'];
	}
	
	if($fist == 'T'){ ?>
		<div class="col-md-12">
       
        <!-- second box -->
         <div class="panel box-v1">
              <div  class="panel-heading bg-white border-none">
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-xs-6 text-center padding-0">
                     <!--  <i style="color:#2DB4DB" class="fa fa-3x  fa-university" aria-hidden="true" > </i> -->
                     <br>
                      <h4 style="color:#52BE80" class="text-center">First Level</h4>

                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                    <h4  class="text-center">
						<?php 
							$count = 0;
							foreach($two as $twos){
								$code_two = $twos['Two']['code'].'<br/>';
								$count_two = count($code_two);
								$count += $count_two;
							}
							echo $count.'<br/>';
						?>
					</h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                   <h4  class="text-center">
						<?php echo '$ '.$sum_one;?>
				   </h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
             
                          <!-- Steps Circular Progress - START -->
                          
                      <div id="progress5" class="col-xs-12 col-md-4 col-lg-4" style="width: 100px; height: 100px; top: -17px;position: absolute;margin-left: 30px;">
                      </div>
                           
                          <!-- you need to include the shieldui css and js assets in order for the components to work -->
                          <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

                          <script type="text/javascript">
                          //initialization options for the progress bar
                          var progress = $("#progress5").shieldProgressBar({
                              min: 0,
                              max: 100,
                              value: 5,
                              layout: "circular",
                              layoutOptions: {
                                  circular: {
                                      borderColor: "#52BE80",
                                      width: 10,
                                      borderWidth: 1,
                                      color: "#1E98E4",
                                      backgroundColor: "transparent"
                                  }
                              },
                              text: {
                                  enabled: true,
                                  template: '<span style="position:absolute;left: 36px;font-weight: bold;top: 39px;absolute;font-size:15px; color: #1E98E4">{0}%</span>'
                              },
                          }).swidget();

                          </script>
                          <!-- Steps Circular Progress - END -->
                </div>
                </div>
           
          </div>
        </div>
        

           <!-- second box -->
        <div class="panel box-v1">
              <div  class="panel-heading bg-white border-none">
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-xs-6 text-center padding-0">
                     <!--  <i style="color:#2DB4DB" class="fa fa-3x  fa-university" aria-hidden="true" > </i> -->
                     <br>
                      <h4 style="color:#F7DC6F" class="text-center">Secont Level</h4>

                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                    <h4  class="text-center">
						<?php 
							$count = 0;
							foreach($three as $threes){
								$code_three = $threes['Three']['code'];
								$count_three = count($code_three);
								$count += $count_three;
							}	
							echo $count.'<br/>';
						?>
					</h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                   <h4  class="text-center">
						<?php echo '$ '.$sum_two;?>
				   </h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
             
                          <!-- Steps Circular Progress - START -->
                          
                      <div id="progress3" class="col-xs-12 col-md-4 col-lg-4" style="width: 100px; height: 100px; top: -17px;position: absolute;margin-left: 30px;">
                      </div>
                           
                          <!-- you need to include the shieldui css and js assets in order for the components to work -->
                          <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

                          <script type="text/javascript">
                          //initialization options for the progress bar
                          var progress = $("#progress3").shieldProgressBar({
                              min: 0,
                              max: 100,
                              value: 3,
                              layout: "circular",
                              layoutOptions: {
                                  circular: {
                                      borderColor: "#F7DC6F",
                                      width: 10,
                                      borderWidth: 1,
                                      color: "#1E98E4",
                                      backgroundColor: "transparent"
                                  }
                              },
                              text: {
                                  enabled: true,
                                  template: '<span style="position:absolute;left: 36px;font-weight: bold;top: 39px;absolute;font-size:15px; color: #1E98E4">{0}%</span>'
                              },
                          }).swidget();

                          </script>
                          <!-- Steps Circular Progress - END -->
                </div>
                </div>
           
          </div>
        </div>
              

           <!-- second box -->
        <div class="panel box-v1">
              <div  class="panel-heading bg-white border-none">
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-xs-6 text-center padding-0">
                     <!--  <i style="color:#2DB4DB" class="fa fa-3x  fa-university" aria-hidden="true" > </i> -->
                     <br>
                      <h4 style="color:#5DADE2" class="text-center">Third Level</h4>

                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                    <h4  class="text-center">
						<?php 
							$count = 0;
							foreach($four as $fours){
								$code_four = $fours['Four']['code'];
								$count_four = count($code_four);
								$count += $count_four;
							}
							echo $count.'<br/>';
						?>
					</h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                   <h4  class="text-center">
						<?php echo '$ '.$sum_three;?>
				   </h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
             
                          <!-- Steps Circular Progress - START -->
                          
                      <div id="progress2" class="col-xs-12 col-md-4 col-lg-4" style="width: 100px; height: 100px; top: -17px;position: absolute;margin-left: 30px;">
                      </div>
                           
                          <!-- you need to include the shieldui css and js assets in order for the components to work -->
                          <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

                          <script type="text/javascript">
                          //initialization options for the progress bar
                          var progress = $("#progress2").shieldProgressBar({
                              min: 0,
                              max: 100,
                              value: 2,
                              layout: "circular",
                              layoutOptions: {
                                  circular: {
                                      borderColor: "#5DADE2",
                                      width: 10,
                                      borderWidth: 1,
                                      color: "#fff",
                                      backgroundColor: "transparent"
                                  }
                              },
                              text: {
                                  enabled: true,
                                  template: '<span style="position:absolute;left: 36px;font-weight: bold;top: 39px;absolute;font-size:15px; color: #1E98E4">{0}%</span>'
                              },
                          }).swidget();

                          </script>
                          <!-- Steps Circular Progress - END -->
                </div>
                </div>
           
          </div>
        </div>
      </div>
	  
<?php 	}

	else{ ?>
			<div class="col-md-12">
        <div class="panel box-v1">
              <div  class="panel-heading bg-white border-none">
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-xs-6 text-center padding-0">
                     <!--  <i style="color:#2DB4DB" class="fa fa-3x  fa-university" aria-hidden="true" > </i> -->
                     <br>
                      <h4  style="color:#FF5733;"class="text-center">Sponsor</h4>

                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
					
                    <h4  class="text-center">
						<?php 
							echo $customers['Costomer']['code']?>
					</h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                   <h4  class="text-center">125 $</h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
             
                          <!-- Steps Circular Progress - START -->
                          
                      <div id="progress" class="col-xs-12 col-md-4 col-lg-4" style="width: 100px; height: 100px; top: -17px;position: absolute;margin-left: 30px;">
                      </div>
                           
                          <!-- you need to include the shieldui css and js assets in order for the components to work -->
                          <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

                          <script type="text/javascript">
                          //initialization options for the progress bar
                          var progress = $("#progress").shieldProgressBar({
                              min: 0,
                              max: 100,
                              value: 10,
                              layout: "circular",
                              layoutOptions: {
                                  circular: {
                                      borderColor: "#FF5733",
                                      width: 10,
                                      borderWidth: 1,
                                      color: "#1E98E4",
                                      backgroundColor: "transparent"
                                  }
                              },
                              text: {
                                  enabled: true,
                                  template: '<span style="position:absolute;left: 36px;font-weight: bold;top: 39px;absolute;font-size:15px; color: #1E98E4">{0}%</span>'
                              },
                          }).swidget();

                          </script>
                          <!-- Steps Circular Progress - END -->
                </div>
                </div>
           
          </div>
        </div>

        <!-- second box -->
         <div class="panel box-v1">
              <div  class="panel-heading bg-white border-none">
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-xs-6 text-center padding-0">
                     <!--  <i style="color:#2DB4DB" class="fa fa-3x  fa-university" aria-hidden="true" > </i> -->
                     <br>
                      <h4 style="color:#52BE80" class="text-center">First Level</h4>

                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                    <h4  class="text-center">
						<?php 
							$count = 0;
							foreach($two as $twos){
								$code_two = $twos['Two']['code'].'<br/>';
								$count_two = count($code_two);
								$count += $count_two;
							}
							echo $count.'<br/>';
						?>
					</h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                   <h4  class="text-center">
						<?php echo '$ '.$sum_one;?>
				   </h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
             
                          <!-- Steps Circular Progress - START -->
                          
                      <div id="progress5" class="col-xs-12 col-md-4 col-lg-4" style="width: 100px; height: 100px; top: -17px;position: absolute;margin-left: 30px;">
                      </div>
                           
                          <!-- you need to include the shieldui css and js assets in order for the components to work -->
                          <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

                          <script type="text/javascript">
                          //initialization options for the progress bar
                          var progress = $("#progress5").shieldProgressBar({
                              min: 0,
                              max: 100,
                              value: 5,
                              layout: "circular",
                              layoutOptions: {
                                  circular: {
                                      borderColor: "#52BE80",
                                      width: 10,
                                      borderWidth: 1,
                                      color: "#1E98E4",
                                      backgroundColor: "transparent"
                                  }
                              },
                              text: {
                                  enabled: true,
                                  template: '<span style="position:absolute;left: 36px;font-weight: bold;top: 39px;absolute;font-size:15px; color: #1E98E4">{0}%</span>'
                              },
                          }).swidget();

                          </script>
                          <!-- Steps Circular Progress - END -->
                </div>
                </div>
           
          </div>
        </div>
        

           <!-- second box -->
        <div class="panel box-v1">
              <div  class="panel-heading bg-white border-none">
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-xs-6 text-center padding-0">
                     <!--  <i style="color:#2DB4DB" class="fa fa-3x  fa-university" aria-hidden="true" > </i> -->
                     <br>
                      <h4 style="color:#F7DC6F" class="text-center">Secont Level</h4>

                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                    <h4  class="text-center">
						<?php 
							$count = 0;
							foreach($three as $threes){
								$code_three = $threes['Three']['code'];
								$count_three = count($code_three);
								$count += $count_three;
							}	
							echo $count.'<br/>';
						?>
					</h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                   <h4  class="text-center">
						<?php echo '$ '.$sum_two;?>
				   </h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
             
                          <!-- Steps Circular Progress - START -->
                          
                      <div id="progress3" class="col-xs-12 col-md-4 col-lg-4" style="width: 100px; height: 100px; top: -17px;position: absolute;margin-left: 30px;">
                      </div>
                           
                          <!-- you need to include the shieldui css and js assets in order for the components to work -->
                          <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

                          <script type="text/javascript">
                          //initialization options for the progress bar
                          var progress = $("#progress3").shieldProgressBar({
                              min: 0,
                              max: 100,
                              value: 3,
                              layout: "circular",
                              layoutOptions: {
                                  circular: {
                                      borderColor: "#F7DC6F",
                                      width: 10,
                                      borderWidth: 1,
                                      color: "#1E98E4",
                                      backgroundColor: "transparent"
                                  }
                              },
                              text: {
                                  enabled: true,
                                  template: '<span style="position:absolute;left: 36px;font-weight: bold;top: 39px;absolute;font-size:15px; color: #1E98E4">{0}%</span>'
                              },
                          }).swidget();

                          </script>
                          <!-- Steps Circular Progress - END -->
                </div>
                </div>
           
          </div>
        </div>
              

           <!-- second box -->
        <div class="panel box-v1">
              <div  class="panel-heading bg-white border-none">
                <div class="row">

                  <div class="col-md-3 col-sm-6 col-xs-6 text-center padding-0">
                     <!--  <i style="color:#2DB4DB" class="fa fa-3x  fa-university" aria-hidden="true" > </i> -->
                     <br>
                      <h4 style="color:#5DADE2" class="text-center">Third Level</h4>

                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                    <h4  class="text-center">
						<?php 
							$count = 0;
							foreach($four as $fours){
								$code_four = $fours['Four']['code'];
								$count_four = count($code_four);
								$count += $count_four;
							}
							echo $count.'<br/>';
						?>
					</h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                   <h4  class="text-center">
						<?php echo '$ '.$sum_three;?>
				   </h4>
                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
             
                          <!-- Steps Circular Progress - START -->
                          
                      <div id="progress2" class="col-xs-12 col-md-4 col-lg-4" style="width: 100px; height: 100px; top: -17px;position: absolute;margin-left: 30px;">
                      </div>
                           
                          <!-- you need to include the shieldui css and js assets in order for the components to work -->
                          <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

                          <script type="text/javascript">
                          //initialization options for the progress bar
                          var progress = $("#progress2").shieldProgressBar({
                              min: 0,
                              max: 100,
                              value: 2,
                              layout: "circular",
                              layoutOptions: {
                                  circular: {
                                      borderColor: "#5DADE2",
                                      width: 10,
                                      borderWidth: 1,
                                      color: "#fff",
                                      backgroundColor: "transparent"
                                  }
                              },
                              text: {
                                  enabled: true,
                                  template: '<span style="position:absolute;left: 36px;font-weight: bold;top: 39px;absolute;font-size:15px; color: #1E98E4">{0}%</span>'
                              },
                          }).swidget();

                          </script>
                          <!-- Steps Circular Progress - END -->
                </div>
                </div>
           
          </div>
        </div>
      </div>
	  
<?php	} ?>

    
</div>



