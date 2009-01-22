<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App 	= new App();
$Nav	= new Nav();
$Menu 	= new Menu();
include($App->getProjectCommon());

	#*****************************************************************************
	# Memory Analyzer Home Page
	#****************************************************************************

	$pageTitle 		= "Eclipse Memory Analyzer Open Source Project";
	$pageKeywords	= "Heap Dump, HPROF, DTFJ, Retained Size, Garbage Collection Root, Leak Suspect";
	$pageAuthor		= "Andreas Buchen";

	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>Memory Analyzer (MAT)</h1>
	
		<table>
		<tr>
		<td><p>The Eclipse Memory Analyzer is a fast and feature-rich <strong>Java heap analyzer</strong> that helps you
		find memory leaks and reduce memory consumption.</p>

		<p>The Memory Analyzer was developed to analyze productive heap dumps with hundreds of millions
		of objects. Once the heap dump is parsed, you can re-open it instantly, immediately get the
		retained size of single objects and quickly approximate the retained size of a set of objects.
		The reference chain to the Garbage Collection Roots then details why the object is not garbage collected.</p>

		<p>Using these features, a report automatically extracts leak suspects. It includes details about
		the objects accumulated, the path to the GC Roots, plus general information like system properties.</p>
		</td>
		<td align="right"><img src="/mat/home/mat_thumb.png" alt="Memory Analyzer Screenshot">
		</td>
		</table>

		<div class = "homeitem3col">
			<h3>Links</h3>
			<ul>
				<li><a href="/mat/downloads.php">Download</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/MemoryAnalyzer">Getting Started</a></li>
				<li><a href="http://dev.eclipse.org/blogs/memoryanalyzer">Blog</a></li>
				<li><a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.memory-analyzer">Forum</a></li>
			</ul>
		</div>

		<div class = "homeitem3col">
			<h3>News</h3>
			<ul class="midlist">
				<li><a href="http://www.ibm.com/developerworks/java/jdk/tools/mat.html">Memory Analyzer now supports IBM System Dumps</a>
 				<blockquote></blockquote>
 				IBM has published a plug-in on Alphaworks that enables the Memory Analyzer to read DTFJ formatted system dumps.
 				Supported are <strong>IBM JDK 1.4.2 SR12, 5.0 SR8a and 6.0 SR2</strong> and greater.
				</li>				
			</ul>		
			<ul class="midlist">
				<li><a href="/mat/downloads.php#0_7_0">Memory Analyzer 0.7 Released</a>
 				<blockquote></blockquote>
 				On December 10th, MAT completed the review of release 0.7.
 				(<a href="/project-slides/MAT_0.7_ReleaseReview.pdf">slides</a> |
 				<a href="/mat/downloads.php#0_7_0">download</a>)
				</li>				
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
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
