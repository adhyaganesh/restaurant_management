<nav class="navbar navbar-expand-lg bg-body-tertiary px-lg-2 py-lg-2 stickey-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold h-font" href="index.php">Waah taaj</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="rooms.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="facilities.php">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php">About Us</a>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success me-2" type="submit">Search</button>
          <button type="button" class="btn  btn-outline-dark shadow-none me-3 me-lg-2" data-bs-toggle="modal"
            data-bs-target="#loginmodal">
            Login
          </button>
          <button type="button" class="btn  btn-outline-dark shadow-none " data-bs-toggle="modal"
            data-bs-target="#registermodal">
            Register
          </button>
        </form>
      </div>
    </div>
  </nav>


  <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="">
          <div class="modal-header">
            <i class="bi bi-person-circle fs-4 me-3 align-elements-center d-flex"></i>
            <h1 class="modal-title fs-5" id="exampleModalLabel">User Login</h1>
            <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <button type="submit" class="btn btn-outline-dark shadow-none ">LogIn</button>
              <a href="password-reset.php" class="text-decoration-none" >Forget password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


  <div class="modal fade" id="registermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form id="register-form" action="">
          <div class="modal-header">
            <i class="bi bi-person-plus-fill fs-4 me-3 align-elements-center d-flex"></i>
            <h1 class="modal-title fs-5" id="exampleModalLabel">User Register</h1>
            <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge text-bg-info text-wrap">NOTE: Your details must match with the ID(Aadar
              card,passport...etc) that will be required during check-in</span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required name="name">
                </div>
                <!-- <div class="col-md-6 ">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control shadow-none" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
                </div> -->
              </div>
              <div class=" ">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control shadow-none" id="exampleInputEmail1"
                  aria-describedby="emailHelp" name="email" required>
              </div>
              <div class="">
                <label class="form-label">Phone number</label>
                <input type="number" class="form-control shadow-none" id="exampleInputEmail1"
                  aria-describedby="emailHelp" name="number" required>
              </div>
              <div class="">
                <label class="form-label">Picture</label>
                <input type="file" accept=".jpg, .jpeg, .png" class="form-control shadow-none" id="exampleInputEmail1"
                  aria-describedby="emailHelp" name="profile" required>
              </div>
              <div class="">
                <label class="form-label">Date of birth</label>
                <input type="date" class="form-control shadow-none" id="exampleInputEmail1"
                  aria-describedby="emailHelp" name="dob" required>
              </div>

              <div class="">
                <label class="form-label">Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" required></textarea>
              </div>
              <div class="">
                <label class="form-label">Password</label>
                <input type="password" class="form-control shadow-none" id="exampleInputEmail1"
                  aria-describedby="emailHelp" name="password" required>
              </div>
              <div class="">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control shadow-none" id="exampleInputEmail1"
                  aria-describedby="emailHelp" name="cpass">
              </div>
              <div class=" text-center my-1">
                <button type="submit" class="btn btn-dark shadow-none ">Register</button>
              </div>



            </div>


          </div>

        </form>
      </div>
    </div>
  </div>
