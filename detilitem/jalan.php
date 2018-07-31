<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/07/18
 * Time: 17:59
 */
?>

<html>
<head>

</head>

<body>
    <?php
    include "../view/header.php";

    ?>

    <h1>HD Video</h1>
    <div class="row">
        <div class="col-sm-4">
            <video src="../video/VID_20180714_153116.mp4" webkit-playsinline playsinline data-video="../video/VID_20180714_153116.mp4"
                   loop muted autoplay id="video" class="video" style="width: 300px">
            </video>

        </div>

        <div class="col-sm-8">
          <table class="table">
              <th>No</th>
              <th>Nama Jalan</th>


              <tb>
                 <tr>
                     <td>
                         1
                     </td>
                     <td>
                         Jln dt.Kayo
                     </td>

                 </tr>
              </tb>

          </table>
        </div>

    </div>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="../plugin_video/dist/js/jquery.popVideo.js"></script>
    <link rel="stylesheet" href="../plugin_video/dist/css/jquery.popVideo.css">
    <script>
        $('#video').click(function () {
            $('#video').popVideo({
                playOnOpen: true,
                title: "jQueryScript.net Demo Page",
                closeOnEnd: true,
                pauseOnClose: true,
            }).open()
        });
    </script>

</body>
</html>


