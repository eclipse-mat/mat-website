<?php
	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Phoenix";

	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	
	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
<STYLE TYPE="text/css">
  .sideitem { border-width: 1px 1px; }
  body { font-size: small; }
  #midcolumn { margin-top: 5px; }
</STYLE>

<div id="branding">
<center>
  <h1 style="font-size:+2">Memory Analyzer (MAT)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
</center>
</div>

EOBRANDING;

	$Menu->setProjectBranding($branding);
	
	$Nav->addCustomNav( "About", "/projects/project_summary.php?projectid=technology.mat", "", 1);
	$Nav->addNavSeparator("Memory Analyzer", "/mat/index.php");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Screenshots", "/mat/about/screenshots.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Wiki", "http://wiki.eclipse.org/index.php/MemoryAnalyzer", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Newsgroup", "/newsportal/thread.php?group=eclipse.technology.memory-analyzer", "_self", 1);

//	$Nav->addNavSeparator("Getting Started", "/mat/start", "_self", 1);
//	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;How to Get a Heap Dump", "/mat/start", 	"_self", 1);

?>


