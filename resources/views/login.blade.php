<x-layout>
<div class="bg-success min-vw-100 min-vh-100 d-flex justify-content-center align-items-center">
    <div class="bg-white p-4 rounded">
        <h2 class="text-center">Log In To Your Account</h2>
        <form>
    <div class="form-group ">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="d-flex justify-content-end ">
        <a href="" class="text-decoration-none">Forgot Password?</a>
    </div>
    <div class="form-group ">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-3">Log In</button>
    <div class="d-flex justify-content-center ">
       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Create Account
</button>
    </div>
</form>

    </div>
</div>

</x-layout>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h1 class="text-center">Create an Account</h1>

      <div class="row  ">
        <div class="col d-flex justify-content-center"><a href="" class="btn btn-primary">Log in to Google</a></div>
        <div class="col"><a href="" class="btn btn-secondary">Log in to Facebook</a></div>

      </div>
      <div class="text-center">Or</div>


      <div class="col-md-12">
            <label for="name" class="form-label">Email</label>
            <input type="email" class="form-control" id="fname">
        </div>
        <div class="col-md-12">
            <label for="lname" class="form-label">Password</label>
            <input type="password" class="form-control" id="mname">
        </div>
        
        
      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-success">Create Account</button>
      </div>
    </div>
  </div>
</div>