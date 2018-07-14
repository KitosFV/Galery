<html>
    <head>
        <title>Galery</title>
    </head>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <body>
        <h1 align="center">Galery</h1>
        <?php
        if(!is_dir('images')){
            mkdir('./images',0777);
        }
        $j = 0;
        $width0 = 175;
        ?>
        <table align="center">
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
			$data = getimagesize('./images/'.$img);
			$width = $data[0];
			$height = $data[1];
			$mul = $width0 / $width;
			$height = $mul * $height;
                        echo 
                        "<td><figure class=\"sign\">
                            <p><img src=\"images/$img\" width=\"$width0\" height=\"$height\"></p>
                            <figcaption>$img</figcaption>
                        </figure></td>";
                    }
                }
                ?>
            </tr>
        </table>
    </body>
</html>
