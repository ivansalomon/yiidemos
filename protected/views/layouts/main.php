<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Yii demos-Nintriva</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	
	<style>
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
	</style>

	<!--<link rel="stylesheet" href="css/main.css">-->

	<!-- <script src="<?php echo Yii::app()->baseUrl; ?>/js/libs/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
	your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
	improve your experience.</p>
<![endif]-->

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'type' => 'inverse', // null or 'inverse'
	'brand' => 'Yii demos',
	'brandUrl' => array('/site/index'),
	'collapse' => true, // requires bootstrap-responsive.css
	 'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                 array('label'=>'ajaxGii', 'url'=>Yii::app()->createUrl('ajaxtest/')),
                array('label'=>'Giiplus', 'url'=>Yii::app()->createUrl('test/')),
                array('label'=>'Ajax form submit', 'url'=>Yii::app()->createUrl('person/ajax')),
                array('label'=>'Paypal Demo', 'url'=>Yii::app()->createUrl('site/paypalDemo')),
                array('label'=>'YiiBitcoin Demo', 'url'=>Yii::app()->createUrl('site/bitcoin')),
                /*
                array('label'=>'Aspect Ratio w/ Preview Pane ', 'url'=>Yii::app()->createUrl('site/icrop')),
                array('label'=>'Jcrop - API Demo', 'url'=>Yii::app()->createUrl('site/icropapi')),
                */
                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
	        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                array('label' => 'SignUp', 'url' => array('/site/signup'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'AboutUs', 'url' =>'http://nintriva.com'),
              //     array('label'=>'Manage', 'url'=>Yii::app()->createUrl('admin'), 'active'=>false),
               
            ),
        ),
		
	),
)); ?> 
          <!--   <br/><br/><br/><br/>      -->
      <div class="span10 offset2 row">
      <?php echo $content; ?>
      </div>
          <div style="clear:both;"> </div>
        <div  id="footer" style="position:fixed;bottom:0px;">
            Copyright &copy; <?php echo date('Y'); ?> by <a href="http://nintriva.com" target="_blank">Nintriva</a>.<br/>
            All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
        </div>
        <!-- footer -->
<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="<?php //echo Yii::app()->baseUrl; ?>/js/libs/bootstrap.min.js"></script>
<script src="<?php //echo Yii::app()->baseUrl; ?>/js/plugins.js"></script>
<script src="<?php //echo Yii::app()->baseUrl; ?>/js/main.js"></script><script>
	var _gaq = [
		['_setAccount', 'UA-XXXXX-X'],
		['_trackPageview']
	];
	(function (d, t) {
		var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
		g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s)
	}(document, 'script'));
</script>
-->
       
      

</body>
</html>