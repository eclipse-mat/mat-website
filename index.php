<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Memory Analyzer Home Page
	#****************************************************************************
	
	$pageTitle 		= "Eclipse Memory Analyzer Open Source Project";
	$pageKeywords	= "Heap Dump, HPROF, DTFJ, Retained Size, Garbage Collection Root, Leak Suspect";
	$pageAuthor		= "Andreas Buchen";
	
	$html = <<<EOHTML

	<div id="midcolumn">
		<p>The Eclipse Memory Analyzer is a fast and feature-rich <strong>heap analyzer</strong> that helps you
		find big chunks of memory and identify who is keeping these objects alive.</p>

		<p>The Memory Analyzer was developed to analyze productive heap dumps with hundreds of millions
		of objects. Once the heap dump is parsed, you can re-open it instantly, immediately get the
		retained size of single objects and quickly approximate the retained size of a set of objects.
		The reference chain to the Garbage Collection Roots then details why the object is not garbage collected.</p>
		
		<p>Using these features, a report automatically extracts leak suspects. It includes details about
		the objects accumulated, the path to the GC Roots, plus general information like system properties.</p>
		
		<h2>Download</h2>
		<p>This project is brand new. Please stay tuned as we prepare the first code drop in the 
		very near future. The initial code base will be contributed by SAP. Check out the
		<a href="/mat/about/screenshots.php">screenshots</a> to get a first impression.</p>
		
		<h2>Which heap dumps are supported?</h2>
		The Memory Analyzer supports HPROF binary heap dumps, a de-facto standard of Sun supported also by other vendors:
		<strong>Sun</strong>, <strong>SAP</strong> and <strong>HP</strong> JDK/JVM
		from version <strong>1.4.2_12</strong> and <strong>5.0_7</strong> and <strong>6.0</strong> upwards.
		
		<p>The Wiki details <a href="http://wiki.eclipse.org/index.php/MemoryAnalyzer">how to get an heap dump</a>.</p>
	</div>
	
	<div id="rightcolumn">
 		<div class="sideitem">
			<h6>Incubation</h6>
			<div align="center"><a href="/projects/what-is-incubation.php"><img align="center"
			src="/images/egg-incubation.png" border="0" alt="Incubation" /></a></div>
		</div>
 		<div class="sideitem">
			<h6>EclipseCon 2008</h6>
			<div align="left" style="padding:5px">Want to see the Memory Analyzer live and in action? Visit our EclipseCon session
			<a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=321">Memory Anaylsis Simplified: Automated Heap Dump Anaylsis</a>.</div>
		</div>
		<div class="sideitem">
			<h6>Newsgroup</h6>
			<div align="left" style="padding:5px">Got questions? Need advice? Miss a feature?
			<a href="news://news.eclipse.org/eclipse.technology.memory-analyzer">Newsgroup</a>
			<a href="http://dev.eclipse.org/newslists/news.eclipse.technology.memory-analyzer/maillist.html">[archive]</a></div>
		</div>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
