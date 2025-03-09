<?php
    include "head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
    <link rel="stylesheet" href="style1.css" type="text/css" />
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle">Sign up with PG Life</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form id="signup-form" class="form" role="form" method="post" action="api/signup_submit.php">
            Full Name <br>
            <input type="text" name="name" size="50"/> <br>
            Phone number <br>
           <input type="number" name="phn_no" size="50"/> <br>
            Email <br>
            <input type="text" name="email" size="50"/><br>
            Password <br>
            <input type="password" name="password" size="50"/><br>
            College name <br>
            <input type="text" name="college_name" size="50"/><br>
            I am a 
            <input type="radio" name="gender" value="male"/>Male
            <input type="radio" name="gender" value="female"/>Female
             <br>
            <input type="submit" name="submit" style="width:100%; color:blue;" value="Create a account" />
        </form>
      </div>
      <div class="modal-footer" style="justify-content:center;" >
        Already have an account?<a href="login_modal.php" style="color:blue;">Login</a>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

