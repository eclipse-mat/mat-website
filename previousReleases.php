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
		
		<p>Install the Memory Analyzer <strong>into an Eclipse IDE</strong> using the Update Manager.
		The <em>Memory Analyzer (Chart)</em> feature is optional. The chart feature requires the
		<a href="/birt">BIRT Chart Engine</a> (Version 2.2.2 or greater, available via Update Manager).</p>

		<div class="homeitem3col">
			<h3><a name="1_3_0"></a>Memory Analyzer 1.3.0 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.3.0.20130517 |  <b>Date</b>: 26 June 2013  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.3/update-site/">http://download.eclipse.org/mat/1.3/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/MemoryAnalyzer-1.3.0.201305170842.zip">MemoryAnalyzer-1.3.0.201305170842.zip</a>
                            (12 MB)
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-win32.win32.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-win32.win32.x86.zip">Windows (x86) (46 MB)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-win32.win32.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-win32.win32.x86_64.zip">Windows (x86_64) (46 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-macosx.carbon.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (45 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-macosx.cocoa.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (45 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-macosx.cocoa.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (45 MB)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-linux.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-linux.gtk.x86.zip">Linux (x86/GTK 2) (46 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-linux.gtk.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (46 MB)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-linux.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (43 MB)</a><br/>
		                    <a title="Solaris 8 (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-solaris.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (45 MB)</a><br/>
		                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-solaris.gtk.sparc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (45 MB)</a><br/>
		                    <a title="HP-UX (IA64_32/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-hpux.gtk.ia64_32.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-hpux.gtk.ia64_32.zip">HP-UX (IA64_32/GTK) (43 MB)</a><br/>
		                    <a title="AIX (PPC/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-aix.gtk.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-aix.gtk.ppc.zip">AIX (PPC/GTK) (44 MB)</a><br/>
		                    <a title="AIX (PPC64/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-aix.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.0/rcp/MemoryAnalyzer-1.3.0.20130517-aix.gtk.ppc64.zip">AIX (PPC64/GTK) (44 MB)</a><br/>
		                </li>
                    </ul>
                </li>  
			</ul>
		</div>	
		
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
			<h3 id="1_1_1">Memory Analyzer 1.1.1 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.1.1.20110824 |  <b>Date</b>: 23 September 2011  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://archive.eclipse.org/mat/1.1/update-site/">http://archive.eclipse.org/mat/1.1/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/MemoryAnalyzer-1.1.1.201108240735.zip">MemoryAnalyzer-1.1.1.201108240735.zip</a>
                            (11,8 MB)
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-win32.win32.x86.zip">Windows (x86) (42,1 MB)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-win32.win32.x86_64.zip">Windows (x86_64) (42,1 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-macosx.carbon.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (41,8 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-macosx.cocoa.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (31,8 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (41,9 MB)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-linux.gtk.x86.zip">Linux (x86/GTK 2) (42,1 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (42,2 MB)</a><br/>
		                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (42,1 MB)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (39,9 MB)</a><br/>
		                    <a title="Solaris 8 (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-solaris.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (40,0 MB)</a><br/>
		                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (41,7 MB)</a><br/>
		                    <a title="HP-UX (IA64_32/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-hpux.motif.ia64_32.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-hpux.motif.ia64_32.zip">HP-UX (IA64_32/Motif) (41,6 MB)</a><br/>
		                    <a title="AIX (PPC/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-aix.motif.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.1/rcp/MemoryAnalyzer-1.1.1.20110824-aix.motif.ppc.zip">AIX (PPC/Motif) (41,7 MB)</a><br/>
		                </li>
                        
                    </ul>
                </li>  
			</ul>
			<h3 id="1_1_0">Memory Analyzer 1.1.0 (Indigo) Release</h3>
            <ul>
               <li>
                    <b>Version</b>: 1.1.0.20110523 |  <b>Date</b>: 22 June 2011  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://archive.eclipse.org/mat/1.1.0/update-site/">http://archive.eclipse.org/mat/1.1.0/update-site/</a>
                           (12,0 MB)
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/MemoryAnalyzer-1.1.0.201105231821.zip">MemoryAnalyzer-1.1.0.201105231821.zip</a>
                            (11,8 MB)
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-win32.win32.x86.zip">Windows (x86) (42,1 MB)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-win32.win32.x86_64.zip">Windows (x86_64) (42,1 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-macosx.carbon.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (41,8 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-macosx.cocoa.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (31,8 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (41,9 MB)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-linux.gtk.x86.zip">Linux (x86/GTK 2) (42,1 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (42,2 MB)</a><br/>
		                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (42,1 MB)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (39,9 MB)</a><br/>
		                    <a title="Solaris 8 (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-solaris.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (40,0 MB)</a><br/>
		                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (41,7 MB)</a><br/>
		                    <a title="HP-UX (IA64_32/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-hpux.motif.ia64_32.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-hpux.motif.ia64_32.zip">HP-UX (IA64_32/Motif) (41,6 MB)</a><br/>
		                    <a title="AIX (PPC/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-aix.motif.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.1.0/rcp/MemoryAnalyzer-1.1.0.20110523-aix.motif.ppc.zip">AIX (PPC/Motif) (41,7 MB)</a><br/>
		                </li>
                        
                    </ul>
                </li>
            </ul>
		
			<h3 id="1_0_1">Memory Analyzer 1.0.1 Release</h3>
            <ul>
                <li>
                    <b>Version</b>: 1.0.1.20100809  |  <b>Date</b>: 09 August 2010  |  <b>Type</b>: Released
                </li>
                <li>
                    <b>Update Site</b>: <a href="http://archive.eclipse.org/mat/1.0/update-site/">http://archive.eclipse.org/mat/1.0/update-site/</a>
                    (12,0 MB)
                </li>
                <li>
                    <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/MemoryAnalyzer-1.0.1.201008091353.zip">MemoryAnalyzer-1.0.1.201008091353.zip</a>
                    (11,8 MB)
                </li>
                                   
                <li>
                    <b>Stand-alone Eclipse RCP</b><br/>

                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-win32.win32.x86.zip">Windows (x86) (42,1 MB)</a><br/>
                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-win32.win32.x86_64.zip">Windows (x86_64) (42,1 MB)</a><br/>
                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.carbon.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (41,8 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.cocoa.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (31,8 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (41,9 MB)</a><br/>
                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.x86.zip">Linux (x86/GTK 2) (42,1 MB)</a><br/>
                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (42,2 MB)</a><br/>
                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (42,1 MB)</a><br/>
                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (39,9 MB)</a><br/>
                    <a title="Solaris 8 (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-solaris.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (40,0 MB)</a><br/>
                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (41,7 MB)</a><br/>
                    <a title="HP-UX (IA64_32/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-hpux.motif.ia64_32.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-hpux.motif.ia64_32.zip">HP-UX (IA64_32/Motif) (41,6 MB)</a><br/>
                    <a title="AIX (PPC/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-aix.motif.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-aix.motif.ppc.zip">AIX (PPC/Motif) (41,7 MB)</a><br/>
                </li>
            </ul>
		</div> 
		
		
		<div class="homeitem3col">
			<h3 id="1_0_0">Memory Analyzer 1.0.0 Release</h3>
            <ul>
                <li>
                    <b>Version</b>: 1.0.0.20100520  |  <b>Date</b>: 20 May 2010  |  <b>Type</b>: Released
                </li>
                <li>
                    <b>Update Site</b>: <a href="http://archive.eclipse.org/mat/1.0.0/update-site/">http://archive.eclipse.org/mat/1.0.0/update-site/</a>
                    (12,0 MB)
                </li>
                <li>
                    <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/MemoryAnalyzer-1.0.0.201005201128.zip">MemoryAnalyzer-1.0.0.201005201128.zip</a>
                    (11,8 MB)
                </li>
                                   
                <li>
                    <b>Stand-alone Eclipse RCP</b><br/>

                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-win32.win32.x86.zip">Windows (x86) (42,1 MB)</a><br/>
                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-win32.win32.x86_64.zip">Windows (x86_64) (42,1 MB)</a><br/>
                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-macosx.carbon.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (41,8 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-macosx.cocoa.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (31,8 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (41,9 MB)</a><br/>
                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-linux.gtk.x86.zip">Linux (x86/GTK 2) (42,1 MB)</a><br/>
                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (42,2 MB)</a><br/>
                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (42,1 MB)</a><br/>
                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (39,9 MB)</a><br/>
                    <a title="Solaris 8 (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-solaris.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (40,0 MB)</a><br/>
                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (41,7 MB)</a><br/>
                    <a title="HP-UX (IA64_32/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-hpux.motif.ia64_32.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-hpux.motif.ia64_32.zip">HP-UX (IA64_32/Motif) (41,6 MB)</a><br/>
                    <a title="AIX (PPC/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-aix.motif.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.0/rcp/MemoryAnalyzer-1.0.0.20100520-aix.motif.ppc.zip">AIX (PPC/Motif) (41,7 MB)</a><br/>
                </li>
            </ul>
		</div> 
		
		<div class="homeitem3col">
			<h3 id="incubation_releases">Older Releases (from the Incubation Phase)</h3>
            <ul>
                <li>
                    The following releases were published during the incubation phase of the Memory Analyzer project.
                </li>
            </ul>
		</div>

		<div class="homeitem3col">
			<h3 id="latest_0_8">Latest 0.8 Version (Incubation)</h3>
            <ul>
                <li>
                    <b>Version</b>: 0.8.0.20100120  |  <b>Date</b>: 20 January 2010  |  <b>Type</b>: Nightly Build
                </li>
                <li>
                    <b>Update Site</b>: <a href="http://archive.eclipse.org/mat/latest/update-site/">http://archive.eclipse.org/mat/latest/update-site/</a>
                    (8,47 MB)
                </li>
                <li>
                    <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/MemoryAnalyzer-Incubation-0.8.0.201001201617.zip">MemoryAnalyzer-Incubation-0.8.0.201001201617.zip</a>
                    (8,27 MB)
                </li>
                                   
                <li>
                    <b>Stand-alone Eclipse RCP</b><br/>

                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-win32.win32.x86.zip">Windows (x86) (39,3 MB)</a><br/>
                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-win32.win32.x86_64.zip">Windows (x86_64) (39,3 MB)</a><br/>
                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.carbon.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (38,9 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.cocoa.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (39,0 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (38,9 MB)</a><br/>
                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.x86.zip">Linux (x86/GTK 2) (39,2 MB)</a><br/>
                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (39,3 MB)</a><br/>
                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (39,3 MB)</a><br/>
                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (38,9 MB)</a><br/>
                    <a title="HP-UX (IA64_32/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-hpux.motif.ia64_32.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-hpux.motif.ia64_32.zip">HP-UX (IA64_32/Motif) (38,8 MB)</a><br/>
                    <a title="AIX (PPC/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-aix.motif.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/latest/rcp/MemoryAnalyzer-Incubation-0.8.0.20100120-aix.motif.ppc.zip">AIX (PPC/Motif) (38,9 MB)</a><br/>
                </li>
            </ul>
		</div> 
		
		<div class="homeitem3col">
			<h3 id="0_8_0">Galileo Release Version 0.8 (Incubation)</h3>
            <ul>
                <li>
                    <b>Version</b>: 0.8.0.20090617  |  <b>Date</b>: 17 June 2009  |  <b>Type</b>: Released
                </li>
                <li>
                    <b>Update Site</b>: <a href="http://archive.eclipse.org/mat/0.8/update-site/">http://archive.eclipse.org/mat/0.8/update-site/</a>
                    (8,5 MB)
                </li>
                <li>
                    <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/MemoryAnalyzer-Incubation-0.8.0.200906170940.zip">MemoryAnalyzer-incubation-0.8.0.200906170940.zip</a>
                    (8,2 MB)
                </li>
                <li>
                    <b>Stand-alone Eclipse RCP</b><br/>

                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-win32.win32.x86.zip">Windows (x86) (39,9 MB)</a><br/>
                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-win32.win32.x86_64.zip">Windows (x86_64) (39,9 MB)</a><br/>
                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.carbon.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (39,5 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.cocoa.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (39,6 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (39,5 MB)</a><br/>
                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.x86.zip">Linux (x86/GTK 2) (39,8 MB)</a><br/>
                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (39,9 MB)</a><br/>
                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (39,8 MB)</a><br/>
                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (39,5 MB)</a><br/>
                    <a title="HP-UX (IA64_32/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-hpux.motif.ia64_32.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-hpux.motif.ia64_32.zip">HP-UX (IA64_32/Motif) (39,4 MB)</a><br/>
                    <a title="AIX (PPC/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-aix.motif.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/0.8/rcp/MemoryAnalyzer-Incubation-0.8.0.20090617-aix.motif.ppc.zip">AIX (PPC/Motif) (39,4 MB)</a><br/>
                </li>
            </ul>
		</div>
		
		<div class="homeitem3col">
			<h3 name="0_8_0">Archived Releases</h3>
            <ul>
                <li>
                    <a href="archive.php">Archived Releases</a>
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
