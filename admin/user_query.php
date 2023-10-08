<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    
    require('include/require.php');
    require('include/config.php'); 
    adminLogin();
    if(isset($_GET['seen'])){
        $frm_data=filteration($_GET);
        if($frm_data['seen']=='all'){

        }else{
            $q="UPDATE `user_query` SET `seen`=? WHERE `sr_no`=?";
            $values=[1,$frm_data['seen']];
            if(update($q,$values,'ii')){
                alert('success','marked as read');
            }else{
                alert('error','try again after some time');
            }
        }
    }
    if(isset($_GET['del'])){
        $frm_data=filteration($_GET);
        if($frm_data['del']=='all'){

        }else{
            $q="DELETE FROM `user_query` WHERE `sr_no`=?";
            $values=[$frm_data['del']];
            if(delete($q,$values,'i')){
                alert('success','Data deleted');
            }else{
                alert('error','try again');
            }
        }
    }

    
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - User Queries</title>
    <?php require('include/links.php'); ?>
</head>
<style>
    
    #dashboard-menu {
        position: fixed;
        height: 100%;
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
            <h3 class="mb-4 top-0">User Queries</h3>
            <div class="card border-0 mb-4">
                    <div class="card-body">
                        <div class="table-responsive-md" style="height:450px; overflow-y:scroll">
                        <table class="table  table-hover">
                            <thead class="sticky-top">
                                <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col" width="20%">Subject</th>
                                    <th scope="col" width="30%">Message</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $q="SELECT * FROM `user_query` ORDER BY `sr_no` DESC";
                                    $data=mysqli_query($conn,$q);
                                    $i=1;
                                    while($row=mysqli_fetch_assoc($data)){
                                        $seen='';
                                        if($row['seen']!=1){
                                            $seen="<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a>";
                                        }
                                        $seen .= "<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";

                                        echo<<<query
                                        <tr>
                                            <td>$i</td>
                                            <td>$row[name]</td>
                                            <td>$row[email]</td>
                                            <td>$row[subject]</td>
                                            <td>$row[message]</td>
                                            <td>$row[date]</td>
                                            <td>$seen</td>
                                        </tr>
                                        query;
                                        $i++;
                                    }
                                ?>
                                <!-- <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr> -->
                            </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('include/script.php');?>
</body>
</html>
