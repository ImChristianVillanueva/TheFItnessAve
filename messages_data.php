<?php 
include 'config/config.php';

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
                        <span class="text-white" ><?php echo $row['message'] ?></span>
                        </p>

                    </article>
                

                <?php }else if ($_POST['receiver_id'] == $row['sender_id']) { ?>
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 20%; text-align: center;"><small ><?php echo $row['date'] ?></small></div>
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 20%; text-align: center;"><small ><?php echo $row['time'] ?></small></div>
                    <article class="conversation__view__bubbles2">
                    <p class="bg-white text-dark chat__right__bubble2" style="background-color: #eeeff8; max-width: 40ch;" >
                    <span class="text-muted"><?php echo $row['message'] ?></span>
                    </p>
                    
                    
                </article>
                <?php } ?>
                

           <?php }  }

        }

    }

    $datadata = new data();
    $datadata->managdata();

?>

<style>

.conversation__view__bubbles::before {
   content: '';
   display: table;
   clear: both;
}
.conversation__view__bubbles {
    margin-bottom: 120px;

}
.conversation__view__bubbles2::before {
   content: '';
   display: table;
   clear: both;
}
.conversation__view__bubbles2 {
    margin-bottom: 50px;
}
.chat__right__bubble {
    float: right;
    position: relative;
    border-bottom-right-radius: 0;
    padding: 8px;
    border-radius: 6px;
    word-break: break-all;
}
.chat__right__bubble:after{
    content: '';
    display: inherit;
}
.chat__right__bubble2 {
    float: left;
    position: relative;
    border-bottom-right-radius: 0;
    padding: 8px;
    border-radius: 6px;
    word-break: break-all;
}
.chat__right__bubble2:after{
    content: '';
    display: block;
}
</style>