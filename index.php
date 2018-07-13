<html>
    <head></head>
    <body>
        <?php
        if(!is_dir('images')){
            mkdir('./images',0777);
        }
        $j = 0;
        ?>
        <table>
            <tr>
                <?php
                $images = scandir("./images");
                for($i=2;$i<count($images);$i++){
                    $img = $images[$i];
                    $div = explode(".",$img);
                    $ext = strtolower($div[count($div)-1]);
                    $isImg = true;
                    switch($ext){
                            case('jpg'):
                            case('jpeg'):
                            case('bmp'):
                            case('png'):break;
                        default:{
                            $isImg = false;
                            break;
                        }
                    }
                    if($isImg){
                        
                    }
                }
                ?>
            </tr>
        </table>
    </body>
</html>