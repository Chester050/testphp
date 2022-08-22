  <?php
      session_start();

        include('header.html');
        include('form.html');
        ?>

        <form action="welcome.php">
        <input type="text" name="someText">
         <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Go!">
        </form>

        <?php
        $someText= $_GET['someText'];
        $txt = $_GET['fileToUpload'];

        $myfile = fopen("C:\Test\'newfile1.rtf", "w") or die("Unable to open file!");

        fwrite($myfile, $someText . $txt);
        fclose($myfile);

    ?>
