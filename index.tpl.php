<html>
<head>
<title>Hírös Sport nonprofit Kft.</title>

<meta charset="UTF-8">

<link href="css/style.css" type="text/css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
  (function() {
    var cx = '001819862123426215733:0rfz8lny074';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

</head>



<body>
<header>
    <div class="container">
        <div class="container-fluid">
            <a href="index.php" class="logo"><img src="image/hiros-sport-logo.png"></a>
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
   <ul>
    <?php foreach ($oldalak as $url => $oldal) { ?>
            <?php echo (($oldal == $keres) ? '' : '') ?>
            <li> <a href="<?php echo ($url == '/') ? '.' : ('?oldal=' . $oldal['fájl'])
                ?>"><?php echo $oldal['szoveg'] ?></a> </li>
                 
           
<?php } ?>

    </ul>
    
  

    
</nav>

    </div>
    </div>
    
   
    
    </header>
    
<div class="container-fluid" style="height:1000px">

<h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <gcse:search></gcse:search>
</div>




<footer>sdfsdf</footer>
</body>
</html>