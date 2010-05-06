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
			<h3>Memory Analyzer Moves from Technology to Tools</h3>
			<p>
			Memory Analyzer had recently a successful graduation review and is now out of
			the incubation phase. Together with graduation the project moves from the
			Technology top-level project into the Tools top-level project. 
			</p>
			<p><b>IMPORTANT:</b> As part of the move the project is renamed from technology.mat
			to tools.mat, the SVN repository was changed, etc... The team is currently 
			taking care to update all possible web pages with the correct links and data.
			Please have understanding that some of the web pages can temporarily contain
			outdated data, or some of the links can be broken. If you notice a problem 
			you may tell us about it using the forum. 
			</p>

		</div>

		<div class = "homeitem3col">
			<h3>Links</h3>
			<ul>
				<li><a href="/mat/downloads.php">Download</a> the latest version as RCP application.</li>
				<li>Read our <a href="http://dev.eclipse.org/blogs/memoryanalyzer">Blog</a> for background information.</li>
				<li>Post your questions to the <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=62&">Forum</a>.</li>
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
				<li><a href="http://wiki.eclipse.org/index.php/MemoryAnalyzer#System_Dumps_and_Heap_Dumps_from_IBM_Virtual_Machines">Memory Analyzer now supports IBM System Dumps and Portable Heap Dumps</a>
 				<blockquote></blockquote>
 				Memory Analyzer 0.8 includes a Diagnostic Tool Framework for Java (DTFJ) adapter, which together with a DTFJ
 				feature from IBM, enables the Memory Analyzer to read DTFJ formatted system dumps and Portable Heap Dumps.
 				Supported are dumps from <strong>IBM JDK 1.4.2 SR12, 5.0 SR8a and 6.0 SR2</strong> and greater.
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
