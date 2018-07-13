<html>
    <head></head>
    <body>
        <?php
        if(!is_dir('images')){
            mkdir('./images',0777);
        }
        ?>
        <table>
            <tr>
                <?php
                $images = scandir("./images");
                for($i=2;$i<count($images);$i++){
                    $img = $images[$i];
                    $div = explode(".",$img);
                    $ext = $div[count($div)-1];
                }
                ?>
            </tr>
        </table>
    </body>
</html>