<style>
/* The Modal (background) */
.refer {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.refer-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 20%;
}

/* The Close Button */
.my_span, .my_span1, .my_span2 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.my_span, .my_span1, .my_span2:hover,
.my_span, .my_span1, .my_span2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
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
                      <h4  class="text-center">First Level</h4>

                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                    <h4  class="text-center" id="myBtn">
						<?php 
							$count = 0;
							foreach($two as $twos){
								//pr($twos);
								$code_two = $twos['Two']['code'].'<br/>';
								$count_two = count($code_two);
								$count += $count_two;
							}
							echo $count.'<br/>';
						?>
					</h4>
					<!-- The Modal -->
					<div id="refer_modal" class="refer">
						<!-- Modal content -->
						
						<div class="refer-content"> 
							<span class="my_span">×</span>
							<?php 
								foreach($two as $twos){
									echo $twos['Two']['code'].'<br />';
								}
							?>
						</div>
					</div>
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
                      <h4 class="text-center">Secont Level</h4>

                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                    <h4  class="text-center" id="myBtn1">
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
					<!-- The Modal -->
					<div id="refer_modal1" class="refer">
						<!-- Modal content -->
						
						<div class="refer-content"> 
							<span class="my_span1">x</span>
							<?php
								foreach($three as $threes){
									echo $threes['Three']['code'].'<br />';
								}
							?>
						</div>
					</div>
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
                      <h4 class="text-center">Third Level</h4>

                 </div>

                 <div style="border-left:1px solid #ddd;" class="col-md-3 col-sm-6 col-xs-6 text-center padding-0"> <br>
                    <h4  class="text-center" id="myBtn2">
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
					<!-- The Modal -->
					<div id="refer_modal2" class="refer">
						<!-- Modal content -->
						
						<div class="refer-content"> 
							<span class="my_span2">x</span>
							<?php
								foreach($four as $fours){
									echo $fours['Four']['code'].'<br />';
								}
							?>
						</div>
					</div>
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
				 
        					<!-- Trigger/Open The Modal -->
                    <h4  class="text-center" id="myBtn">
        						<?php 
        							$count = 0;
        							foreach($two as $twos){
        							//pr($twos);
        								$code_two = $twos['Two']['code'].'<br/>';
        								$count_two = count($code_two);
        								$count += $count_two;
        							}
        							echo $count.'<br/>';
        							
        						?>
        						
        					</h4>
        					
        					<!-- The Modal -->
        					<div id="refer_modal" class="refer">
        						<!-- Modal content -->
        						
        						<div class="refer-content"> 
        							<span class="my_span">×</span>
        							<?php
        								foreach($two as $twos){
        									echo $twos['Two']['code'].'<br />';
        								}
        							?>
        						</div>
        					</div>
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
                    <h4  class="text-center" id="myBtn1">
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
					<!-- The Modal -->
					<div id="refer_modal1" class="refer">
						<!-- Modal content -->
						
						<div class="refer-content"> 
							<span class="my_span1">x</span>
							<?php
								foreach($three as $threes){
									echo $threes['Three']['code'].'<br />';
								}
							?>
						</div>
					</div>
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
                    <h4  class="text-center" id="myBtn2">
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
					<!-- The Modal -->
					<div id="refer_modal2" class="refer">
						<!-- Modal content -->
						
						<div class="refer-content"> 
							<span class="my_span2">x</span>
							<?php
								foreach($four as $fours){
									echo $fours['Four']['code'].'<br />';
								}
							?>
						</div>
					</div>
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

<script>
// Get the refer
var refer = document.getElementById('refer_modal');
var refer1 = document.getElementById('refer_modal1');
var refer2 = document.getElementById('refer_modal2');

// Get the button that opens the refer
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the refer
var span = document.getElementsByClassName("my_span")[0];
var span1 = document.getElementsByClassName("my_span1")[0];
var span2 = document.getElementsByClassName("my_span2")[0];

// When the user clicks the button, open the refer
btn.onclick = function() {
    refer.style.display = "block";
}
btn1.onclick = function() {
    refer1.style.display = "block";
}
btn2.onclick = function() {
    refer2.style.display = "block";
}

// When the user clicks on <span> (x), close the refer
span.onclick = function() {
    refer.style.display = "none";
}
span1.onclick = function() {
    refer1.style.display = "none";
}
span2.onclick = function() {
    refer2.style.display = "none";
}

// When the user clicks anywhere outside of the refer, close it
window.onclick = function(event) {
    if (event.target == refer) {
        refer.style.display = "none";
    }
	else if(event.target == refer1){
        refer1.style.display = "none";
    }
	else if(event.target == refer2){
        refer2.style.display = "none";
    }
}
</script>