<?PHP
//δ���Ƕ�ֵ�İ汾
	header("Content-Type: text/html; charset=utf8");

   if(!isset($_POST["submit"])){
		exit("execution error");
	}

	include('connect.php');
	$text = $_POST['text'];

	if($text){
		echo "�ɹ�����";
		$sql = "select url from particle where name = '".$text."'";
		$result = mysql_query($sql);
		$rows = mysql_num_rows($result);
		if($rows){
			$url = mysql_result($sql);
			echo "ת���Լ�������";
			//header("refresh:0; url=$url");
			exit;
		}else{
			echo "ת��ֲ��־����";
			//header("refresh:1; url=http:www.cfh.ac.cn/Spdb/spsearch.aspx?aname=+$text+&AspxAutoDetectCookieSupport=1");
			exit;
		}
	}else{
		echo "����";}

?>