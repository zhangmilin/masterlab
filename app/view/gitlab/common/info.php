<?php
$link = '';

if( $_links['type']=='back'){
    $link= 'javascript:history.go(-1);';
}else{
    $link= $_links['link'];
}

$siteName = (new \main\app\classes\SettingsLogic())->showSysTitle();
?>
<!DOCTYPE html>
<html>
<head>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <title><?=$siteName?></title>
  <style>
    body {
      color: #666;
      text-align: center;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      margin: auto;
      font-size: 14px;
    }

    h1 {
      font-size: 36px;
      line-height: 100px;
      font-weight: normal;
      color: #456;
    }

    h2 {
      font-size: 24px;
      color: #666;
      line-height: 1.5em;
    }

    h3 {
      color: #456;
      font-size: 20px;
      font-weight: normal;
      line-height: 28px;
    }

    hr {
      max-width: 800px;
      margin: 18px auto;
      border: 0;
      border-top: 1px solid #EEE;
      border-bottom: 1px solid white;
    }

    img {
      max-width: 40vw;
      display: block;
      margin: 40px auto;
    }

    a {
      line-height: 100px;
      font-weight: normal;
      color: #4A8BEE;
      font-size: 18px;
      text-decoration: none;
    }

    .container {
      margin: auto 20px;
    }
  </style>
</head>

<body>
  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEwIiBoZWlnaHQ9IjIxMCIgdmlld0JveD0iMCAwIDIxMCAyMTAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiAgPHBhdGggZD0iTTEwNS4wNjE0IDIwMy42NTVsMzguNjQtMTE4LjkyMWgtNzcuMjhsMzguNjQgMTE4LjkyMXoiIGZpbGw9IiNlMjQzMjkiLz4KICA8cGF0aCBkPSJNMTA1LjA2MTQgMjAzLjY1NDhsLTM4LjY0LTExOC45MjFoLTU0LjE1M2w5Mi43OTMgMTE4LjkyMXoiIGZpbGw9IiNmYzZkMjYiLz4KICA8cGF0aCBkPSJNMTIuMjY4NSA4NC43MzQxbC0xMS43NDIgMzYuMTM5Yy0xLjA3MSAzLjI5Ni4xMDIgNi45MDcgMi45MDYgOC45NDRsMTAxLjYyOSA3My44MzgtOTIuNzkzLTExOC45MjF6IiBmaWxsPSIjZmNhMzI2Ii8+CiAgPHBhdGggZD0iTTEyLjI2ODUgODQuNzM0Mmg1NC4xNTNsLTIzLjI3My03MS42MjVjLTEuMTk3LTMuNjg2LTYuNDExLTMuNjg1LTcuNjA4IDBsLTIzLjI3MiA3MS42MjV6IiBmaWxsPSIjZTI0MzI5Ii8+CiAgPHBhdGggZD0iTTEwNS4wNjE0IDIwMy42NTQ4bDM4LjY0LTExOC45MjFoNTQuMTUzbC05Mi43OTMgMTE4LjkyMXoiIGZpbGw9IiNmYzZkMjYiLz4KICA8cGF0aCBkPSJNMTk3Ljg1NDQgODQuNzM0MWwxMS43NDIgMzYuMTM5YzEuMDcxIDMuMjk2LS4xMDIgNi45MDctMi45MDYgOC45NDRsLTEwMS42MjkgNzMuODM4IDkyLjc5My0xMTguOTIxeiIgZmlsbD0iI2ZjYTMyNiIvPgogIDxwYXRoIGQ9Ik0xOTcuODU0NCA4NC43MzQyaC01NC4xNTNsMjMuMjczLTcxLjYyNWMxLjE5Ny0zLjY4NiA2LjQxMS0zLjY4NSA3LjYwOCAwbDIzLjI3MiA3MS42MjV6IiBmaWxsPSIjZTI0MzI5Ii8+Cjwvc3ZnPgo="  alt="GitLab Logo" />
  <h1>
      <?=$_title?>
  </h1>
  <div class="container">
    <h3><?=$_content?></h3>
    <hr />
    <p></p>

    <a href="javascript:history.back()" >Go back</a>
    <a href="<?=$link?>"  style="margin-left: 15px"  ><?=$_links['title']?></a>
  </div>
</body>
</html>
