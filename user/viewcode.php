 <form action="" method="POST">
                            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php
								$sql="select a.login_id,b.login_id from tbl_login a, tbl_studentbooking b where a.login_id=b.login_id and a.username='$temp'";
                              
                               $query1 = mysqli_query($con,$sql);
							   if(mysqli_num_rows($query1)>0)
							   {
								   $result=mysqli_fetch_array($query1);
								   $h=$result['login_id'];
								   echo "$h";
								   $query="select * from tbl_dancebooking where login_id='$h'";
								   $results = mysqli_query($con,$query);
                             	echo "<h2><center>Student Details</center></h2>";
                               echo "<tr><th>Sl No</th><th>date of Admission</th><th>Phone Numer</th><th>Dance Type </th><th>Experience</th><th></th></tr>";
                               while($v=mysqli_fetch_array($results))
                               {
								   if($v['status']==1)
								   {
									   $f='Approved';
								   }
								   else
								   {
									   $f='Not Approved';
								   
								   }
                               echo "<tr>";
                               echo "<td>".$v['studbk_id']."</td><td>"
															         
                               		   .$v['date_of_adm']."</td><td>"
                                      .$v['emer_num']."</td><td>"
                                   .$v['dname']."</td><td>"
									.$v['year_of_exp']."</td><td>"
									.$f."</td>";
									 echo "</tr>";
							   }}
							   
                        else
						{	
                         ?>						
                             	<script>alert("no booking found");
								location.href="booking.php";
								exit;
                            
                               </script>
						<?php
						}
						?>
