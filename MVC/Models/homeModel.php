<?php
    class homeModel extends DB{
        function get_newest_news(){
            $qr = "
                SELECT * FROM tin 
                         ORDER BY idTin  
                         DESC LIMIT 0,1;
            ";
            return mysqli_query($this->conn,$qr);
        }
        function get_list_newest_news(){
            $qr = "
                SELECT * FROM tin 
                    ORDER BY idTin 
                    DESC LIMIT 1,6;
            ";
            return mysqli_query($this->conn,$qr);
        }
        function get_list_viewest_news(){
            $qr = "
                SELECT * FROM tin 
                    ORDER BY SoLanXem
                    DESC LIMIT 0,8;
            ";
            return mysqli_query($this->conn,$qr);
        }

        function get_name_LoaiTin($idLT){
            $imploded_arr = implode(',', $idLT);
            $qr = "
            SELECT Ten FROM loaitin
               WHERE idLT in ($imploded_arr)
            ";
            $lt =  mysqli_query($this->conn,$qr);
            $rows = [];
            while($row = mysqli_fetch_array($lt))
            {
                $rows[] = $row;
            }
            
            return $rows;
        }

        function get_newest_news_follow_LoaiTin($idLT){
            $imploded_arr = implode(',', $idLT);
            $qr = "
            (SELECT * FROM tin
                     WHERE idLT = $idLT[0]
                     ORDER BY idTin  
                     DESC LIMIT 0,1)
            UNION
            (SELECT * FROM tin
                    WHERE idLT = $idLT[1]
                    ORDER BY idTin  
                    DESC LIMIT 0,1)
            UNION
            (SELECT * FROM tin
                    WHERE idLT = $idLT[2]
                    ORDER BY idTin  
                    DESC LIMIT 0,1)                    
            ;
            ";
            $tin =  mysqli_query($this->conn,$qr);
            $rows = [];
            while($row = mysqli_fetch_array($tin))
            {
                $rows[] = $row;
            }
           return $rows;
        }
        function get_list_newest_news_follow_LoaiTin($idLT){
            $qr = "
            (SELECT * FROM tin
                    WHERE idLT = $idLT[0]
                    ORDER BY idTin  
                    DESC LIMIT 1,6)
            UNION
            (SELECT * FROM tin
                    WHERE idLT = $idLT[1]
                    ORDER BY idTin  
                    DESC LIMIT 1,6)
            UNION
            (SELECT * FROM tin
                    WHERE idLT = $idLT[2]
                    ORDER BY idTin  
                    DESC LIMIT 1,6)                    
            ;
            ";
            $tin =  mysqli_query($this->conn,$qr);
            $rows = [];
            while($row = mysqli_fetch_array($tin))
            {
                $rows[] = $row;
            }
            // echo "<pre>";
            // print_r($rows);
            // echo "<pre>";
            return $rows;
        }





    }
?>