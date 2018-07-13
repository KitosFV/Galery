<html>
    <head>
        <title>Galery</title>
    </head>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <body>
        <h1>Galery</h1>
        <?php
        if(!is_dir('images')){
            mkdir('./images',0777);
        }
        $j = 0;
        $scale = 1;
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
                        if($j==5){
                            echo "</tr><tr>";
                            $j=0;
                        }
                        $j++;
                        echo 
                        "<td><figure class=\"sign\">
                            <p><img src=\"images/$img\"></p>
                            <figcaption>$img</figcaption>
                        </figure></td>";
                    }
                }
                ?>
            </tr>
        </table>
    </body>
</html>