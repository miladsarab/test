

<form action="crul.php" method="post">


    <center>
    <br>
     <input name="link" type="text"  /> <h2>لینک  را وارد کنید</h2>
    <br/>
    <br/>
    
    <input type="submit" value="ارسال" />
    </center>
</form>

<?php
if(isset($_POST['link']) ){

    $link = $_POST['link'];
      
function getPage($url) {
$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_REFERER, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);
return $result;
$output_filename = "one.txt";
    $fp = fopen($output_filename, 'w');
    fwrite($fp, $result);
    fclose($fp);

}
	//now we use Curl to get a page:
echo getPage($link); 
}



?>