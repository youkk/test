<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>
<script src="/Public/Home/Js/jquery-3.3.1.js"></script>
<script>
    var url = "<?php echo U('Api/index/get_lottery');?>?type=1";


    $.post(url, function(data) {
          console.log(data);return false;

    });
</script>