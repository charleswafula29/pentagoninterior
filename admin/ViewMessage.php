<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
include('connection.php');
if (isset($_GET['id'])){
$id = $_GET['id'];
}
$sql3="SELECT * FROM `messages` WHERE `id`='$id'";
$data=mysqli_query($conn,$sql3);
while($fetch=mysqli_fetch_assoc($data)){
    $name=$fetch['Names'];
    $service=$fetch['service'];
    $Email=$fetch['Email'];
    $Message=$fetch['Message'];
}
?>
    <center>
        <h2>User message</h2>
        <hr>
        <br>
        <form method="post" action="#">
            <label>Names</label><input type="text" name="Names" value="<?php echo $name;?>" readonly><br><br>
            <label>Emailaddress</label><input type="text" name="Email" value="<?php echo $Email;?>" readonly><br><br>
            <label>Requested Service </label><input type="text" name="Service" value="<?php echo $service;?>" readonly><br><br>
            <label>Message</label><textarea name="Message" readonly><?php echo $Message;?></textarea><br><br>
        </form>
        <hr>
        <h2>Response</h2>
        <hr>
        <input type="button" value="accept" name="accepted" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
        <input type="button" value="reject" name="rejected" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">
        <!--        Modal Accept-->
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Accept
                            <?php echo $name;?>'s request</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose Designer for this Job </label>
                                <select class="forms6" name="Designers">
                                    <?php
                                    $designers="SELECT * FROM `designers`";
                                    $run=mysqli_query($conn,$designers);
                                    while($fetch_designers=mysqli_fetch_assoc($run)){
                                        $DesignerEmail=$fetch_designers['Email'];
                                        $DesignerName=$fetch_designers['Names'];
                                    echo "<option value='$DesignerEmail'>$DesignerEmail</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Enter message for the designer</label>
                                <textarea class="form-control" id="exampleInputReason" name="DesignerMessage" required></textarea>
                            </div>
                            <button class="btn colors btn-block" name="Foward">Foward Project</button>
                            <?php
                                        if(isset($_POST['Foward'])){
                                            $designing=$_POST['Designers'];
                                            $MessageDesign=$_POST['DesignerMessage'];
                                            
                                            $sql1="DELETE FROM `messages` WHERE `id`='$id'";
                                            mysqli_query($conn,$sql1);
                                            
                                            require_once('PHPMailer-master/PHPMailerAutoload.php');
                                            $mailer1= new PHPMailer();
                                            $mailer1->isSMTP();
                                            $mailer1->SMTPAuth=true;
                                            $mailer1->SMTPSecure='ssl';
                                            $mailer1->Host='smtp.gmail.com';
                                            $mailer1->Port='465';
                                            $mailer1->isHTML();
                                            $mailer1->Username='csprojecttest2017@gmail.com';
                                            $mailer1->Password='Shitanda1997';
                                            $mailer1->SetFrom('no-reply@howcode.org');
                                            $mailer1->Subject='PENTAGON INTERIOR NEW PROJECT';
                                            $mailer1->Body=$MessageDesign;
                                            $mailer1->AddAddress($designing);
                                            $mailer1->Send(); 
                                           
                                            $mailer= new PHPMailer();
                                            $mailer->isSMTP();
                                            $mailer->SMTPAuth=true;
                                            $mailer->SMTPSecure='ssl';
                                            $mailer->Host='smtp.gmail.com';
                                            $mailer->Port='465';
                                            $mailer->isHTML();
                                            $mailer->Username='csprojecttest2017@gmail.com';
                                            $mailer->Password='Shitanda1997';
                                            $mailer->SetFrom('no-reply@howcode.org');
                                            $mailer->Subject='PENTAGON INTERIOR APPLICATION RESPONSE';
                                            $mailer->Body='Hello '.$name.' , we are happy to inform you that your application has been accepted. Please keep in touch as we will soon communicate with you for more details. For any information or changes please visit us on our website www.pentagoninterior.com. Warm regards';
                                            $mailer->AddAddress($Email);
                                            $mailer->Send(); 
                                            
                                            header('Location:index.php');
                                        }
                                        ?>
                                <style>
                                    .colors {
                                        padding-bottom: 5px;
                                        padding-top: 5px;
                                        background-color: #FAA612;
                                        color: white;
                                    }

                                    .colors:hover {
                                        color: #FAA612;
                                        background-color: black;
                                    }

                                </style>
                                <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal Reject -->
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Reject
                            <?php echo $name;?>'s request</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="form-group">
                                <label for="exampleInputReason">Enter Reason for rejecting this application</label>
                                <textarea class="form-control" id="exampleInputReason" name="Reason" required></textarea>
                            </div>
                            <button class="btn colors btn-block" name="Confirm">Confirm</button>
                            <?php
                                        if(isset($_POST['Confirm'])){
                                            $Reason=$_POST['Reason'];
                                            $sql2="DELETE FROM `messages` WHERE `id`='$id'";
                                            mysqli_query($conn,$sql2);
                                            
require_once('PHPMailer-master/PHPMailerAutoload.php');
$mailer= new PHPMailer();
$mailer->isSMTP();
$mailer->SMTPAuth=true;
$mailer->SMTPSecure='ssl';
$mailer->Host='smtp.gmail.com';
$mailer->Port='465';
$mailer->isHTML();
$mailer->Username='csprojecttest2017@gmail.com';
$mailer->Password='Shitanda1997';
$mailer->SetFrom('no-reply@howcode.org');
$mailer->Subject='PENTAGON INTERIOR APPLICATION RESPONSE';
$mailer->Body='Hello '.$name.' , we are sorry to inform you that your request for the '.$service.' service(s) has been declined on the grounds that: '.$Reason.'. Feel free to contact us on our website www.pentagoninterior.com.';
$mailer->AddAddress($Email);
$mailer->Send(); 

header('Location:index.php');
                                        }
                                        ?>
                                <style>
                                    .colors {
                                        padding-bottom: 5px;
                                        padding-top: 5px;
                                        background-color: #FAA612;
                                        color: white;
                                    }

                                    .colors:hover {
                                        color: #FAA612;
                                        background-color: black;
                                    }

                                </style>
                                <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </center>
