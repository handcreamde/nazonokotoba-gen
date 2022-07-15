<title>謎の言葉ジェネレーター | MADE BY 2P</title>
<h1>謎の言葉ジェネレーター</h1>
<hr><p>品: <b>
<?php
$da = file_get_contents('https://api.thinaticsystem.com/v1/debobigego');
$da = str_replace('{"generated":"', '', $da);
$da = str_replace('"}', '', $da);
echo $da;
echo "<hr>";
echo '<div class="line-it-button" data-lang="ja" data-type="share-a" data-env="REAL" data-url="'.$da.'" data-color="default" data-size="large" data-count="false" data-ver="3" style="display: none;"></div>
<script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer"></script>';
?>
</b></p>
<hr>
<p><a href="https://thinaticsystem.com/blog/article/12" target="_blank">使わせていただいたAPI</a></p>