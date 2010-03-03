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
		
		<p>Install the Memory Analyzer <strong>into Ganymede</strong> using the Update Manager.
		The <em>Memory Analyzer (Chart)</em> feature is optional. The chart feature requires the
		<a href="/birt">BIRT Chart Engine</a> (Version 2.2.2 or greater, available via Update Manager).</p>

		<div class="homeitem3col">
			<h3><a name="latest"></a>Latest Version (Incubation)</h3>
            <ul>
                <li>
                    <b>Version</b>: 0.8.0.20100120  |  <b>Date</b>: 20 January 2010  |  <b>Type</b>: Nightly Build
                </li>
                <li>
                    <b>Update Site</b>: <a href="http://download.eclipse.org/technology/mat/latest/update-site/">http://download.eclipse.org/technology/mat/latest/update-site/</a>
                    (8,47 MB)
                </li>
                <li>
                    <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/MemoryAnalyzer-Incubation-0.8.0.201001201617.zip">MemoryAnalyzer-Incubation-0.8.0.201001201617.zip</a>
                    (8,27 MB)
                </li>
                                   
                <li>
                    <b>Stand-alone Eclipse RCP</b><br/>

                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-win32.win32.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-win32.win32.x86.zip">Windows (x86) (39,3 MB)</a><br/>
                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-win32.win32.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-win32.win32.x86_64.zip">Windows (x86_64) (39,3 MB)</a><br/>
                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.carbon.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (38,9 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.cocoa.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (39,0 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.cocoa.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (38,9 MB)</a><br/>
                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.x86.zip">Linux (x86/GTK 2) (39,2 MB)</a><br/>
                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (39,3 MB)</a><br/>
                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (39,3 MB)</a><br/>
                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-solaris.gtk.sparc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (38,9 MB)</a><br/>
                    <a title="HP-UX (IA64_32/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-hpux.motif.ia64_32.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-hpux.motif.ia64_32.zip">HP-UX (IA64_32/Motif) (38,8 MB)</a><br/>
                    <a title="AIX (PPC/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-aix.motif.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-aix.motif.ppc.zip">AIX (PPC/Motif) (38,9 MB)</a><br/>
                </li>
            </ul>
		</div> 
		
		<h3><a name="latest"></a>Latest Stable Development Build (Incubation) from Athena CBI</h3>
            <ul>
                <li>
                    <b>Version</b>: 0.8.0.201003030911 or later  |  <b>Date</b>: 3 March 2010 or later  |  <b>Type</b>: Athena CBI Nightly Build (for developers only)
                </li>
                <li>
                    <b>Build results</b>: <a href="https://build.eclipse.org/hudson/view/Athena%20CBI%20%28SVN%29/job/cbi-mat-nightly/lastStableBuild/">https://build.eclipse.org/hudson/view/Athena%20CBI%20%28SVN%29/job/cbi-mat-nightly/lastStableBuild/</a>
                </li>
            </ul>
		</div>
		
		<div class="homeitem3col">
			<h3><a name="0_8_0"></a>Galileo Release Version 0.8 (Incubation)</h3>
            <ul>
                <li>
                    <b>Version</b>: 0.8.0.20090617  |  <b>Date</b>: 17 June 2009  |  <b>Type</b>: Released
                </li>
                <li>
                    <b>Update Site</b>: <a href="http://download.eclipse.org/technology/mat/0.8/update-site/">http://download.eclipse.org/technology/mat/0.8/update-site/</a>
                    (8,5 MB)
                </li>
                <li>
                    <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/MemoryAnalyzer-Incubation-0.8.0.200906170940.zip">MemoryAnalyzer-incubation-0.8.0.200906170940.zip</a>
                    (8,2 MB)
                </li>
                <li>
                    <b>Stand-alone Eclipse RCP</b><br/>

                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-win32.win32.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-win32.win32.x86.zip">Windows (x86) (39,9 MB)</a><br/>
                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-win32.win32.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-win32.win32.x86_64.zip">Windows (x86_64) (39,9 MB)</a><br/>
                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.carbon.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (39,5 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.cocoa.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (39,6 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.cocoa.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (39,5 MB)</a><br/>
                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.x86.zip">Linux (x86/GTK 2) (39,8 MB)</a><br/>
                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (39,9 MB)</a><br/>
                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (39,8 MB)</a><br/>
                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-solaris.gtk.sparc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (39,5 MB)</a><br/>
                    <a title="HP-UX (IA64_32/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-hpux.motif.ia64_32.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-hpux.motif.ia64_32.zip">HP-UX (IA64_32/Motif) (39,4 MB)</a><br/>
                    <a title="AIX (PPC/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-aix.motif.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-aix.motif.ppc.zip">AIX (PPC/Motif) (39,4 MB)</a><br/>
                </li>
            </ul>
		</div>
		
		<div class="homeitem3col">
			<h3><a name="0_8_0"></a>Archived Releases</h3>
            <ul>
                <li>
                    <a href="archive.php">Archived Releases</a>
                </li>
            </ul>
		</div>


		<div class="homeitem3col">
			<h3>Installation Instructions (as Feature into Eclipse Ganymede)</h3>
			<ul class="midlist">
				<li>If you are living behind a proxy server, configure the URL via <strong>Preferences -> General -> Network Connections</strong>:<br/><br/>
					<img src="/mat/img/install_proxy.png" border="0" width="603" height="533" alt="Proxy Server Configuration Dialog" /></li>
				<li>Start the Update Manage via <strong>Help -> Software Updates...</strong><br/><br/>
					<img src="/mat/img/install_menu_updates.png" border="0" width="215" height="235" alt="Menu Software Updates" /></li>
				<li>Choose the tab <strong>Available Software</strong> and add the Memory Analyzer Update site:<br/>
					<a href="http://download.eclipse.org/technology/mat/0.7/update-site/">http://download.eclipse.org/technology/mat/0.7/update-site/</a><br/><br/>
					<img src="/mat/img/install_add_site.png" border="0" width="606" height="513" alt="Add MAT's Update Site" /></li>
				<li>Pick the <strong>Memory Analyzer</strong> feature:<br/><br/>
					Please note: The <strong>Memory Analyzer (Charts)</strong> feature is <strong>optional</strong> and requires the <strong>BIRT Chart Runtime</strong>.
					The Runtime will be automatically installed via the Ganymede Update Site but may increase download times.<br/>
					<img src="/mat/img/install_pick_mat.png" border="0" width="606" height="513" alt="Pick MAT's Feature" /></li>
				<li>Accept the license and restart Eclipse</li>
			</ul>
		</div>

	</div>

	<div id="rightcolumn">
        $sidebar
	</div>

EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
