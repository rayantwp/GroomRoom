<?
require_once ('connect.php');
$type = $_POST['type'];

function addApplication($conn, $nickname, $category) {
  $date = date('Y-m-d');
  $sql = "INSERT INTO `applications` (`id`, `nickname`, `before`, `after`, `timestamp`, `category`, `status`) VALUES (NULL, '$nickname', 'before', 'after', '$date', '$category', 'new')";
  if ($conn->query($sql) === TRUE) {
    $applications =  mysqli_query($conn, "SELECT * FROM `applications` where `nickname` = '$nickname'");
    $vars = [];
    while ($var = mysqli_fetch_assoc($applications)) {
      array_push($vars, array('id' => $var['id'], 'before' => $var['before'],'nickname' => $var['nickname'],'category' => $var['category'],'status' => $var['status'],'timestamp' => $var['timestamp']));
    }
    return $vars;
  } else {
    return "Error: " . $sql . "<br>" . $conn->error;
  }
}

function getAllApplications($conn) {
  $applications =  mysqli_query($conn, "SELECT * FROM `applications`");
  $vars = [];
  while ($var = mysqli_fetch_assoc($applications)) {
    array_push($vars, array('id' => $var['id'], 'before' => $var['before'],'nickname' => $var['nickname'],'category' => $var['category'],'status' => $var['status'],'timestamp' => $var['timestamp']));
  }
  return $vars;
}

function getApplicationsById($conn, $id) {
  for ($idx=0; $idx < count($id); $idx++) { 
    $applications =  mysqli_query($conn, "SELECT * FROM `applications` Where `id` = '$id[$idx]'");
    $vars = [];
    while ($var = mysqli_fetch_assoc($applications)) {
      array_push($vars, [$var['id'], $var['nickname'], $var['before'], $var['after'], $var['timestamp'], $var['category'], $var['status']]);
    }
    for ($i=0; $i < count($vars); $i++) {
      for ($j=0; $j < count($vars[$i]); $j++) { 
        echo $vars[$i][$j]. " ";
      }
      echo '<br>';
    }
  }
}

function removeApplicationByName($conn, $nickname) {
  $sql = "DELETE FROM `applications` WHERE `applications`.`nickname` = '$nickname'";
  if ($conn->query($sql) === TRUE) {
    echo "Application was remove successfull";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

function changeStatusApplicationByName($conn, $nickname, $status) {
  $sql = "UPDATE `applications` SET `status` = '$status' WHERE `nickname` = '$nickname'";
  if ($conn->query($sql) === TRUE) {
    echo "Status was changed successfull";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>