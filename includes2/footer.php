<div class="containr-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">my hotel</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dignissimos error ab odio distinctio sint tenetur dicta doloremque, ea voluptate sequi architecto molestiae?
        </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a><br>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-twitter me-1"></i>Twitter</span>
        </a>
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-facebook me-1"></i>Facebook</span>
        </a>
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-instagram me-1"></i>Instagram</span>
        </a>
        <br>
    </div>
  </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and developed by <a href="#" class="text-decoration-none">Adhya</a></h6>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>

      <script>
        let register_form = document.getElementById('register-form');
        register_form.addEventListener('submit',(e)=>{
          e.preventDefault();

          let data = new FormData();

          data.append('name' ,register_form.elements['name'].value);
          data.append('email' ,register_form.elements['email'].value);
          data.append('number' ,register_form.elements['number'].value);
          data.append('dob' ,register_form.elements['dob'].value);
          data.append('address' ,register_form.elements['address'].value);
          data.append('password' ,register_form.elements['password'].value);
          data.append('cpass' ,register_form.elements['cpass'].value);
          data.append('profile' ,register_form.elements['profile'].files[0]);
          data.append('register' , '');

          var myModel = document.getElementById('registerModal');
          var modal = bootstrap.Modal.getInstance(myModal);
          modal.hide();

          let xhr = new XMLHttpRequest();
          xhr.open("POST" , "ajax/login_register.php",true);
          xhr.onload = function(){

          }
          xhr.send(data);
        })
      </script>
