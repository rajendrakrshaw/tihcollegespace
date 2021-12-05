
    <!-- SIGNUP MODAL -->
    <div class="modal fade" id="SignUpnModal" tabindex="-1" aria-labelledby="SignupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="SignupModalLabel">TIH SIGNUP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- SIGN-UP FORM -->
                    <form  method="post">
                        <div class="container-fluid d-flex justify-content-center align-items-center h-100">
                            <div class="card-2 p-3 text-center py-4">
                                <h4>Create account</h4>
                                <div> <span>Already have an account?</span> 
                                    <a href="#LoginModal" class="text-decoration-none" data-bs-toggle="modal"
                                    data-bs-target="#LoginModal">Signin</a> 
                                </div>
                                <div class="mt-3 px-3"> <input type="email" name="email" class="form-control" placeholder="E-mail"> </div>
                                <div class="mt-3 px-3"> <select  class="form-control" name="role" id="" >
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>
                                </select>
                                    
                                </div id="#reg">
                                <button class=" btn btn-sm btn-success d-grid gap-2 col-4 mx-auto" type="submit" name="submit">Sign
                                    Up</button>
                                    <div class="mt-2 form-check d-flex flex-row"> <input class="form-check-input"
                                            type="checkbox" value="" id="services"> <label class="form-check-label ms-2"
                                            for="services"> I have read and agree to the terms. </label> </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
              
            </div>
        </div>
    </div>
