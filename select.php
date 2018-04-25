<?php
$connect = mysqli_connect("localhost", "root", "root", "groupproject");
$output = '';
$sql = "SELECT * FROM club ORDER BY place ";
$result = mysqli_query($connect, $sql);
$output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <!--<th width="10%">ID</th> -->
                     <th width="10%">#</th>  
                     <th width="20%">Team</th>  
                     <th width="10%">GP</th>  
                     <th width="10%">W</th>
                     <th width="10%">D</th>  
                     <th width="10%">L</th>  
                     <th width="10%">GD</th>   
                     <th width="10%">PTS</th>   
                     <th width="10%">Delete</th>  
                </tr>';
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
        $output .= '  
                <tr>  
                    
                     <td class="place" data-id1="'.$row["id"].'" contenteditable>'.$row["place"].'</td>  
                     <td class="teamName" data-id2="'.$row["id"].'" contenteditable>'.$row["teamName"].'</td>
                     <td class="gamePlayed" data-id3="'.$row["id"].'" contenteditable>'.$row["gamePlayed"].'</td>  
                     <td class="wins" data-id4="'.$row["id"].'" contenteditable>'.$row["wins"].'</td>
                     <td class="draws" data-id5="'.$row["id"].'" contenteditable>'.$row["draws"].'</td>  
                     <td class="loses" data-id6="'.$row["id"].'" contenteditable>'.$row["loses"].'</td>  
                     <td class="goalDif" data-id7="'.$row["id"].'" contenteditable>'.$row["goalDif"].'</td>
                     <td class="points" data-id8="'.$row["id"].'" contenteditable>'.$row["points"].'</td>  
                
                     <td><button type="button" name="delete_btn" data-id9="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';
    }
    $output .= '  
           <tr>  
                <td></td>  
                <td id="place" contenteditable></td>
                <td id="teamName" contenteditable></td> 
                <td id="gamePlayed" contenteditable></td> 
                <td id="wins" contenteditable></td> 
                <td id="draws" contenteditable></td> 
                <td id="loses" contenteditable></td>  
                <td id="goalDif" contenteditable></td>  
                <td id="points" contenteditable></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';
}
else
{
    $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';
}
$output .= '</table>  
      </div>';
echo $output;
?>