<div class="col-md-12">
        <h5 style="color: green; font-size:18px; ">                                </h5>
       
								<div class="row margin-top-30">
									  <div class="col-lg-8 col-md-12">
										  <div class="panel panel-white">
                          <div class="panel-heading">
                           <h5 class="panel-title">Edit Profile</h5>
                          </div>
												 <div class="panel-body">
                             <form action="admin-panel.php" method="POST">
                        
                                  <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" onkeydown="return alphaOnly(event);" required="" />
                            
                                  <input type="text" class="form-control" name="lname" id="lname" onkeydown="return alphaOnly(event);" placeholder="Last Name" />  
                            
                                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  />
                       
                                  <input type="tel" class="form-control" name="contact" minlength="10" maxlength="10" 
                                  placeholder="Your Phone Number" required="" />
                           
                                    <input type="number" class="form-control" name="age" id="age" min="0" max="100" 
                                  placeholder="Your Age" /> 

                                  <input type="text" class="form-control" name="address" id="address" 
                                  placeholder="Your address"/>                     

                                  <input type="text" class="form-control" name="city" id="city" 
                                  placeholder="City"/> 

                                  <div class="col d-inline-block">
                                      Gender:
                                      <input type="radio" id="male" name="gender" value="Male" checked/>
                                      <label for="male">Male</label>
                                      <input type="radio" id="female" name="gender" value="Female"/>
                                      <label for="female">Female</label>      
                                  </div>
                                  
                                <div class="col-8">
                                 <button type="submit" name="update-profile" class="btn-signup btn-primary btn-block" >Update</button>
                                </div>
                              </form>
                     </div> 
                 </div>     
 </div>                 

