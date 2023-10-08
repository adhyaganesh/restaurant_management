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
    <title>Admin Pannel dashboard</title>
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi hic pariatur, nostrum iure corrupti at excepturi quisquam quae quo natus numquam voluptates soluta dolores, veritatis molestias possimus quidem molestiae a vel eaque omnis doloribus! Nihil animi nostrum quidem iure laudantium eius veritatis aperiam, totam maiores voluptatum, minima voluptatibus sint excepturi quod delectus? Animi vel, provident facere repudiandae tenetur corrupti quae ipsa aspernatur? Quae molestias inventore non harum sint reprehenderit expedita at veritatis architecto nulla rem placeat molestiae alias ut debitis minima unde itaque cumque repudiandae, accusantium quisquam laudantium iste vel. Sequi ab beatae tenetur voluptas possimus! Iure nesciunt a maiores! Quisquam nostrum rerum nam sint tempore vitae, fugit tempora maxime beatae error obcaecati dolorem fugiat, voluptates earum blanditiis totam nulla est excepturi neque et debitis delectus incidunt corporis sapiente. Ad, ratione maiores! Esse, iste pariatur harum quo accusamus quibusdam delectus nam unde, doloremque et labore dolorem molestiae fugiat illo mollitia sunt maxime aspernatur. Fuga nisi ullam magnam temporibus dolor ab ea, eum illo commodi omnis officia, aliquid totam asperiores, incidunt blanditiis earum iusto eos est nesciunt quam. Nesciunt, voluptate. Adipisci, obcaecati. Ducimus, rerum eius? Animi aut facilis sit molestiae asperiores, suscipit neque deserunt amet numquam magnam, laudantium odio enim ullam.
            </div>
        </div>
    </div>


    <?php require('include/script.php'); ?>
<!-- </body> -->
</body>
</html>