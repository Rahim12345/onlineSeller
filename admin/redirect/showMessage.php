<?php  
if(isset($_POST["messageID"]))
{
	include '../../include/config.php';
	$messageID 	=	htmlspecialchars(trim($_POST["messageID"]));
	if(!empty($messageID) && is_numeric($messageID) && ceil($messageID)-$messageID==0 && $messageID>0)
	{
		$modal='';
		$array=[];

		$query4Message=$conn->prepare("SELECT * FROM succestions WHERE succestionID=?");
		$query4Message->execute([$messageID]);
		$rows4Message=$query4Message->fetchall(PDO::FETCH_ASSOC);
		$count4Message=count($rows4Message);
		if($count4Message!=0)
		{
			$modal.='
			<table class="table">
				<tr>
					<td>Kimdən</td>
					<td>'.$rows4Message[0]["name"].'</td>
				</tr>
				<tr>
					<td>Əlaqə</td>
					<td>'.$rows4Message[0]["contact"].'</td>
				</tr>
				<tr>
					<td>Təklif</td>
					<td>'.$rows4Message[0]["succestion"].'</td>
				</tr>
				<tr>
					<td>Vaxt</td>
					<td>'.$rows4Message[0]["realTime"].'</td>
				</tr>
			</table>
			';
		$query4Message=$conn->prepare("UPDATE `succestions` SET `read_unread`=? WHERE `succestionID`=?");
		$query4Message->execute([1,$messageID]);

		$query4Messages=$conn->prepare("SELECT succestionID FROM succestions WHERE read_unread=?");
		$query4Messages->execute([0]);
		$rows4Messages=$query4Messages->fetchall(PDO::FETCH_ASSOC);
		$count4Messages=count($rows4Messages);

		$query4Message=$conn->prepare("SELECT * FROM succestions ORDER BY succestionID DESC");
		$query4Message->execute();
		$rows4Message=$query4Message->fetchall(PDO::FETCH_ASSOC);
		$count4Message=count($rows4Message);
		
		$notification='';
		$notification.='
		<!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1 mesaj">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter" id="#notificationCount">'.$count4Messages.'</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown" style="height: 310px;overflow: auto;scrollbar-color: white #4E73DF;scrollbar-width: thin;">
                <h6 class="dropdown-header">
                  Mesaj mərkəzi
                </h6>
		';

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
		    			$notification.='
						<a class="dropdown-item d-flex align-items-center message" href="#" message-id="'.$row4Message['succestionID'].'" data-toggle="modal" data-target="#showMessage">
		                  <div class="dropdown-list-image ">
		                    <i class="fa fa-user" aria-hidden="true"></i>
		                  </div>
		                  <div class="font-weight-bold">
		                    <div class="text-truncate">'.$row4Message['succestion'].'</div>
		                    <div class="small text-gray-500" style="width:100%;position: absolute;max-width:78%;">'.$name.'<span style="position: absolute;right:0;"><i class="fa fa-envelope" aria-hidden="true"></i></span></div>
		                  </div>
		                </a>
		    			';
				    }
				    else
				    {
				    	$notification.='
						<a class="dropdown-item d-flex align-items-center message" href="#" message-id="'.$row4Message['succestionID'].'" data-toggle="modal" data-target="#showMessage">
		                  <div class="dropdown-list-image ">
		                    <i class="fa fa-user" aria-hidden="true"></i>
		                  </div>
		                  <div class="font-weight-bold">
		                    <div class="text-truncate">'.$row4Message['succestion'].'</div>
		                    <div class="small text-gray-500" style="width:100%;position: absolute;max-width:78%;">'.$name.'<span style="position: absolute;right:0;"><i class="fa fa-envelope-open" aria-hidden="true"></i></span></div>
		                  </div>
		                </a>
				    	';
				    }
				}

				$array=['modal' => $modal,'notification' => $notification];
				echo json_encode($array);
			}
		}
		else
		{
			header("location:./");
		}
	}
}
else
{
	header("location:./");
}
?>