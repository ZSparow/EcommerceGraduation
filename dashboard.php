<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    require_once('db.php');
    
    if(isset($_POST['insert_ph'])){
       
        insert_mobile($con,$_POST['brand'],$_POST['price'],$_POST['description'],$_FILES['img'],$_POST['model'],$_POST['memory'],$_POST['screen'],$_POST['storage'],$_POST['camera'],$_POST['processor']);


        
    }
    elseif(isset($_POST['insert_pc'])){
       
        insert_computer($con,$_POST['brand'],$_POST['price'],$_POST['description'],$_FILES['img'],$_POST['model'],$_POST['storage'],$_POST['processor'],$_POST['graphics'],$_POST['memory']);

        

        
    }
    

   elseif(isset($_POST['insert_con'])){
   
    insert_console($con,$_POST['brand'],$_POST['price'],$_POST['description'],$_FILES['img'],$_POST['model'],$_POST['memory'],$_POST['storage'],$_POST['graphics']);



}

} 




function insert_computer($con,$brand,$price,$description,$file,$model,$storage,$processor,$graphics,$memory){
    if(isset($file)){ 
        $name=$file['name'];
        $tmp=$file['tmp_name'];
        $error=$file['error'];
        $size=$file['size']; 
        $file_ext=explode('.',$name);
        $file_ext=strtolower(end($file_ext));
        $allowed=array('txt','png','jpg','jpeg'); 
        
        if(in_array( $file_ext,$allowed)){
            if($error==0){
                if($size<=2097152) 
                $new_name=uniqid('',true).'.'.$file_ext;
                $destination="files/computers/$new_name";
                if(move_uploaded_file($tmp,$destination)){
                    $image=$new_name;
                    $insert_query="INSERT INTO `pc`(`brand`, `model`, `price`, `processor`, `memory`, `storage`, `graphics`, `description`, `img`) VALUES ('".$brand."','".$model."','".$price."','".$processor."','".$memory."','".$storage."','".$graphics."','".$description."','".$image."')";
                    if( mysqli_query($con,$insert_query)) 
                  { 
                      $data = array('stat'=>true,'msg'=>"added successfully");
                        header('location:form_pc.php?data_pc='.base64_encode(serialize($data)));
                  }
                  else
                    echo 'false'.mysqli_error($con); 
                }
                else{
                    echo 'your file hasnt upload';
                }
            } 
        }
        else 
            echo"image not allwed";
    } 
   


}

function insert_console($con,$brand,$price,$description,$file,$model,$memory,$storage,$graphics){
    if(isset($file)){ 
        $name=$file['name'];
        $tmp=$file['tmp_name'];
        $error=$file['error'];
        $size=$file['size']; 
        $file_ext=explode('.',$name);
        $file_ext=strtolower(end($file_ext));
        $allowed=array('txt','png','jpg','jpeg'); 
        
        if(in_array( $file_ext,$allowed)){
            if($error==0){
                if($size<=2097152) 
                $new_name=uniqid('',true).'.'.$file_ext;
                $destination="files/consoles/$new_name";
                if(move_uploaded_file($tmp,$destination)){
                    $image=$new_name;
                    $insert_query="INSERT INTO console(`brand`, `price`, `description`,`img`, `model`,`memory`,`storage`,`graphics`
                    ) VALUES ('".$brand."','".$price."','".$description."','".$image."','".$model."','".$memory."','".$storage."','".$graphics."')";
                    if( mysqli_query($con,$insert_query)) 
                  { 
                      $data = array('stat'=>true,'msg'=>"added sacssfuly");
                        header('location:form_console.php?data_con='.base64_encode(serialize($data)));
                  }
                  else
                    echo 'false'.mysqli_error($con); 
                }
                else{
                    echo 'your file hasnt upload';
                }
            } 
        }
        else 
            echo"image not allwed";
    }
}

function insert_mobile($con,$brand,$price,$description,$file,$model,$memory,$screen,$storage,$camera,$processor){
    if(isset($file)){ 
        $name=$file['name'];
        $tmp=$file['tmp_name'];
        $error=$file['error'];
        $size=$file['size']; 
        $file_ext=explode('.',$name);
        $file_ext=strtolower(end($file_ext));
        $allowed=array('txt','png','jpg','jpeg'); 
        
        if(in_array( $file_ext,$allowed)){
            if($error==0){
                if($size<=2097152) 
                $new_name=uniqid('',true).'.'.$file_ext;
                $destination="files/mobiles/$new_name";
                if(move_uploaded_file($tmp,$destination)){
                    $image=$new_name;
                    $insert_query="INSERT INTO mobile(`brand`, `price`, `description`, `img`,`model`,`screen`,`camera`,`processor`,`memory`,`storage`
                    ) VALUES ('".$brand."','".$price."','".$description."','".$image."','".$model."','".$screen."','".$camera."','".$processor."','".$memory."','".$storage."')";
                    if( mysqli_query($con,$insert_query)) 
                  { 
                      $data = array('stat'=>true,'msg'=>"added sacssfuly");
                        header('location:form_phone.php?data_ph='.base64_encode(serialize($data)));
                  }
                  else
                    echo 'false'.mysqli_error($con); 
                }
                else{
                    echo 'your file hasnt upload';
                }
            } 
        }
        else 
            echo"image not allwed";
    } 
   


}
?>