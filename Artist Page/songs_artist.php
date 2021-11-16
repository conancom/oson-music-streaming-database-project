<?php
session_start();
$mysqli = new mysqli("localhost", "root", 'Wirz140328', "oson-v2");


if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}


?>
<!DOCTYPE html>
<!--Font-->
<link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;700&display=swap" rel="stylesheet">
<html>

<head>
  <title>Song List</title>
  <link rel="stylesheet" href="lists_artist.css">
</head>



<body>

  <nav class="menu_head">
    <div class="menu_button_group">
      <a href="home_artist.php">Home</a>
      <a href="">Songs</a>
      <a href="albums_artist.php">Albums</a>
      <a href="editprofile_artist.php">Settings</a>
    </div>
  </nav>

  <div class="wrapper_main">
    <?php
    if (isset($_SESSION['id-artist'])) {
      $idartist = $_SESSION['id-artist'];

      $query = "SELECT * FROM `artist` WHERE `idArtist` = '$idartist'";
      // print($query); 
      $result = $mysqli->query($query);
      if (!$result) {
        echo $mysqli->error;
      } else {
        if (mysqli_num_rows($result) > 0) {
          $data = $result->fetch_array();
          $_SESSION['id-artist'] = $data['idArtist'];
          $id = $data["idArtist"];
          echo '<div class="profilepic" style="background: url(img/' . $id . '.jpg); 
                        position: absolute;
                        width: 173px;
                        height: 173px;
                        left: 126px;
                        top: 198px;
                        border-radius: 202px;
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                        align-items: center;
                        margin-top: -2.25%;">';
                      
        }
        echo '</div>';
        echo '<div class="header_details">';
        echo '<h1>' .$data["ArtistName"]. ' Song List</h1>';
      }
    }
    ?>
  



    <div class="duobutton">
      <button type="button" class="button_orange" onclick="location.href='addsong_artist.php'">Create new Song</button>

      <select name="order by" class="button_orange">
      </select>
    </div>
  </div>

  <table class="songtable">
    <tr>
      <th>Song Number</th>
      <th>Song Name</th>
      <th>Album Name</th>
      <th>Listeners</th>
      <th>Streams</th>
      <th>Popularity</th>
      <th>Explicity</th>
    </tr>
    <?php
    if (isset($_SESSION['id-artist'])) {
      $idartist = $_SESSION['id-artist'];

      $query = "SELECT *, `song`.`Popularity` AS 'pop', `song`.`Explicity` AS 'e'
            FROM `artist`, `song`, `createsong`,`consistAlbum`, `Album`
            WHERE `artist`.`idArtist` = '$idartist' 
            AND `createsong`.`idArtist` = `artist`.`idArtist`
            AND `createsong`.`idSong` = `song`.`idSong`
            GROUP BY `song`.`idSong`
            ORDER BY `song`.`idSong` DESC";
      // print($query); 
      $result = $mysqli->query($query);
      if (!$result) {
        echo $mysqli->error;
      } else {
        if (mysqli_num_rows($result) > 0) {
          $x = 1;
          while ($data = $result->fetch_array(MYSQLI_ASSOC)) {
            // Do stuff with $
            
            echo '<tr>';
            echo '<td>' . $data['idSong'] . '</td>';
            echo ' <td> ' . $data['Name'] . '</td>';

            $songid = $data['idSong'];
            $query1 = "SELECT *
            FROM `song`, `consistAlbum`, `Album`
            WHERE `song`.`idSong` = $songid
            AND `song`.`idSong` = `consistAlbum`.`idSong`
            AND `consistAlbum`.`idAlbum` = `Album`.`idAlbum`";
            // print($query); 
            
            $result1 = $mysqli->query($query1);
            if (!$result1) {
              echo $mysqli->error;
            } else {
              if (mysqli_num_rows($result1) > 0) {
                $data1 = $result1->fetch_array();
                echo '<td> ' . $data['AlbumName'] . '</td>';
              }
            }
            
            
            


            $query2 = "SELECT count(DISTINCT `ListenToSong`.`idListener`)
            FROM `listener`, `song`, `createsong`, `ListenToSong`, `artist` 
            WHERE `ListenToSong`.`idSong` = `song`.`idSong`
            AND `song`.`idSong` = $songid
            GROUP BY `song`.`idSong`";
            // print($query); 
            
            $result2 = $mysqli->query($query2);
            if (!$result2) {
              echo $mysqli->error;
            } else {
              if (mysqli_num_rows($result2) > 0) {
                $data2 = $result2->fetch_array();
                echo '<td> ' . $data2['count(DISTINCT `ListenToSong`.`idListener`)'] . '</td>';
              }
            }

            $query3 = "SELECT count(DISTINCT `ListenToSong`.`ListenToSongId`)
            FROM `listener`, `song`, `createsong`, `ListenToSong`, `artist` 
            WHERE `ListenToSong`.`idSong` = `song`.`idSong`
            AND `song`.`idSong` = '$songid'
            GROUP BY `song`.`idSong`";
            // print($query); 
            
            $result3 = $mysqli->query($query3);
            if (!$result3) {
              echo $mysqli->error;
            } else {
              if (mysqli_num_rows($result3) > 0) {
                $data3 = $result3->fetch_array();
                echo '<td> ' . $data3['count(DISTINCT `ListenToSong`.`ListenToSongId`)'] . '</td>';
              }
            }
            
            echo '<td> ' . $data['pop'] . ' </td>';
            echo '<td>' . $data['e'] . ' </td>';
            echo '</tr>';
            $x++;
          }
        }
      }
    }

    ?>

  </table>

  </div>
  <div id="div_footer">



  </div>
</body>

</html>