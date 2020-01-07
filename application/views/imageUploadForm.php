<!doctype html>
<body>
	<!-- <?php echo base_url()?> -->
    <form method='post' action='<?php echo base_url()?>api/item' enctype='multipart/form-data'>

      <input type='file' name='files[]' multiple=""> <br/><br/>
      <input type='submit' value='Upload' name='upload' />

    </form>

</body>
</html>
