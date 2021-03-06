<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<title>Facebook Public Videos Downloader</title>
<style>
body,html{
height: 100%;}
.btn {
  background-color:#44c767;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.btn:hover { background-color: #2EE59D; box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4); color: #fff; transform: translateY(-7px); } .btn:active { box-shadow: 0 5px #666; transform: translateY(4px); } #img { padding:1px; border:8px solid #021a40; }
h4 {text-align:center}
#search-form_3 { background: #e1e1e1; /* Fallback color for non-css3 browsers */ width: 365px; margin: 100px auto; /* Gradients */ background: -webkit-gradient( linear,left top, left bottom, color-stop(0, rgb(243,243,243)), color-stop(1, rgb(225,225,225))); background: -moz-linear-gradient( center top, rgb(243,243,243) 0%, rgb(225,225,225) 100%); /* Rounded Corners */ border-radius: 17px; -webkit-border-radius: 17px; -moz-border-radius: 17px; /* Shadows */ box-shadow: 1px 1px 2px rgba(0,0,0,.3), 0 0 2px rgba(0,0,0,.3); -webkit-box-shadow: 1px 1px 2px rgba(0,0,0,.3), 0 0 2px rgba(0,0,0,.3); -moz-box-shadow: 1px 1px 2px rgba(0,0,0,.3), 0 0 2px rgba(0,0,0,.3); } /*** TEXT BOX ***/ .search_3{ background: #fafafa; /* Fallback color for non-css3 browsers */ /* Gradients */ background: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(250,250,250)), color-stop(1, rgb(230,230,230))); background: -moz-linear-gradient( center top, rgb(250,250,250) 0%, rgb(230,230,230) 100%); border: 0; border-bottom: 1px solid #fff; border-right: 1px solid rgba(255,255,255,.8); font-size: 16px; margin: 4px; padding: 5px; width: 250px; /* Rounded Corners */ border-radius: 17px; -webkit-border-radius: 17px; -moz-border-radius: 17px; /* Shadows */ box-shadow: -1px -1px 2px rgba(0,0,0,.3), 0 0 1px rgba(0,0,0,.2); -webkit-box-shadow: -1px -1px 2px rgba(0,0,0,.3), 0 0 1px rgba(0,0,0,.2); -moz-box-shadow: -1px -1px 2px rgba(0,0,0,.3), 0 0 1px rgba(0,0,0,.2); } /*** USER IS FOCUSED ON TEXT BOX ***/ .search_3:focus{ outline: none; background: #fff; /* Fallback color for non-css3 browsers */ /* Gradients */ background: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(255,255,255)), color-stop(1, rgb(235,235,235))); background: -moz-linear-gradient( center top, rgb(255,255,255) 0%, rgb(235,235,235) 100%); } /*** SEARCH BUTTON ***/ .submit_3{ background: #4ea923;/* Fallback color for non-css3 browsers */ /* Gradients */ background: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(79,188,32)), color-stop(0.15, rgb(73,157,34)), color-stop(0.88, rgb(62,135,28)), color-stop(1, rgb(49,114,21))); background: -moz-linear-gradient( center top, rgb(79,188,32) 0%, rgb(73,157,34) 15%, rgb(62,135,28) 88%, rgb(49,114,21) 100%); border: 0; color: #eee; cursor: pointer; float: right; font: 16px 'Raleway', sans-serif; font-weight: bold; height: 30px; margin: 4px 4px 0; text-shadow: 0 -1px 0 rgba(0,0,0,.3); width: 84px; outline: none; /* Rounded Corners */ border-radius: 30px; -webkit-border-radius: 30px; -moz-border-radius: 30px; /* Shadows */ box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.4); -moz-box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.2); -webkit-box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.4); } /*** SEARCH BUTTON HOVER ***/ .submit_3:hover { background: #4ea923; /* Fallback color for non-css3 browsers */ /* Gradients */ background: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgb(89,222,27)), color-stop(0.15, rgb(83,179,38)), color-stop(0.8, rgb(66,143,27)), color-stop(1, rgb(54,120,22))); background: -moz-linear-gradient( center top, rgb(89,222,27) 0%, rgb(83,179,38) 15%, rgb(66,143,27) 80%, rgb(54,120,22) 100%); } .submit_3:active { background: #4ea923; /* Fallback color for non-css3 browsers */ /* Gradients */ background: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(89,222,27)), color-stop(0.15, rgb(83,179,38)), color-stop(0.8, rgb(66,143,27)), color-stop(1, rgb(54,120,22))); background: -moz-linear-gradient( center bottom, rgb(89,222,27) 0%, rgb(83,179,38) 15%, rgb(66,143,27) 80%, rgb(54,120,22) 100%); }
body{background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
background-repeat: no-repeat;
height: 100%;
}
</style>
</head>
<body>
<h4>// Facebook Videos Downloader //</h4>
<div style="width:350px" id="search-form_3"> <input style="width:250px" type="text" id="ur" name="url" placeholder="Enter Facebook URL" class="search_3" required/> <button style="width:70px" id="bt" onclick="loadDoc()" class="submit_3" >Extract</button> </div>
<div id="demo"></div>
<script>
function loadDoc() {
document.getElementById("bt").innerHTML = "<i class='fa fa-gear fa-spin'></i>";
document.getElementById("demo").innerHTML = "<center><i style='font-size:100px' class='fa fa-spinner fa-spin'></i></center>";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  var ul = document.getElementById("ur").value;

  xhttp.open("GET", "/fetchvid.php?url="+ul, true);
  xhttp.send();
}
</script>
</body>
</html>
