<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Memory Analyzer Download Page
	#****************************************************************************

	$pageTitle 		= "Eclipse Memory Analyzer Open Source Project";
	$pageKeywords	= "Memory Analyzer Download Snapshots";
	$pageAuthor		= "Krum Tsvetkov";

	$html = <<<EOHTML

	<div id="midcolumn">
		<p>This page points to snapshots / preview versions of Memory Analyzer which haven't been released.</p>

		<div class="homeitem3col">
			<h3><a name="1_1_0"></a>Memory Analyzer 1.1 Snapshots</h3>
            <ul>
               <li>
                    <b>Version</b>: 1.1.0.20110508 (Indigo RC1) |  <b>Date</b>: 18 May 2011  |  <b>Type</b>: Milestone Build
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.1/snapshots/20110518/update-site/">http://download.eclipse.org/mat/1.1/snapshots/20110518/update-site/</a>
                           (12,0 MB)
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/MemoryAnalyzer-1.1.0.201105181232.zip">MemoryAnalyzer-1.1.0.201105181232.zip</a>
                            (11,8 MB)
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP</b><br/>
		
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-win32.win32.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-win32.win32.x86.zip">Windows (x86) (42,1 MB)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-win32.win32.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-win32.win32.x86_64.zip">Windows (x86_64) (42,1 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-macosx.carbon.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (41,8 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-macosx.cocoa.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (31,8 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-macosx.cocoa.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (41,9 MB)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-linux.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-linux.gtk.x86.zip">Linux (x86/GTK 2) (42,1 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-linux.gtk.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (42,2 MB)</a><br/>
		                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-linux.gtk.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (42,1 MB)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-linux.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (39,9 MB)</a><br/>
		                    <a title="Solaris 8 (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-solaris.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (40,0 MB)</a><br/>
		                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-solaris.gtk.sparc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (41,7 MB)</a><br/>
		                    <a title="HP-UX (IA64_32/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-hpux.motif.ia64_32.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-hpux.motif.ia64_32.zip">HP-UX (IA64_32/Motif) (41,6 MB)</a><br/>
		                    <a title="AIX (PPC/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-aix.motif.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20110518/rcp/MemoryAnalyzer-1.1.0.20110518-aix.motif.ppc.zip">AIX (PPC/Motif) (41,7 MB)</a><br/>
		                </li>
                        
                    </ul>
                </li>
                <li>
                    <b>Version</b>: 1.0.100.20101215 (Indigo M4) |  <b>Date</b>: 15 December 2010  |  <b>Type</b>: Milestone Build
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.1/snapshots/20101215/update-site/">http://download.eclipse.org/mat/1.1/snapshots/20101215/update-site/</a>
                           (12,0 MB)
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20101215/MemoryAnalyzer-1.0.100.201012150941.zip">MemoryAnalyzer-1.0.100.201012150941.zip</a>
                            (11,8 MB)
                        </li>
                    </ul>
                </li>
                <li>
                    <b>Version</b>: 1.0.100.20100929 |  <b>Date</b>: 29 September 2010  |  <b>Type</b>: Nightly Build
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.1/snapshots/20100929/update-site/">http://download.eclipse.org/mat/1.1/snapshots/20100929/update-site/</a>
                           (12,0 MB)
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1/snapshots/20100929/org.eclipse.mat-1.0.100.20100929-site.zip">org.eclipse.mat-1.0.100.20100929-site.zip</a>
                            (11,8 MB)
                        </li>
                    </ul>
                </li>
                <li>
                    <a name="athena"><b>Latest Stable Development Build from Athena CBI</b></a>
                    <ul>
                        <li>
                            <b>Build results</b>: <a href="https://hudson.eclipse.org/hudson/view/Athena%20CBI%20%28SVN%29/job/cbi-mat-nightly/lastStableBuild/">https://hudson.eclipse.org/hudson/view/Athena%20CBI%20%28SVN%29/job/cbi-mat-nightly/lastStableBuild/</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a name="tycho"><b>Latest Stable Development Build from Tycho/Maven</b></a>
                    <ul>
                        <li>
                            <b>Build results</b>: <a href="https://hudson.eclipse.org/hudson/view/Tycho%20+%20Maven/job/tycho-mat-nightly/ws/trunk/product/target/">https://hudson.eclipse.org/hudson/view/Tycho%20+%20Maven/job/tycho-mat-nightly/ws/trunk/product/target/</a>
                        </li>
                    </ul>
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
