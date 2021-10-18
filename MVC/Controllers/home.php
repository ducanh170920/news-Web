<?php
    class home extends controller{
        function sayHi(){
            $LoaiTin = [3,4,5];

            $model = $this->Model("homeModel");
            
            $view = $this->Views("trangchu",[
                "newest_news" => $model->get_newest_news(),
                "list_newest_news" => $model->get_list_newest_news(),
                "list_viewest_news" => $model->get_list_viewest_news(),
                "name_LoaiTin" => $model->get_name_LoaiTin($LoaiTin),
                "newest_news_follow_LoaiTin" => $model->get_newest_news_follow_LoaiTin($LoaiTin),
                "list_newest_news_follow_LoaiTin"=> $model->get_list_newest_news_follow_LoaiTin($LoaiTin)
            ]);
        }
    
        
    }
?>
