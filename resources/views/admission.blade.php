<x-layout>
<div class="modal-body container bg-success p-3 ">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active " id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">New Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="signup-tab" data-bs-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Old Student</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <!-- for new student -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname">
                        </div>
                        <div class="col-md-4">
                            <label for="lname" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="mname">
                        </div>
                        <div class="col-md-4">
                            <label for="text" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname">
                        </div>

                        <div class="col-md-4 ">
                        <label for="text" class="form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            
                        </select>
                        </div>
                        <div class="col-md-4">
                            <label for="bday" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control">
                        </div>
                        

                        <div class="col-md-4">
                        <label for="text" class="form-label">Admission to Class</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Year</option>
                            <option value="1">1st year</option>
                            <option value="2">2nd Year</option>
                            <option value="2">3rd Year</option>
                            <option value="2">4th Year</option>
                            
                        </select>
                        </div>


                        <div class="col-md-4">
                        <label for="text" class="form-label">Choose Relationship</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Relationship</option>
                            <option value="1">parent</option>
                            <option value="2">guardian</option>
                            <option value="2">sibling</option>
                            
                            
                        </select>
                        </div>
                        <div class="col-md-4">
                            <label for="guardian" class="form-label">Guardian's First Name</label>
                            <input type="text" class="form-control" id="guardian">
                        </div>
                        

                        <div class="col-md-4">
                            <label for="guardian" class="form-label">Guardian's Last Name</label>
                            <input type="text" class="form-control" id="guardian">
                        </div>

                        <div class="col-md-4">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                        </div>
                        <div class="col-md-4">
                            <label for="guardian" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="number">
                        </div>
                        

                        
                        <div class="col-md-4">
                            <label for="guardian" class="form-label">Education Qualification</label>
                            <input type="text" class="form-control" id="education">
                        </div>

                        

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Message</label>
                            <textarea name="" class="form-control" id="" rows="4" cols="50"></textarea>
                        </div>

                        

                    </form>
    <a href="" class="btn btn-primary mt-3">Sign Up </a>
    </div>
                   
                        <!-- for old student -->
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname">
                        </div>
                        <div class="col-md-4">
                            <label for="lname" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="mname">
                        </div>
                        <div class="col-md-4">
                            <label for="text" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname">
                        </div>

                        <div class="col-md-4 ">
                        <label for="text" class="form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            
                        </select>
                        </div>
                        <div class="col-md-4">
                            <label for="bday" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control">
                        </div>
                        

                        <div class="col-md-4">
                        <label for="text" class="form-label">Admission to Class</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Year</option>
                            <option value="1">1st year</option>
                            <option value="2">2nd Year</option>
                            <option value="2">3rd Year</option>
                            <option value="2">4th Year</option>
                            
                        </select>
                        </div>


                        <div class="col-md-4">
                        <label for="text" class="form-label">Choose Relationship</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Relationship</option>
                            <option value="1">parent</option>
                            <option value="2">guardian</option>
                            <option value="2">sibling</option>
                            
                            
                        </select>
                        </div>
                        <div class="col-md-4">
                            <label for="guardian" class="form-label">Guardian's First Name</label>
                            <input type="text" class="form-control" id="guardian">
                        </div>
                        

                        <div class="col-md-4">
                            <label for="guardian" class="form-label">Guardian's Last Name</label>
                            <input type="text" class="form-control" id="guardian">
                        </div>

                        <div class="col-md-4">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                        </div>
                        <div class="col-md-4">
                            <label for="guardian" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="number">
                        </div>
                        

                        
                        <div class="col-md-4">
                            <label for="guardian" class="form-label">Education Qualification</label>
                            <input type="text" class="form-control" id="education">
                        </div>

                        

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Message</label>
                            <textarea name="" class="form-control" id="" rows="4" cols="50"></textarea>
                        </div>

                        

                    </form>
                    </div>
                
            </div>

            </div>

</x-layout>