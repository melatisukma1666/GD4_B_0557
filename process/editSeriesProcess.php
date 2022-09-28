<?php
if (isset($_POST['editseries'])) {
    include('../db.php');
    $id=$_REQUEST['id'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realease = $_POST['realease'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
    
        if(empty($name) and empty($genre) and empty($realease) and empty($season) and empty($synopsis) and empty($episode))
        {
            echo
                '<script>
                alert("Update Series Failed ! [! All data must be changed !]");
                window.history.back()
            </script>';
        }else{ 
            $str="";
            foreach ($genre as $stringGenre) 
            {
                $str.= $stringGenre;
                $str.= ", ";
            }
        
            $query = mysqli_query(
            $con,
            "UPDATE series SET name = '".$name."', genre = '".$str."', realease = '".$realease."',episode = '".$episode."', synopsis = '".$synopsis."' WHERE id  = ".$id."")
            or die(mysqli_error($con));
            
        if ($query) 
        {
            echo
            '<script>
            alert("Update Series Successfully");
            window.location = "../page/listSeriesPage.php"
            </script>';
        }else{
            echo
            '<script>
            alert("Update Series Failed");
            </script>';
        }
    }
    
}else{
    echo
    '<script>
    window.history.back()
    </script>';
}
?>