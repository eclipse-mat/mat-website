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
			<h3><a name="nightly"></a>Memory Analyzer Latest Stable Build</h3>
            <ul>
               <li>
                    <b>Version</b>: Latest Development Build |  <b>Type</b>: Development/Nightly Build
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/snapshots/update-site/">http://download.eclipse.org/mat/snapshots/update-site/</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP</b><br/>
		
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-win32.win32.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-win32.win32.x86.zip">Windows (x86) (45.9 MB)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-win32.win32.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-win32.win32.x86_64.zip">Windows (x86_64) (45.8 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-macosx.carbon.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (45.4 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-macosx.cocoa.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (45.8 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-macosx.cocoa.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (45.5 MB)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.x86.zip">Linux (x86/GTK 2) (45.8 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (46.0 MB)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (43.5 MB)</a><br/>
		                    <a title="Solaris 8 (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-solaris.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (45.4 MB)</a><br/>
		                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-solaris.gtk.sparc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (45.5 MB)</a><br/>
		                    <a title="HP-UX (IA64_32/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-hpux.gtk.ia64_32.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-hpux.gtk.ia64_32.zip">HP-UX (IA64_32/GTK 2) (43.5 MB)</a><br/>
		                    <a title="AIX (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-aix.gtk.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-aix.gtk.ppc.zip">AIX (PPC/GTK 2) (44.1 MB)</a><br/>
		                    <a title="AIX (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-aix.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-aix.gtk.ppc64.zip">AIX (PPC64/GTK 2) (44.1 MB)</a><br/>

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
