<?php
if($method == 'GET'){
    if($id){
        $data = DB::query("SELECT * FROM $tableName WHERE id=:id",array(':id'=>$id));
        if($data !=null){
            echo json_encode($data);
        }else{
            
           echo json_encode(['message'=>'currently there are no posts database']); 
        }
    }else{
       
        $data= DB::query("SELECT * FROM $tableName");
        echo json_encode($data);
    }
}elseif($method == 'POST'){
    if($_POST != null && !$id){
        extract($_POST);
        
        DB::query("INSERT INTO $tableName VALUES(null, :title, :body, :author, null)",array(':title'=>$title, ':body'=>$body, ':author'=>$author));
        $data= DB::query("SELECT * FROM $tableName ORDER BY id DESC LIMIT 1");
        echo json_encode(['message'=>'added succesfully', 'success'=>true, 'post'=>$data[0]]);
        
    }else{
        echo json_encode(['message'=>'fill all fields', 'success'=>false]);
        
    }
    
}