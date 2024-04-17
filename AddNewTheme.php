<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project - Add New Theme</title>
</head>
<body>
    <?php
        // Inisialisasi variabel untuk mode tambah atau edit
        $editMode = false;
        $editIndex = null;

        if (isset($_GET['index'])) {
            $editMode = true;
            $editIndex = $_GET['index'];
        }

        if (isset($_COOKIE['themeList'])) {
            $list = unserialize($_COOKIE['themeList']);
        } else {
            $list = array();
        }

        //mode edit
        if($editMode && $editIndex !== null){
            $editName = $list[$editIndex][0];
            $editColorBg = $list[$editIndex][1];
            $editColorHeading = $list[$editIndex][2];
            $editAlign = $list[$editIndex][3];
            $editColorParagraph = $list[$editIndex][4];
            $editFontSize = $list[$editIndex][5];
        }
        //mode tambah
        else{
            $editName = "";
            $editColorBg = "";
            $editColorHeading = "";
            $editAlign = "";
            $editColorParagraph = "";
            $editFontSize = "";
        }
    ?>
    <form method="post" action="">
        <label>Name of your theme :</label><input type="text" name="NameTheme" value="<?php echo "$editName"; ?>" ><br><br>
        <label>Color of Page Background :</label><input type="color" name="ColorBg" value="<?php echo "$editColorBg"; ?>"><br><br>
        <label>Color of Heading 1 :</label><input type="color" name="ColorHeading" value="<?php echo "$editColorHeading"; ?>"><br><br>
        <label>Alignment of Heading 1 :</label><select name="Align" placeholder="-- Choose The Alignment --"> 
            <option value="center" <?php echo $editAlign === 'center' ? 'selected' : ''; ?>>Center</option>
            <option value="right" <?php echo $editAlign === 'right' ? 'selected' : ''; ?>>Right</option>
            <option value="left" <?php echo $editAlign === 'left' ? 'selected' : ''; ?>>Left</option></select><br><br>
        <label>Color of Paragraph : </label><input type="color" name="ColorParagraph" value="<?php echo "$editColorParagraph"; ?>"><br><br>
        <label>Font size of Paragraph : <input type="number" name="FontSize" value="<?php echo "$editFontSize"; ?>"> px</label><br><br>

        <?php if ($editMode): ?>
            <input type="hidden" name="editIndex" value="<?php echo $editIndex; ?>">
        <?php endif; ?>
        <input type="submit" name="save" value="Save">
    </form>
    <?php 
        if(isset($_POST['save'])){
            $NameTheme = $_POST['NameTheme'];
            $ColorBgTheme = $_POST['ColorBg'];
            $ColorHeadingTheme = $_POST['ColorHeading'];
            $AlignTheme = $_POST['Align'];
            $ColorParagraphTheme = $_POST['ColorParagraph'];
            $FontSizeTheme = $_POST['FontSize'];
        
            // Mode Edit
            if ($editMode && isset($_POST['editIndex'])) {
                $index = $_POST['editIndex'];
                $list[$index] = array($NameTheme, $ColorBgTheme, $ColorHeadingTheme, $AlignTheme, $ColorParagraphTheme, $FontSizeTheme);
            } else {
                // Mode Tambah Data
                $list[] = array($NameTheme, $ColorBgTheme, $ColorHeadingTheme, $AlignTheme, $ColorParagraphTheme, $FontSizeTheme);
            }
            setcookie('themeList', serialize($list), time() + (86400 * 30), "/");
            header('Location: index.php');
        }
    ?>
</body>
</html>