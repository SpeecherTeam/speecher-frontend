          <?php
          $query = "SELECT * FROM --- WHERE --- > 2 ORDER BY RAND() LIMIT 4";
           $result = mysqli_query($dbconn, $query);
             while($c_row = mysqli_fetch_array($result)){
               // Users data list from db
               $uname = $c_row["---"];
               $avatar = $c_row["---"];
               $quote_text = $c_row["---"];
               $follower = $c_row["---"];
               $user_url = $c_row["---"];

               if ($quote_text == "") {
                 $quote_text = "@$user_url";
               }

               // Render
               echo "<div onclick=\"window.location.href='user/$user_url'\" class='ranks_holder'>";
               echo "<img class='rank_avatar' src='profile/$avatar'></img>";
               echo "<p class='rank_uname'>$uname</p>";
               echo "<p class='rank_info'>$follower • $quote_text</p>";
               echo "<button onclick=\"window.location.href='user/$user_url'\" class='rank_button'>View</button>";
               echo "<br>";
               echo "</div>";
               echo "<br>";
             }
           ?>
