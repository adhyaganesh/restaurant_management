<?php
require('include/require.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel dashboard-settings</title>
    <?php require('include/links.php'); ?>
</head>
<style>
    
    #dashboard-menu {
        position: fixed;
        height: 100%;
    }
    .custom-alert{
        position: fixed;
        top:25px;
        right: 25px;
    }

    @media screen and (max-width: 992px) {
        #dashboard-menu {
            height: auto;
            width: 100%;
        }
        #main-content{
            margin-top:60px
        }
    }
</style>

<?php require('include/header.php'); ?>
    <div class="container-fluid " id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h4 class="mb-4">Settings</h4>
                <div class="card" >
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square me-2"></i>Edit
                            </button>
                        </div>
                        
                        <h6 class="card-subtitle mb-1 fw-bold">Site title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form >
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">General Settings</h5>
                              </div>
                              <div class="modal-body">
                                <div class="col-md-6 ">
                                    <label class="form-label">Site Title</label>
                                    <input type="text" class="form-control shadow-none" name="site_title" id="site_title_inp" required>
                                  </div>
                                  <div class="">
                                    <label class="form-label">About Us</label>
                                    <textarea class="form-control shadow-none" name="site_about" id="site_about_inp" rows="4" required></textarea>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" onclick="site_title.value = general_data.site_title , site_about.value = general_data.site_about" class="btn text-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn custom-bg text-white" onclick="upd_general(site_title.value,site_about.value)">Submit</button>
                              </div>
                            </div>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>


    <?php require('include/script.php'); ?>



    <script>
    let general_data;

    function get_general(){
    let site_title = document.getElementById('site_title');
    let site_about=document.getElementById('site_about');
    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp=document.getElementById('site_about_inp');



    let xhr = new XMLHttpRequest();
    xhr.open( "POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload=function(){
        general_data=JSON.parse(this.responseText);
        site_title.innerHTML=general_data.site_title;
        site_about.innerHTML=general_data.site_about;

        site_title_inp.value=general_data.site_title;
        site_about_inp.value=general_data.site_about;
    }
    xhr.send('get_general');
}
    
    function upd_general(site_title_val,site_about_val){
    let xhr = new XMLHttpRequest();
    xhr.open( "POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload=function(){                                      //when response is received
        var myModalE = document.getElementById('general-s');
        var modal = bootstrap.Modal.getInstance(myModalE)
        modal.hide();
        console.log(this.responseText)
        if(this.responseText==1){
            alert('success','changes saved!');
            get_general();
        }else{
            console.log("no changes");
            alert('error' , 'no changes made!');
        }
    }
    xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
    }
    window.onload=function(){
        get_general();
    }


    function alert(type,msg){
        let bs_class=(type=='success')? 'alert-success': 'alert-danger';
        let element = document.createElement('div');
        element.innerHTML=`
        <div id="not" class=" alert ${bs_class} alert-warning alert-dismissible fade show" role="alert">
            <strong class="me-3">${msg}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        `;
        document.body.append(element);
    }

</script>

</body>

</html>