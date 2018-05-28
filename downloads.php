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
		
		<p>To install the Memory Analyzer <strong>into an Eclipse IDE</strong> use the update site URL provided below.
		The <em>Memory Analyzer (Chart)</em> feature is optional. The chart feature requires the
		<a href="/birt">BIRT Chart Engine</a> (Version 2.3.0 or greater).</p>
		
		<p>The minimum Java version required to run Memory Analyzer is 1.7</p>
		
		<div class="homeitem3col">
			<h3><a name="1_7_0"></a>Memory Analyzer 1.7.0 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.7.0.20170613 |  <b>Date</b>: 28 June 2017  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.7/update-site/">http://download.eclipse.org/mat/1.7/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/MemoryAnalyzer-1.7.0.201706130745.zip">MemoryAnalyzer-1.7.0.201706130745.zip</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		                    
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                            &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-win32.win32.x86.zip">Windows (x86)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-win32.win32.x86_64.zip">Windows (x86_64)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa/x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                               &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa/x86_64)</a><br/>
		                    <a title="Linux (x86/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.x86.zip">Linux (x86/GTK+) (52.3 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                        &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.x86_64.zip">Linux (x86_64/GTK+)</a><br/>
		                    <a title="Linux (PPC/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.ppc.zip">Linux (PPC/GTK+)</a><br/>
		                    <a title="Linux (PPC64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                       &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.ppc64.zip">Linux (PPC64/GTK+)</a><br/>
		                    <a title="Linux (PPC64le/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.ppc64le.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                         &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.ppc64le.zip">Linux (PPC64le/GTK+)</a><br/>
		                    <a title="Linux (s390/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.s390.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                      &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.s390.zip">Linux (s390/GTK+)</a><br/>
		                    <a title="Linux (s390x/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.s390x.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                       &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-linux.gtk.s390x.zip">Linux (s390x/GTK+)</a><br/>
		                    <a title="Solaris (x86/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-solaris.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                       &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-solaris.gtk.x86.zip">Solaris 8 (x86/GTK+)</a><br/>
		                    <a title="Solaris (SPARC/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                         &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK+)</a><br/>
		                    <a title="HP-UX (IA64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-hpux.gtk.ia64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                      &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-hpux.gtk.ia64.zip">HP-UX (IA64/GTK+)</a><br/>
		                    <a title="AIX (PPC/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-aix.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                   &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-aix.gtk.ppc.zip">AIX (PPC/GTK+)</a><br/>
		                    <a title="AIX (PPC64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-aix.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.7/rcp/MemoryAnalyzer-1.7.0.20170613-aix.gtk.ppc64.zip">AIX (PPC64/GTK+)</a><br/>
		                    
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
