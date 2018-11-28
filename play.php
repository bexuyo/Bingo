<!DOCTYPE html>
<html>
<head>
</head>

<style type="text/css">
  .icon {
  position: absolute;
  /* Adjust these values accordingly */
  top: 0px;
  right: 50px;
}
</style>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
 crossorigin="anonymous">

  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
 integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
 crossorigin="anonymous"></script>

 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>


 <link rel="stylesheet" href="abc.css">
<body background="Image/bd.gif" style="background-repeat: no-repeat;
    background-size: 1600px 1250px;" class="modal-open">

    <audio autoplay loop  id="player">
        <source src="bgm1.mp3"  type="audio/mp3">
        	<source src="bgm.ogg" type="audio/ogg">
    </audio>


	<div class="text-center" style="padding:50px 0">
	<div class="logo">BBFSH.IO</div>
     <div class="icon">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
       <i class="fas fa-cogs" style="font-size:60px; color:white; text-shadow:2px 2px 4px #000000;" ></i>
     </button>
     </div>

	<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Settings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                            <div class="alert alert-danger" role="alert">
                                    Incorrect old Password!!
                            </div>
                          Old Password:
                          <input type="Password" name="old_password" class="rounded"><br>
                          New Password:
                          <input type="Password" name="new_password" class="rounded">


      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
       
      <i class="fas fa-play" style="font-size:300px; color:black; text-shadow:2px 2px 4px #000000; ">
      <i class="fas fa-play" style="font-size:250px; color:white; text-shadow:2px 2px 4px #000000; "></i>



</body>
</html>