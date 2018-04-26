<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | WebGameProject</title>
    <link rel="shortcut icon" href="{{asset('gameasset/TemplateData/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('gameasset/TemplateData/style.css')}}">
    <script src="{{asset('gameasset/TemplateData/UnityProgress.js')}}"></script>  
    <script src="{{asset('gameasset/Build/UnityLoader.js')}}"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "http://localhost:8000/gameasset/Build/WEBGL2.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <div class="webgl-content">
      <div id="gameContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">WebGameProject</div>
      </div>
    </div>
  </body>
</html>