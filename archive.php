<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Memory Analyzer Archive Download Page
	#****************************************************************************

	$pageTitle 		= "Eclipse Memory Analyzer Archived Downloads";
	$pageKeywords	= "Memory Analyzer Download";
	$pageAuthor		= "Andreas Buchen";

	$html = <<<EOHTML

	<div id="midcolumn">
		<p>The <strong>stand-alone</strong> Memory Analyzer is based on Eclipse RCP. It is useful if you do not want to install
		a full-fledged IDE on the system you are running the heap analysis.</p>
		
		<p>Install the Memory Analyzer <strong>into Ganymede</strong> using the Update Manager.
		The <em>Memory Analyzer (Chart)</em> feature is optional. The chart feature requires the
		<a href="/birt">BIRT Chart Engine</a> (Version 2.2.2 or greater, available via Update Manager).</p>

		<div class="homeitem3col">
			<h3 id="0_7_0">Stable Version 0.7 (Incubation)</h3>
            <ul>
                <li>
                    <b>Version</b>: 0.7.0.20081210  |  <b>Date</b>: 10 December 2008  |  <b>Type</b>: Released
                </li>
                <li>
                    <b>Update Site</b>: <a href="https://archive.eclipse.org/technology/mat/0.7/update-site/">https://archive.eclipse.org/mat/0.7/update-site/</a>
                    (5,3 MB)</li>
                <li>
                    <b>Stand-alone Eclipse RCP</b><br/>

                    <a title="Windows RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-win32.win32.x86.zip">Windows (x86) (36,6 MB)</a><br/>
                    <a title="Windows (x86_64) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-win32.win32.x86_64.zip">Windows (x86_64) (36,7 MB)</a><br/>
                    <a title="Mac OSX (Mac/Carbon) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-macosx.carbon.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (36,3 MB)</a><br/>
                    <a title="Linux (x86/GTK 2) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-linux.gtk.x86.zip">Linux (x86/GTK 2) (36,6 MB)</a><br/>
                    <a title="Linux (x86_64/GTK 2) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (36,7 MB)</a><br/>
                    <a title="Linux (PPC/GTK 2) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (36,6 MB)</a><br/>
                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (36,3 MB)</a><br/>
                    <a title="HP-UX (IA64_32/Motif) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-hpux.motif.ia64_32.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-hpux.motif.ia64_32.zip">HP-UX (IA64_32/Motif) (36,2 MB)</a><br/>
                    <a title="AIX (PPC/Motif) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-aix.motif.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20081210-aix.motif.ppc.zip">AIX (PPC/Motif) (36,2 MB)</a><br/>
                </li>
            </ul>
		</div>


	</div>

EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
