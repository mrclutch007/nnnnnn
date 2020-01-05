<?php

function setComments($db) {
    if (isset($_POST['commentSubmit'])){
        $date = $_POST['date'];
        $message = $_POST['message'];
        global $db;
        $sql = "INSERT INTO comments (date, message) VALUES ($date', '$message ')";
        $result = $db->query($sql);
    }      
}

function getComments($db){
    $sql = "SELECT * FROM comments";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()){
        $id = $row['uid'];
        $sql2 = "SELECT * FROM user WHERE id='$id'";
        $result2 = $db->query($sql2);  
        if($row2 = $result2->fetch_assoc()){
            echo "<div class='comment-box'><p>";
            echo $row2['uid']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
            echo "</p>";
            if(isset($_SESSION['id'])){
                if($_SESSION['id'] ==  $row2['id']){
                echo "<form class='delete-form' method='POST' action='".deleteComments($db)."'>
                    <input type='hidden' name='cid' value='".$row['cid']."'>
                    <button type='submit' name='commentDelete'>Delete</button>
                </form>
                <form class='edit-form' method='POST' action='editcomment.php'>
                    <input type='hidden' name='cid' value='".$row['cid']."'>
                    <input type='hidden' name='date' value='".$row['date']."'>
                    <input type='hidden' name='message'value='".$row['message']."'>
                    <button>Edit</button>
                </form>";
                }else {
                    echo "<form class='edit-form' method='POST' action='".deleteComments($db)."'>
                    <input type='hidden' name='cid' value='".$row['cid']."'>
                    <button type='submit' name='commentDelete'>Reply</button>
                </form>";
                }
                
            }else{
                echo"<p class ='commentmessage'>You need to logged in to rely!</p>";
            }
               
        echo "</div>";
        }
        
       
    }
    
    
}















