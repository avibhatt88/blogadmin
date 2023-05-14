<?php

    use App\Models\category;

  function ktCategoryName($id){
		
    $categorys = category::find($id);
    if(!empty($categorys)){			
        return $categorys->title;
    }
}

?>