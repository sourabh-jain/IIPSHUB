// Register Editor component to your page   
<?php require_once "richtexteditor/include_rte.php" ?>   
<html>   
<body>   
        <form id="form1" method="POST">   
            <?php   
                // Create Editor instance and use Text property to load content into the RTE.  
                $rte=new RichTextEditor();   
                $rte->Text="Type here"; 
                // Set a unique ID to Editor   
                $rte->ID="Editor1";    
                $rte->MvcInit();   
                // Render Editor 
                echo $rte->GetString();  
            ?>   
		<input type="submit" name="submit">
        </form>   
		
		<div>
		
		<?php
		if(isset($_POST["submit"]))
			echo '<script>alert("' . $_POST["Editor1"] . '");</script>';
			?>
			
			
		</div>
</body>   
</html> 