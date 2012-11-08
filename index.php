<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
if (is_file($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php")) 
{
	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
}
$App = new App(); $Nav = new Nav(); $Menu = new Menu(); 
if (class_exists("ProjectInfo"))
{
	$projectInfo = new ProjectInfo("technology.mat");
	$projectInfo->generate_common_nav( $Nav );
}		
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
		<td valign="top"><p>The Eclipse Memory Analyzer is a fast and feature-rich <b>Java heap analyzer</b> that helps you
		find memory leaks and reduce memory consumption.</p>

		<p>Use the Memory Analyzer to analyze productive heap dumps with hundreds of millions
		of objects, quickly calculate the retained sizes of objects, see who is preventing the Garbage
		Collector from collecting objects, run a report to automatically extract leak suspects.</p>
		</td>
		<td align="right" valign="top"><img src="/mat/home/mat_thumb.png" alt="Memory Analyzer Screenshot" width="250" height="282">
		</td>
		</tr>
		</table>

		<div class = "homeitem3col">
			<h3>Links</h3>
			<ul>
				<li><a href="/mat/downloads.php">Download</a> the latest version as RCP application.</li>
				<li>Read our <a href="http://dev.eclipse.org/blogs/memoryanalyzer">Blog</a> for background information.</li>
				<li>Post your questions to the <a href="http://www.eclipse.org/forums/eclipse.memory-analyzer">Forum</a>.</li>
			</ul>
		</div>

		<div class = "homeitem3col">
			<h3>News</h3>
			<ul class="midlist">
				<li>8 November 2012, <a href="/mat/downloads.php">Memory Analyzer Released Version 1.2.1</a>
 				<blockquote></blockquote>
 				Memory Analyzer 1.2.1 Release is now available for <a href="/mat/downloads.php">download</a>. This version is
 				a service release for Memory Analyzer 1.2.0 and contains several bugfixes. Have a look at the <a href="/mat/1.2.1/release_notes.txt">release notes</a> for more details.
				</li>
			</ul>
			<ul class="midlist">
				<li>27 June 2012, <a href="/mat/downloads.php">Memory Analyzer Released Version 1.2.0</a>
 				<blockquote></blockquote>
 				Memory Analyzer 1.2.0 Release is now available for <a href="/mat/downloads.php">download</a>. This version is
 				part of the Juno simultaneous release. Have a look at the <a href="/mat/1.2.0/noteworthy.html">New and Noteworthy</a> document.
				</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Webinars</h3>
			<ul class="midlist">
				<li><a href="http://live.eclipse.org/node/939">Memory Analyzer 1.0 - Not Only New, but Noteworthy</a><blockquote>
				</blockquote>Krum Tsvetkov and Andrew Johnson recorded this Webinar on 08 Sep 2010.
				Listen in to see how to diagnose problems given a heap dump and using the new features in the tool together with the best from the &quot;old&quot; features.</li>
			</ul>
			<ul class="midlist">
				<li><a href="http://live.eclipse.org/node/520">Memory Analyzer Webinar</a><blockquote>
				</blockquote>Krum Tsvetkov and Andreas Buchen recorded this Webinar on 29 May 2008.
				Listen in to get an overview over the most important features.</li>
			</ul>
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
