<!DOCTYPE html>
<html lang="en">

<!-- important heading -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico">
  <title>project</title>
  <meta name="description" content="welcome to my website" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:bold|Roboto" rel="stylesheet">  google font -->
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="content">
          <?php
            $jsondata = file_get_contents("data.json");
            $json = json_decode($jsondata,true);
            $output = '<ul class="list-group">';
            foreach($json['datas'] as $data){
              $output .= '<li class="list-group-item">';
              $output .= '<h3 class="text-center">'.$data['name'].'</h3>';
              $output .= '<p>'.$data['bio'].'</p>';
              $output .= '</li>';
            }
            $output .='</ul>';
            echo $output;
            //echo $json['data'][3]['name'];
          ?>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
  
  <div class="footer">
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/viewportchecker.js"></script><!-- viewport checker for triggerAnimation.js -->
  <script src="js/animationTrigger.js"></script><!-- controls/triggers the animation.css on scroll -->
  <script src="js/respond.min.js"></script><!-- fix ie 6, 7 and 8 -->
</body>

</html>