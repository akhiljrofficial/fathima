<?php require_once('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> mypage</title>
    <link rel="stylesheet" href="./font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./font-awesome/js/all.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</head>

<body class="text-light bg-dark bg-gradient">
    <script>
        start_loader();
    </script>
    <main>     
                                <?php 
                                $music = $conn->query('SELECT * FROM `music_list` order by title asc');
                                while($row = $music->fetch_assoc()):
                                ?>
                                <li class="list-group-item list-group-item-action item" data-id="<?= $row['id'] ?>">
                                    
                                      
                                        
                                            <!-- <p title="<?= $row['title'] ?>"><?= $row['title'] ?></p> -->

                                        
                                            
                                            <button class="btn btn-outline-secondary btn-sm rounded-circle play"   data-id="<?= $row['id'] ?>" data-type="pause"  style="width: 1000px; height: 20px;"><i class="fa fa-play"></i><?=$row['title']?></button>
                        
                                       
                                    
                                </li>
                                <?php endwhile; ?>
                
                    
                            
                       <!-- <button class="btn btn-sm btn-light bg-gradient text-dark" id="stop-btn"  style="width: 40px; height: 40px;"><i class="fa fa-stop"></i></button>
                              -->
                            
                     

    </main>
</body>
<?php if(isset($conn) && $conn) @$conn->close(); ?>
</html>