<?php 
if(isset($_REQUEST["submit"]))
    {
    $username=$_REQUEST["username"];
    if($username=="")
         {
            echo "no data entered";
            header('location: Lab3.1.php');
        }
    else
        {
        $flag =0;
        $n= strlen($username);
        for($i=0; $i<$n; $i++)
        {
          if (($username[$i]>='a' && $username[$i]<='z')||
              ($username[$i]>='A' && $username[$i]<='Z'))
              {
                continue;
              }
          else
             {
            echo "The name is not valid as it contains special character. \r\n";
            $flag=1;
            break;
             }
        }
        if($flag==0)
        {
          echo  $username ;
        }

        }
         
    }
       






?>