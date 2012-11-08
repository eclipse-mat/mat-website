<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Memory Analyzer Download Page
	#****************************************************************************

	$pageTitle 		= "Eclipse Memory Analyzer Open Source Project";
	$pageKeywords	= "Memory Analyzer Download";
	$pageAuthor		= "Andreas Buchen";

	$html = <<<EOHTML

	<div id="midcolumn">
		<p>The <strong>stand-alone</strong> Memory Analyzer is based on Eclipse RCP. It is useful if you do not want to install
		a full-fledged IDE on the system you are running the heap analysis.</p>
		
		<p>To install the Memory Analyzer <strong>into an Eclipse IDE</strong> use the Update Manager and the update site URL provided below.
		The <em>Memory Analyzer (Chart)</em> feature is optional. The chart feature requires the
		<a href="/birt">BIRT Chart Engine</a> (Version 2.2.3 or greater, available via Update Manager).</p>
		
		<p>The minimum Java version required to run Memory Analyzer is 1.5</p>
		
		<div class="homeitem3col">
			<h3><a name="1_2_1"></a>Memory Analyzer 1.2.1 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.2.1.20121105 |  <b>Date</b>: 8 November 2012  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.2/update-site/">http://download.eclipse.org/mat/1.2/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/MemoryAnalyzer-1.2.1.201211051250.zip">MemoryAnalyzer-1.2.1.201211051250.zip</a>
                            (12 MB)
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-win32.win32.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-win32.win32.x86.zip">Windows (x86) (46 MB)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-win32.win32.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-win32.win32.x86_64.zip">Windows (x86_64) (46 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-macosx.carbon.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (45 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-macosx.cocoa.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (45 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-macosx.cocoa.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (45 MB)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-linux.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-linux.gtk.x86.zip">Linux (x86/GTK 2) (46 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-linux.gtk.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (46 MB)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-linux.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (43 MB)</a><br/>
		                    <a title="Solaris 8 (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-solaris.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (45 MB)</a><br/>
		                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-solaris.gtk.sparc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (45 MB)</a><br/>
		                    <a title="HP-UX (IA64_32/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-hpux.gtk.ia64_32.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-hpux.gtk.ia64_32.zip">HP-UX (IA64_32/GTK) (43 MB)</a><br/>
		                    <a title="AIX (PPC/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-aix.gtk.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-aix.gtk.ppc.zip">AIX (PPC/GTK) (44 MB)</a><br/>
		                    <a title="AIX (PPC64/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-aix.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.1/rcp/MemoryAnalyzer-1.2.1.20121105-aix.gtk.ppc64.zip">AIX (PPC64/GTK) (44 MB)</a><br/>
		                </li>
                    </ul>
                </li>  
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3><a name="1_2_0"></a>Memory Analyzer 1.2.0 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.2.0.20120530 |  <b>Date</b>: 27 June 2012  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.2.0/update-site/">http://download.eclipse.org/mat/1.2.0/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/MemoryAnalyzer-1.2.0.201205300858.zip">MemoryAnalyzer-1.2.0.201205300858.zip</a>
                            (12 MB)
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-win32.win32.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-win32.win32.x86.zip">Windows (x86) (46 MB)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-win32.win32.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-win32.win32.x86_64.zip">Windows (x86_64) (46 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-macosx.carbon.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (45 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-macosx.cocoa.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (45 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-macosx.cocoa.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (45 MB)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-linux.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-linux.gtk.x86.zip">Linux (x86/GTK 2) (46 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-linux.gtk.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (46 MB)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-linux.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (43 MB)</a><br/>
		                    <a title="Solaris 8 (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-solaris.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (45 MB)</a><br/>
		                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-solaris.gtk.sparc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (45 MB)</a><br/>
		                    <a title="HP-UX (IA64_32/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-hpux.gtk.ia64_32.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-hpux.gtk.ia64_32.zip">HP-UX (IA64_32/GTK) (43 MB)</a><br/>
		                    <a title="AIX (PPC/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-aix.gtk.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-aix.gtk.ppc.zip">AIX (PPC/GTK) (44 MB)</a><br/>
		                    <a title="AIX (PPC64/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-aix.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.2.0/rcp/MemoryAnalyzer-1.2.0.20120530-aix.gtk.ppc64.zip">AIX (PPC64/GTK) (44 MB)</a><br/>
		                </li>
                    </ul>
                </li>  
			</ul>
		</div>

		<div class="homeitem3col">
			<h3><a name="otherReleases"></a>Other Releases</h3>
            <ul>
                <li>
                    <a href="previousReleases.php">Previous Releases</a>
                </li>
                <li>
                    <a href="snapshotBuilds.php">Snapshot Builds</a>
                </li>
            </ul>
		</div>

	</div>

	<div id="rightcolumn">
        $sidebar
	</div>

EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
