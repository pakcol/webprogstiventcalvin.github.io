<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project UTS</title>
    <style>
            <?php
                if (isset($_COOKIE['themeList'])) {
                    $list = unserialize($_COOKIE['themeList']);
                } else {
                    $list = array();
                }

                //Simpan ke Cookies
                
                if(isset($_POST['chooseTheme'])){
                    $pickIndex = $_POST['theme'];
                    $pickColorBg = $list[$pickIndex][1];
                    $pickColorHeading = $list[$pickIndex][2];
                    $pickAlign = $list[$pickIndex][3];
                    $pickColorParagraph = $list[$pickIndex][4];
                    $pickFontSize = $list[$pickIndex][5];
                }
                if(isset($_POST['editTheme'])){
                    $editIndex = $_POST['theme'];
                    if(isset($editIndex)){
                        header("Location: AddNewTheme.php?index=$editIndex");
                    }
                }
            ?>
    </style>
</head>
<body style="<?php echo "background-color: $pickColorBg;" ?>">
    <form method="post" action="">
    <label>Theme : </label>
        <?php
            echo "<select name=\"theme\">";
            echo "<option disabled selected>-- Choose Theme --</option>";
            for ($row = 0; $row < count($list); $row++) {
                $pickName = $list[$row][0];
                echo "<option value=\"$row\">$pickName</option>";
            } 
            echo "</select>";
        ?>
    <a href="AddNewTheme.php">Add New Theme</a>
    <br><br>
    
        <input type="submit" name="chooseTheme" value="Choose the Theme">
        <input type="submit" name="editTheme" value="Edit Theme">
    </form><br><hr>

    <h1 style=" <?php echo "color: $pickColorHeading; text-align: $pickAlign;" ?>">Heading 1</h1>
    <p style=" <?php echo "color: $pickColorParagraph; font-size: $pickFontSize" ?>px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt lorem ornare facilisis dapibus. Sed ullamcorper lorem quis dui euismod volutpat. Nam interdum rhoncus placerat. Aliquam aliquam erat quis nulla porta, nec bibendum magna dictum. Fusce ut vehicula augue. Nullam viverra augue sapien, ut pharetra lectus molestie quis. Phasellus venenatis erat risus. Mauris nec semper nisl. Vivamus placerat sem ac tellus imperdiet, vel cursus nibh tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer sit amet velit vitae enim eleifend fermentum. Vivamus tortor neque, scelerisque sed magna at, semper tincidunt odio. Quisque ut sodales ex. Nunc accumsan ipsum sit amet aliquam ultricies.</p>
    <p style=" <?php echo "color: $pickColorParagraph; font-size: $pickFontSize" ?>px;">Pellentesque eleifend turpis eu urna sodales, id euismod nulla pretium. Aenean rhoncus maximus diam sit amet posuere. Nulla tincidunt, lacus at semper porttitor, lorem tortor blandit lectus, non consectetur ipsum dui eu nulla. Nam ut massa eu sapien volutpat vehicula nec non tellus. Etiam interdum cursus sem, eu eleifend lacus. Aliquam ante lorem, dictum quis maximus nec, fringilla a turpis. Sed commodo justo dignissim eleifend tristique. Maecenas aliquet dolor tincidunt augue euismod, et interdum dolor gravida. Nulla tincidunt, est quis scelerisque dictum, arcu magna dignissim orci, eu auctor lectus nibh non turpis. Etiam eu pharetra mauris.</p>    
</body>
</html>