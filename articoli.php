<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width">
    <title>Figure Politiche</title>
    <script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
    <script src="/js/sliding.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">

    <script src="./DisplayDirectoryContents/.sorttable.js"></script>
    <link rel="shortcut icon" href="./DisplayDirectoryContents/.favicon.ico">

    <script language="JavaScript">
	var frmvalidator  = new Validator("contactform");
	frmvalidator.addValidation("name","req","Please provide your name");
	frmvalidator.addValidation("email","req","Please provide your email");
	frmvalidator.addValidation("email","email",
	  "Please enter a valid email address");
	</script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
    /* Slides */
    #slide1 {
        background-image: url("images/statue.jpg");
        margin: 0;
        padding: 0.1px;
        background-size: cover;
        background-repeat: repeat-y !important;
    }

    #slide6 {
        background-color: #FFFFFF;
        padding: 50px 0;
        background-size: cover;
    }

    .panel-default--transparent {
        color: #ffffff;
        background-color: rgba(46, 51, 56, 0.8) !important;
        border: 0;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        /* set border roundness */
        border-radius: 15px;
        -moz-border-radius: 15px;
        -webkit-border-radius: 15px;
    }

    .panel-title--transparent
     {
        color: #ffffff;
        background-color: rgba(46, 51, 56, 0.8) !important;
        border: 0;
        
        align:center;
        
        /* set border roundness */
        border-radius: 15px;
        -moz-border-radius: 15px;
        -webkit-border-radius: 15px;

    }

    #slideHeaderCustom {
        font-weight: lighter;
        font-size: 42px;
				width: 60%;
        text-align: center;
        font-weight: bold;
        margin: 0;
        display: block;
        padding-top: 20px;
        padding-bottom: 30px;
				text-shadow: 0px 2px 6px #000;

    }

    .titleContentCustom {
        position: relative;
        right: 50;
        font-size: 18px;
        width: 40%;
    }

    .titleSlide1
     {
         font-weight: bold;
         line-height: normal;
         letter-spacing: 0.03em;
         text-align: center;
         
				 text-shadow: 0px 2px 6px #000;
				 float:center;

				 font-size: 2em;
     }

		 @media (min-width: 43.75em) {
			 .titleSlide1 {
				 font-size: 2.5em
			 }
		 }

		 @media (min-width: 56.25em) {
			 .titleSlide1 {
				 font-size: 3em;
			 }
		 }

    .subtitleSlide1
    {
        font-weight: italic;
        font-size: calc( 14px + (20 - 14) * ( (100vw - 400px) / ( 800 - 400) ));
        line-height: 1em;
        letter-spacing: 0.03em;
        text-align: center;
				
				text-shadow: 0px 2px 6px #000;
				width: 100%;
				float: right;
    }

    .articleTitle
    {
        font-weight: italic;
        font-size: calc( 8px + (20 - 14) * ( (100vw - 400px) / ( 800 - 400) ));
        line-height: 1em;
        letter-spacing: 0.03em;
        text-align: center;
                
                text-shadow: 0px 2px 6px #000;
                width: 100%;
                float: right;
    }

    .textList
    {
    	 font-size: calc( 18px + (20 - 14) * ( (100vw - 400px) / ( 800 - 400) ));
    }

    .Aligner {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .Aligner-item {
      max-width: 50%;
    }

    #documents {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
    table-layout: fixed;
    }  

    #documents td, #documents th {
    border: 1px solid #ddd;
    padding: 8px;
    word-wrap:break-word;
    }

    #documents tr:nth-child(odd){background-color: #f2f2f2;}
    #documents tr:nth-child(even){background-color: #ebfafa;}

    #documents tr:hover {background-color: #ddd;}


    #documents th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }

    table.center {
        margin-left:auto; 
        margin-right:auto;
    }

    #nav
  {
    /* width: 100%; */
    float: right;
    margin-right: 25px;
    /* text-align: right; */
    /* margin-top: 20px; */
  }

  #nav ul{
    list-style: none;
    display: block;
    margin: 0 auto;
    list-style: none;
  }

  #nav li{
    margin-top: 9px;
    float: left;
    padding-left: 21px;
  }

  #nav li a {
    color: #fff;
    opacity:0.6;
    font-size: 12px;
    text-decoration: none;
    font-weight: bold;
    text-shadow: 0px 1px 20px rgb(105, 104, 104);
  }

    @media (min-width: 43.75em) {
      #nav li a  {
        font-size: 16px;
      }
    }

  #nav li a.active { color: #0845A7; opacity:1; font-weight: bold;}
  #nav li a:hover { color: #66ccff; opacity:1; font-weight: bold;}

  #header
  {
    width: 100%;
    height: 80px;
    position: absolute;
    margin-top: 25px;
  }
    @media (min-width: 43.75em) {
      #header  {
        margin-top: 50px;
      }
    }
	
</style>

	<body>
		
    <div id="slide1">


      <header id="header">
  		    <div class="content">
  		        <nav id="nav">
  		            <ul>
  		                <li><a href="home.html" title="Next Section" style="color:black">Home</a></li>
  		            </ul>
  		        </nav>
  		    </div>
  		</header>

		
	    <div style="padding-top: 100px">
	        <h1 class="panel-default--transparent">
	            <h1 class="titleSlide1">I nostri Articoli</h1>
	            <p class="subtitleSlide1">gli articoli dei nostri editori</p>
	        </h1>
	    </div>

	    <div style="padding: 100px 0px 50px 0px">
              
              <table table id="documents" class="center" style="width:1000px; margin:0 auto;">
                  <colgroup>
                    <col style="width:5%">
                    <col style="width:56%">
                    <col style="width:20%">
                    <col style="width:10%">
                  </colgroup>
                  <thead>
                  <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Author</th>
                      <th>Date</th>
                  </tr>
                  </thead>
                  <tbody><?php

                  // Checks to see if veiwing hidden files is enabled
                  if($_SERVER['QUERY_STRING']=="hidden")
                  {$hide="";
                   $ahref="./";
                   $atext="Hide";}
                  else
                  {$hide=".";
                   $ahref="./?hidden";
                   $atext="Show";}

                   // Opens directory
                   $myDirectory=opendir("./articoli");

                  // Gets each entry
                  while($entryName=readdir($myDirectory)) {
                     $dirArray[]=$entryName;
                  }

                  // Closes directory
                  closedir($myDirectory);

                  // Counts elements in array
                  $indexCount=count($dirArray);

                  // Sorts files
                  sort($dirArray);

                  // Loops through the array of files
                  for($index=0; $index < $indexCount; $index++) {

                  // Decides if hidden files should be displayed, based on query above.
                      if(substr("$dirArray[$index]", 0, 1)!=$hide) {

                  // Resets Variables
                      $favicon="";
                      $class="file";

                  // Gets File Names
                      $name=$dirArray[$index];
                      $namehref=$dirArray[$index];

                  // Get Info
                      if (strpos($name, '-') !== false){
                          $data = explode("-",$name);
                          $title = $data[0];
                          $author = $data[1];

                          if(strpos($data[2], '.') !== false){
                              $lastPart = explode(".",$data[2]);
                              $slash = "/";
                              $dataPublished = $lastPart[0] . $slash . $lastPart[1] . $slash . $lastPart[2];

                          }
                      }

                      $indexArticle = $index-1;

                  // Separates directories, and performs operations on those directories
                      if(is_dir($dirArray[$index]))
                      {
                              $extn="&lt;Directory&gt;";
                              $size="&lt;Directory&gt;";
                              $sizekey="0";
                              $class="dir";

                          // Gets favicon.ico, and displays it, only if it exists.
                              if(file_exists("$namehref/favicon.ico"))
                                  {
                                      $favicon=" style='background-image:url($namehref/favicon.ico);'";
                                      $extn="&lt;Website&gt;";
                                  }

                          // Cleans up . and .. directories
                              if($name=="."){$name=". (Current Directory)"; $extn="&lt;System Dir&gt;"; $favicon=" style='background-image:url($namehref/.favicon.ico);'";}
                              if($name==".."){$name=".. (Parent Directory)"; $extn="&lt;System Dir&gt;";}
                      }

                  // File-only operations
                      else{
                          // Gets file extension
                          $extn=pathinfo($dirArray[$index], PATHINFO_EXTENSION);

                          // Prettifies file type
                          switch ($extn){
                              case "png": $extn="PNG Image"; break;
                              case "jpg": $extn="JPEG Image"; break;
                              case "jpeg": $extn="JPEG Image"; break;
                              case "svg": $extn="SVG Image"; break;
                              case "gif": $extn="GIF Image"; break;
                              case "ico": $extn="Windows Icon"; break;

                              case "txt": $extn="Text File"; break;
                              case "log": $extn="Log File"; break;
                              case "htm": $extn="HTML File"; break;
                              case "html": $extn="HTML File"; break;
                              case "xhtml": $extn="HTML File"; break;
                              case "shtml": $extn="HTML File"; break;
                              case "php": $extn="PHP Script"; break;
                              case "js": $extn="Javascript File"; break;

                              case "pdf": $extn="PDF Document"; break;
                              case "xls": $extn="Spreadsheet"; break;
                              case "xlsx": $extn="Spreadsheet"; break;
                              case "doc": $extn="Microsoft Word Document"; break;
                              case "docx": $extn="Microsoft Word Document"; break;

                              case "zip": $extn="ZIP Archive"; break;
                              case "htaccess": $extn="Apache Config File"; break;
                              case "exe": $extn="Windows Executable"; break;

                              default: if($extn!=""){$extn=strtoupper($extn)." File";} else{$extn="Unknown";} break;
                          }
                      }

                  // Output
                  if(strpos($name, '.css') == false){
                          if(strpos($name, '-') !== false){
                      echo("
                      <tr class='$class'>
                          <td>$indexArticle</td>
                          <td ><a href='./articoli/$namehref'$favicon>$title</a></td>
                          <td>$author</td>
                          <td>$dataPublished</td>
                      </tr>");
                     }
                     else{
                      echo("
                      <tr class='$class'>
                          <td>$index</td>
                          <td ><a href='./articoli/$namehref'$favicon>$name</a></td>
                      </tr>");
                     }
                  }                    
                  
                  }
                  }
                  ?>

                      </tbody>
            </table>
      </div>
    </div>

      <!--
      <div id="copyright" style="text-align: center; position: absolute; bottom: 30px; width: 100%;">     © 2017 by PolitxTime
      </div>
      -->

	</body>
</html>