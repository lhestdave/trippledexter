@extends('app')

@section('content')

				<div class="modal fade" id="createSOA" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header bg-primary">
                          <button type="button" class="close bg-primary" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title bg-primary">Create Statement of Accounts</h4>
                        </div>
                        <div class="modal-body">
						<div class="container col-lg-12">
						<form > 
							    
								<div class="form-group">
								    <h3>Date Options</h3>
									
									<p><input data-toggle="modal" data-target="#createSOA1" type="radio">Statement of Accounts By Date   </input></p>
									<p><input type="radio">Statement of Accounts By Period From-To   </input></p>
									<p><input type="radio">All open transactions as of Period   </input></p>
									<input class="form-control col-lg-11" type="text"/>
								
								</div>
								
								<br>
								<div class="form-group">
									<h3>Customer</h3>						
									<p><input type="radio">All Customer   </input></p>
									<p><input type="radio">Multiple Customers   </input></p>									
									<p><input type="radio">One Customer   </input></p>
									<input class="form-control col-lg-11" type="text"/>
									
								</div>
								<div class="form-group">
									<h3>Additional Options</h3>						
									<p><input type="checkbox">Show Invoice item details on statements   </input></p>
									<p><input type="checkbox">Print statements by billing address zipcode   </input></p>									
									<p><input type="checkbox">Print due date on transaction   </input></p>
									<h4>Do not create statements</h4>
									<p><input type="checkbox">with a zero balance   </input></p>
									<p><input type="checkbox">with a balance less than    </input></p>
									<p><input type="checkbox">with no account activity   </input></p>
								</div>
								</form>
                        
                      </div>
                      <div class="modal-footer">
						  <button type="button" class="btn btn-default">Assess Finance Charges & Select Yes</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
						</div>
					</div>
					</div>
					</div>              
					 <div class="modal fade" id="createSOA1" role="dialog">
								<div class="modal-dialog">
				
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header bg-primary">
									  <button type="button" class="close bg-primary" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title bg-primary">Statement of Accounts By Date</h4>
									</div>
									<div class="modal-body">
										<div class="container">
										
										<script>
										
										function prevMonth(){
											$.ajax({
												type:'GET',
												url:'/getprevdt',
												data:'_token = <?php echo csrf_token() ?>',
												success:function(data){
													
													
												$("#presentMonth").html(data.msg);
												
												   switch(data.begin){
													   
													case "Mon":
														var v=1;
														while(v<2){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
													break;
													
													case "Tue":
														var v=1;
														while(v<3){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
													break;
													
													case "Wed":
														var v=1;
														while(v<4){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
													break;
													
													case "Thu":
														var v=1;
														while(v<5){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														
														}
													
													break;
													
													case "Fri":
														var v=1;
														while(v<6){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
														
													
													
													break;
													
													case "Sat":
														var v=1;
														while(v<7){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
													
													break;
													
													case "Sun":
														var v=1;
														while(v<1){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
													break;
													   
													   
												   }
												
												 
												}
												
												
											});
											
										}
										//'_token = <?php echo csrf_token() ?>' ,
										function nextMonth(){
											$.ajax({
												type:'GET',
												url:'/getnextdt',
												data:'_token = <?php echo csrf_token() ?>' ,
												success:function(data){
													
													
												$("#presentMonth").html(data.msg);
												
												   switch(data.begin){
													   
													case "Mon":
														var v=1;
														while(v<2){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
													break;
													
													case "Tue":
														var v=1;
														while(v<3){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
													break;
													
													case "Wed":
														var v=1;
														while(v<4){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
													break;
													
													case "Thu":
														var v=1;
														while(v<5){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														
														}
													
													break;
													
													case "Fri":
														var v=1;
														while(v<6){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
														
													
													
													break;
													
													case "Sat":
														var v=1;
														while(v<7){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
													
													break;
													
													case "Sun":
														var v=1;
														while(v<1){
														$("#td"+v).html("");
														v++;
														}
														
														
														var day=1;
														while(day<=data.dateend){
														$("#td"+v).html(day);
														day++;
														v++;
														}
														
														while(v<=42){
														$("#td"+v).html("");
														v++;
														}
													break;
													   
													   
												   }
												
												 
												}
												
												
											});
											
										}
										
										
										
										</script>
										
										
											 <div class=" col-md-4 col-sm-12 well pull-right-lg" style="border:0px solid">
												<p class="well" style="padding:10px; margin-bottom:2px;">
												  <span class="glyphicon glyphicon-calendar"></span>  Calendar
												</p>
												<div class="col-md-12" style="padding:0px;">
												  <br>
													<table class="table table-bordered table-style table-responsive">
													  <tr>
														<th colspan="2"><a onClick="prevMonth()"><span class="glyphicon glyphicon-chevron-left"></span></a></th>
														<th colspan="3" id="presentMonth"> Jan - 2017<!--?php echo $html_title; ?--></th>
														<th colspan="2"><a onClick="nextMonth()"><span class="glyphicon glyphicon-chevron-right"></span></a></th>
													  </tr>
													  <tr>
														<th>Sun</th>
														<th>Mon</th>
														<th>Tue</th>
														<th>Wed</th>
														<th>Thu</th>
														<th>Fri</th>
														<th>Sat</th>
													  </tr>
													  <tr>
														<td id="td1" class="bg-default"></td>
														<td id="td2"></td>
														<td id="td3"></td>
														<td id="td4"></td>
														<td id="td5"></td>
														<td id="td6"></td>
														<td id="td7"></td>
													  </tr>
													  <tr>
														<td id="td8"></td>
														<td id="td9"></td>
														<td id="td10"></td>
														<td id="td11"></td>
														<td id="td12" class="today"></td>
														<td id="td13"></td>
														<td id="td14"></td>
													  </tr>
													  <tr>
														<td id="td15"></td>
														<td id="td16"></td>
														<td id="td17"></td>
														<td id="td18"></td>
														<td id="td19"></td>
														<td id="td20"></td>
														<td id="td21"></td>
													  </tr>
													   <tr>
														<td id="td22"></td>
														<td id="td23"></td>
														<td id="td24"></td>
														<td id="td25"></td>
														<td id="td26"></td>
														<td id="td27"></td>
														<td id="td28"></td>
													  </tr>
														<tr>
														<td id="td29"></td>
														<td id="td30"></td>
														<td id="td31"></td>
														<td id="td32"></td>
														<td id="td33"></td>
														<td id="td34"></td>
														<td id="td35"></td>
													  </tr>
													  <tr>
														<td id="td36"></td>
														<td id="td37"></td>
														<td id="td38"></td>
														<td id="td39"></td>
														<td id="td40"></td>
														<td id="td41"></td>
														<td id="td42"></td>
													  </tr>
													  
													  <!--?php
														foreach ($weeks as $week) {
														  echo $week;
														};
													  ?-->
													</table>
												<br>
												
												</div>
												
												  
											  </div>
										
										</div>
									</div>
									</div>
																			  
								</div>
							</div>					
						
				


@stop
