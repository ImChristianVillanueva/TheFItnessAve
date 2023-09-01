<?php 
include '../config/config.php';

    class data extends Connection{

        public function managdata(){

             $sender_id = $_POST['sender_id'];
             $receiver_id = $_POST['receiver_id'];

            $sql = " SELECT * FROM chat_code WHERE sender_id = '".$sender_id."' AND receiver_id = '".$receiver_id."' OR sender_id = '".$receiver_id."' AND receiver_id = '".$sender_id."'";
            $stmt = $this->conn()->query($sql);
            $stmt->execute([]);
            $row = $stmt->fetch();

            if ($stmt->rowcount() > 0) {

            $sql = " SELECT * FROM chat WHERE code = '".$row['code']."' ORDER BY time ASC";
            $stmt = $this->conn()->query($sql);
            $stmt->execute([]);

            while ($row = $stmt->fetch()) {  ?>

                
                <?php if ($_POST['sender_id'] == $row['sender_id']) { ?>
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 20%; text-align: center;"><small ><?php echo $row['date'] ?></small></div>
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 20%; text-align: center;"><small><?php echo $row['time'] ?></small></div>
                    <article class="conversation__view__bubbles">
                    <p class=" chat__right__bubble" style="background-color: #007bff; max-width: 40ch; ">
                            <span class="text-white" style="font-size: 15px;"><?php echo $row['message'] ?></span>
                        </p>

                    </article>
                

                <?php }else if ($_POST['receiver_id'] == $row['sender_id']) { ?>
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 20%; text-align: center;"><small ><?php echo $row['date'] ?></small></div>
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 20%; text-align: center;"><small ><?php echo $row['time'] ?></small></div>
                    <article class="conversation__view__bubbles2">
                    <p class="bg-white text-dark chat__right__bubble2" style="background-color: #eeeff8; max-width: 40ch;" >
                        <span class="text-muted" style="font-size: 15px;"><?php echo $row['message'] ?></span>
                    </p>
                    
                </article>
                <?php } ?>
                

  
                

           <?php }  }

        }

    }

    $datadata = new data();
    $datadata->managdata();

?>
