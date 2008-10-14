<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Memory Analyzer Home Page
	#****************************************************************************

	$pageTitle 		= "Eclipse Memory Analyzer Open Source Project";
	$pageKeywords	= "Heap Dump, HPROF, DTFJ, Retained Size, Garbage Collection Root, Leak Suspect";
	$pageAuthor		= "Andreas Buchen";

	$html = <<<EOHTML

	<div id="midcolumn">
	<div style="height:340px">
		<a href="/mat/about/screenshots.php"><img
		    align="left" src="/mat/home/mat_thumb.png" border="0" alt="Memory Analyzer Screenshot"
		    style="padding: 10px 20px 30px 10px;"/></a>

		<p>The Eclipse Memory Analyzer is a fast and feature-rich <strong>Java heap analyzer</strong> that helps you
		find memory leaks and reduce memory consumption.</p>

		<p>The Memory Analyzer was developed to analyze productive heap dumps with hundreds of millions
		of objects. Once the heap dump is parsed, you can re-open it instantly, immediately get the
		retained size of single objects and quickly approximate the retained size of a set of objects.
		The reference chain to the Garbage Collection Roots then details why the object is not garbage collected.</p>

		<p>Using these features, a report automatically extracts leak suspects. It includes details about
		the objects accumulated, the path to the GC Roots, plus general information like system properties.</p>

		<ul>
			<li><a href="/mat/downloads.php">Download</a></li>
			<li><a href="http://wiki.eclipse.org/index.php/MemoryAnalyzer">Getting Started</a></li>
			<li><a href="http://dev.eclipse.org/blogs/memoryanalyzer">Blog</a></li>
			<li><a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.memory-analyzer">Forum</a></li>
		</ul>

		<br/>
	</div>
	<div>
		<div class = "homeitem3col">
			<h3>Upcoming Events</h3>
			<ul class="midlist">
				<li><a href="http://www.eclipsecon.org/summiteurope2008/sessions?id=135">Eclipse Summit Europe 2008</a>
				<blockquote><img border="0" src="http://www.eclipsesummit.org/summiteurope2008/image/friends/125x72.gif" 
 				height="72" width="125" alt="Eclipse Summit Europe 2008"/><br/>
 				<strong>Eclipse Memory Analyzer - More Than Just a Heap Walker</strong><br/>
				Elena Nayashkova(SAP), Andrew Johnson(IBM)<br/>
				Thursday, 20 November 2008, 14:25-14:50
				</blockquote></li>				
			</ul>		
		</div>
		<div class="homeitem3col">
			<h3>Webinar</h3>
			<ul class="midlist">
				<li><a href="http://live.eclipse.org/node/520">Memory Analyzer Webinar</a><blockquote>
				</blockquote>Krum Tsvetkov and Andreas Buchen recorded this Webinar on 29 May 2008.
				Listen in to get an overview over the most important features.</li>
			</ul>
		</div>		
	</div>
	</div>

	<div id="rightcolumn">
        $sidebar
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
