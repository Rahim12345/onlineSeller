<?php  
include '../../include/config.php';
$query4Messages=$conn->prepare("SELECT succestionID FROM succestions WHERE read_unread=?");
$query4Messages->execute([0]);
$rows4Messages=$query4Messages->fetchall(PDO::FETCH_ASSOC);
$count4Messages=count($rows4Messages);

$query4Message=$conn->prepare("SELECT * FROM succestions ORDER BY succestionID DESC");
$query4Message->execute();
$rows4Message=$query4Message->fetchall(PDO::FETCH_ASSOC);
$count4Message=count($rows4Message);
?>
            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1 mesaj">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter" id="#notificationCount"><?php echo $count4Messages; ?></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown" style="height: 310px;overflow: auto;scrollbar-color: white #4E73DF;scrollbar-width: thin;">
                <h6 class="dropdown-header">
                  Mesaj mərkəzi
                </h6>
<?php 
$n=1; 
if($count4Message!=0)
{
  foreach($rows4Message as $row4Message)
  {
    if(strlen($row4Message['name'])>23)
    {
      $name=substr($row4Message['name'], 0,23).'...';
    }
    else
    {
      $name=$row4Message['name'];
    }
    if($row4Message['read_unread']==0)
    {
      ?>
                <a class="dropdown-item d-flex align-items-center message" href="#" message-id="<?php echo $row4Message['succestionID'] ?>" data-toggle="modal" data-target="#showMessage">
                  <div class="dropdown-list-image ">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate"><?php echo $row4Message['succestion']; ?></div>
                    <div class="small text-gray-500" style="width:100%;position: absolute;max-width:78%;"><?php echo $name; ?><span style="position: absolute;right:10px;"><i class="fa fa-envelope" aria-hidden="true"></i></span></div>
                  </div>
                </a>
      <?php
    }
    else
    {
      ?>
                <a class="dropdown-item d-flex align-items-center message" href="#" message-id="<?php echo $row4Message['succestionID'] ?>" data-toggle="modal" data-target="#showMessage">
                  <div class="dropdown-list-image ">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate"><?php echo $row4Message['succestion']; ?></div>
                    <div class="small text-gray-500" style="width:100%;position: absolute;max-width:78%;"><?php echo $name; ?><span style="position: absolute;right:10px;"><i class="fa fa-envelope-open" aria-hidden="true"></i></span></div>
                  </div>
                </a>
      <?php
    }
  }
}

?>
              </div>
            </li>