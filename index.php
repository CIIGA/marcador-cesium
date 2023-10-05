<?php
header('Access-Control-Allow-Origin: *');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My A-Frame Scene</title>
    <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/three@0.137.0/examples/js/utils/WorkerPool.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.137.0/examples/js/loaders/KTX2Loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aframe-loader-3dtiles-component/dist/aframe-loader-3dtiles-component.min.js"></script>

    <!-- <script src="https://unpkg.com/aframe-environment-component@1.3.2/dist/aframe-environment-component.min.js"></script> -->

</head>

<body>
    <a-scene raycaster="far: 10000; objects: [link];" cursor="rayOrigin: mouse" camera-position environment="preset: default">
    <a-assets>
    <img id="thumbJapan" crossOrigin="anonymous" src="https://cdn.aframe.io/link-traversal/thumbs/japan.png">
</a-assets>
<a-link href="foto.html" position="-1800 -7460 -6120" scale="1 1 1">
    <a-plane material="src: #thumbJapan; color: red;"></a-plane>
</a-link>



      
        <a-entity id="leftHand" link-controls="hand: left"></a-entity>
        <a-entity id="rightHand" link-controls="hand: right"></a-entity>

        <a-camera id="camera" position="-1800 -7460 -6100" rotation="0 180 0" look-controls></a-camera>

        <a-entity id="freeman-tiles" position="0 0 0" rotation="-90 180 0" scale="1 1 1" loader-3dtiles="
                url: https://assets.ion.cesium.com/us-east-1/2271430/tileset.json?v=2;
                maximumSSE: 48;
                cameraEl: #camera;
                cesiumIONToken:eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiI2MWM0MmE0ZC01NGRhLTQyNGEtYjhkNC02NDczMTg1YTU5Y2MiLCJpZCI6MTY0OTQxLCJpYXQiOjE2OTYwMTI2NTd9.2RgcBxTvGwfwWgWRQm6gGg4B9-uVVNlBRh0M6N-SzY8;
                
                " look-at="#camera"></a-entity>
                

    </a-scene>
    <script>

    </script>
</body>

</html>