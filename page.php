<?php
$agent = stream_context_create(
    array(
        "http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
);

$dadosSite = file_get_contents($_GET['url'], false, $agent);
if(isset($_GET['on']) == 1) {
if(isset($_GET['um']) and isset($_GET['dois']) == true){
	$var1 = explode($_GET['um'],$dadosSite);
	$var2 = explode($_GET['dois'],$var1[1]);
}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>
	#player {
		width: 100%;
        height: 100%;
        overflow: hidden;
      }
</style>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr-pip-plugin@latest/dist/clappr-pip-plugin.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js"></script>
</head>      
<body>
  <div id="player"></div>
  <script>
    var player = new Clappr.Player({
    	source: "<?php echo $var2[0]; ?>", 
    	parentId: "#player",
    	width: '100%',
    	height: '100%',
    	plugins: [ClapprPIPPlugin],
    	plugins: [LevelSelector]
    });
  </script>
</body>
</html>
<?php 
}elseif(isset($_GET['iframe']) == 1){ 
 if(isset($_GET['um']) and isset($_GET['dois']) == true){
  $var1 = explode($_GET['um'],$dadosSite);
  $var2 = explode($_GET['dois'],$var1[1]);
}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="margin:0px;padding:0px;overflow:hidden">
    <iframe src="<?php echo $var2[0]; ?>" frameborder="0" style="overflow:hidden;height:100%;width:100%" height="100%" width="100%"></iframe>
</body>
</html>
<?php 
}else{

  if(isset($_GET['um']) and isset($_GET['dois']) == true){
    $var1 = explode($_GET['um'],$dadosSite);
        $var2 = explode($_GET['dois'],$var1[1]);
    }
    if(isset($_GET['um2']) and isset($_GET['dois2']) == true){
      $var3 = explode($_GET['um2'],$dadosSite);
      $var4 = explode($_GET['dois2'],$var3[2]);
    }
    if(isset($_GET['um3']) and isset($_GET['dois3']) == true){
      $var5 = explode($_GET['um3'],$dadosSite);
      $var6 = explode($_GET['dois3'],$var5[3]);
    }

echo $_GET['header']. "<br>";
?>
<title><?php echo $_GET['name_page']; ?></title>
<style>
a {
  pointer-events: none;
  display: inline-block;
}
</style>
<?php
if(isset($var2[0])){
  echo $var2[0];
}
if(isset($var4[0])){
  echo $var4[0];
}
if(isset($var6[0])){
  echo $var6[0];
}

echo "<br>".$_GET['footer'];
}
?>