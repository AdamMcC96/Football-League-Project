<?php
$connect = mysqli_connect("localhost", "root", "root", "groupproject");
$output = '';
$sql = "SELECT * FROM fixture ORDER BY kickoff";
$result = mysqli_query($connect, $sql);
$output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="20%">Kick-Off</th>  
                     <th width="20%">Home Team</th>     
                     <th width="20%">Away Team</th>
                     <th width="20%">Location</th>                     
                     <th width="20%">Delete</th>   
                </tr>';
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
        $output .= '  
                <tr>  
                     <td class="kickoff" data-id1="'.$row["id"].'" contenteditable>'.$row["kickoff"].'</td>  
                     <td class="teamA" data-id2="'.$row["id"].'" contenteditable>'.$row["teamA"].'</td>   
                     <td class="teamB" data-id3="'.$row["id"].'" contenteditable>'.$row["teamB"].'</td>
                     <td class="location" data-id4="'.$row["id"].'" contenteditable>'.$row["location"].'</td>  
                    
                     <td><button type="button" name="delete_btn" data-id5="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';
    }
    $output .= '  
           <tr>  
                <td></td>  
                <td id="kickoff" contenteditable></td>
                <td id="teamA" contenteditable></td>
                <td id="teamB" contenteditable></td> 
                <td id="location" contenteditable></td>
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