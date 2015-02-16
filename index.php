<html>
  <head>
    <script type='text/javascript' src='jwplayer/jwplayer.js'>
    </script>
  </head>
  <body>
    <div id='mediaspace'></div>
    <script type='text/javascript'>

      function tocar(){

        var streamingUrl = document.getElementById('txUrl').value;

        console.log(streamingUrl);

        jwplayer('mediaspace').setup({
          'flashplayer': 'jwplayer/jwplayer.flash.swf',       
          //'file': 'rtmp://localhost/vod/video.mp4',
          'file': streamingUrl,
          //'file': 'http://192.168.43.1:8080/spydroid.sdp?id=0&h264=500-20-320-240&flash=off&camera=0',
          'autostart': 'true',
          'primary': 'flash',
          'width': '470',
          'height': '320'
        });
      }
    
    </script>

    <label>URL do streaming:</label>
    <input id="txUrl" type="text" value="rtmp://diegosilva.sytes.net/live/test" style="width:200px;"></input>
    <button value="Tocar" onclick="tocar();">Tocar</button>
  </body>
</html>

