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
		</table>

		<div class = "homeitem3col">
			<h3>Links</h3>
			<ul>
				<li><a href="/mat/downloads.php">Download</a> the latest version as RCP application.</li>
				<li>Read our <a href="http://dev.eclipse.org/blogs/memoryanalyzer">Blog</a> for background information.</li>
				<li>Post your questions to the <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.memory-analyzer">Forum</a>.</li>
			</ul>
		</div>

		<div class = "homeitem3col">
			<h3>News</h3>
			<ul class="midlist">
				<li><a href="/mat/downloads.php#0_8_0">Memory Analyzer 0.8 part of Galileo release</a>
 				<blockquote></blockquote>
 				As part of the Galileo Simultaneous release, Memory Analyzer 0.8 includes various new features. (<a href="/mat/0.8/noteworthy.html">New and Noteworthy</a> | <a href="/mat/downloads.php#0_8_0">download</a>)
				</li>				
			</ul>
			<ul class="midlist">
				<li><a href="http://java.sun.com/javaone">Memory Analyzer at JavaOne 2009</a>
 				<blockquote></blockquote>
 				Krum Tsvetkov and Andrew Johnson will give a technical session at this year's JavaOne conference.
 				The session is <a href="http://www28.cplan.com/cc230/session_details.jsp?isid=304118&ilocation_id=230-1&ilanguage=english">TS-4118 Practical Lessons in Memory Analysis</a>
 				and will take place on Wednesday, June 3, 13:30 - 14:30.   
 				<blockquote></blockquote>
 				Both speakers will also be available at the Eclipse booth on Thursday, June 4, 12:00 - 14:00. 
 				If you have any questions or feedback, you can talk to them at the booth.
				</li>				
			</ul>
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

	<div id="rightcolumn">
        $sidebar
	</div>
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
