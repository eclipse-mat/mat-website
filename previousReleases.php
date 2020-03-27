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

		<div class="homeitem3col">
			<h3><a name="1_9_2"></a>Memory Analyzer 1.9.2 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.9.2.20200115 |  <b>Date</b>: 15 January 2020  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.9.2/update-site/">http://download.eclipse.org/mat/1.9.2/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/MemoryAnalyzer-1.9.2.202001150834.zip">MemoryAnalyzer-1.9.2.202001150834.zip</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		                    
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                            &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-win32.win32.x86.zip">Windows (x86)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-win32.win32.x86_64.zip">Windows (x86_64)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa/x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                               &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa/x86_64)</a><br/>
		                    <a title="Linux (x86/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-linux.gtk.x86.zip">Linux (x86/GTK+)</a><br/>
		                    <a title="Linux (x86_64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                        &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-linux.gtk.x86_64.zip">Linux (x86_64/GTK+)</a><br/>
		                    <a title="Linux (PPC64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                       &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-linux.gtk.ppc64.zip">Linux (PPC64/GTK+)</a><br/>
		                    <a title="Linux (PPC64le/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-linux.gtk.ppc64le.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                         &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.2/rcp/MemoryAnalyzer-1.9.2.20200115-linux.gtk.ppc64le.zip">Linux (PPC64le/GTK+)</a><br/>
		                </li>
                    </ul>
                </li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3><a name="1_9_1"></a>Memory Analyzer 1.9.1 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.9.1.20190826 |  <b>Date</b>: 18 September 2019  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.9.1/update-site/">http://download.eclipse.org/mat/1.9.1/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/MemoryAnalyzer-1.9.1.201908260659.zip">MemoryAnalyzer-1.9.1.201908260659.zip</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		                    
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                            &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-win32.win32.x86.zip">Windows (x86)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-win32.win32.x86_64.zip">Windows (x86_64)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa/x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                               &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa/x86_64)</a><br/>
		                    <a title="Linux (x86/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-linux.gtk.x86.zip">Linux (x86/GTK+)</a><br/>
		                    <a title="Linux (x86_64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                        &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-linux.gtk.x86_64.zip">Linux (x86_64/GTK+)</a><br/>
		                    <a title="Linux (PPC64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                       &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-linux.gtk.ppc64.zip">Linux (PPC64/GTK+)</a><br/>
		                    <a title="Linux (PPC64le/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-linux.gtk.ppc64le.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                         &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.1/rcp/MemoryAnalyzer-1.9.1.20190826-linux.gtk.ppc64le.zip">Linux (PPC64le/GTK+)</a><br/>
		                </li>
                    </ul>
                </li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3><a name="1_9_0"></a>Memory Analyzer 1.9.0 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.9.0.20190605 |  <b>Date</b>: 19 June 2019  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.9.0/update-site/">http://download.eclipse.org/mat/1.9.0/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/MemoryAnalyzer-1.9.0.201906050844.zip">MemoryAnalyzer-1.9.0.201906050844.zip</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		                    
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                            &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-win32.win32.x86.zip">Windows (x86)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-win32.win32.x86_64.zip">Windows (x86_64)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa/x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                               &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa/x86_64)</a><br/>
		                    <a title="Linux (x86/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-linux.gtk.x86.zip">Linux (x86/GTK+)</a><br/>
		                    <a title="Linux (x86_64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                        &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-linux.gtk.x86_64.zip">Linux (x86_64/GTK+)</a><br/>
		                    <a title="Linux (PPC64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                       &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-linux.gtk.ppc64.zip">Linux (PPC64/GTK+)</a><br/>
		                    <a title="Linux (PPC64le/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-linux.gtk.ppc64le.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                         &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.9.0/rcp/MemoryAnalyzer-1.9.0.20190605-linux.gtk.ppc64le.zip">Linux (PPC64le/GTK+)</a><br/>
		                </li>
                    </ul>
                </li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3><a name="1_8_1"></a>Memory Analyzer 1.8.1 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.8.1.20180910 |  <b>Date</b>: 19 September 2018  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.8.1/update-site/">http://download.eclipse.org/mat/1.8.1/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/MemoryAnalyzer-1.8.1.201809100846.zip">MemoryAnalyzer-1.8.1.201809100846.zip</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		                    
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                            &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-win32.win32.x86.zip">Windows (x86)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-win32.win32.x86_64.zip">Windows (x86_64)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa/x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                               &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa/x86_64)</a><br/>
		                    <a title="Linux (x86/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-linux.gtk.x86.zip">Linux (x86/GTK+)</a><br/>
		                    <a title="Linux (x86_64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                        &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-linux.gtk.x86_64.zip">Linux (x86_64/GTK+)</a><br/>
		                    <a title="Linux (PPC64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                       &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-linux.gtk.ppc64.zip">Linux (PPC64/GTK+)</a><br/>
		                    <a title="Linux (PPC64le/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-linux.gtk.ppc64le.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                         &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8.1/rcp/MemoryAnalyzer-1.8.1.20180910-linux.gtk.ppc64le.zip">Linux (PPC64le/GTK+)</a><br/>
		                </li>
                    </ul>
                </li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3><a name="1_8_0"></a>Memory Analyzer 1.8.0 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.8.0.20180604 |  <b>Date</b>: 27 June 2018  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.8/update-site/">http://download.eclipse.org/mat/1.8/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/MemoryAnalyzer-1.8.0.201806041349.zip">MemoryAnalyzer-1.7.0.201706130745.zip</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		                    
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                            &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-win32.win32.x86.zip">Windows (x86)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-win32.win32.x86_64.zip">Windows (x86_64)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa/x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                               &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa/x86_64)</a><br/>
		                    <a title="Linux (x86/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-linux.gtk.x86.zip">Linux (x86/GTK+)</a><br/>
		                    <a title="Linux (x86_64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                        &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-linux.gtk.x86_64.zip">Linux (x86_64/GTK+)</a><br/>
		                    <a title="Linux (PPC64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                       &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-linux.gtk.ppc64.zip">Linux (PPC64/GTK+)</a><br/>
		                    <a title="Linux (PPC64le/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-linux.gtk.ppc64le.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                         &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.8/rcp/MemoryAnalyzer-1.8.0.20180604-linux.gtk.ppc64le.zip">Linux (PPC64le/GTK+)</a><br/>
		                </li>
                    </ul>
                </li>
			</ul>
		</div>

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
			<h3><a name="1_6_1"></a>Memory Analyzer 1.6.1 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.6.1.20161125 |  <b>Date</b>: 7 December 2016  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.6.1/update-site/">http://download.eclipse.org/mat/1.6.1/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/MemoryAnalyzer-1.6.1.201611251412.zip">MemoryAnalyzer-1.6.1.201611251412.zip</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		                    
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-win32.win32.x86.zip">Windows (x86)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-win32.win32.x86_64.zip">Windows (x86_64)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.x86.zip">Linux (x86/GTK 2) (52.3 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2)</a><br/>
		                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.ppc.zip">Linux (PPC/GTK 2)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2)</a><br/>
		                    <a title="Linux (s390/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.s390.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.s390.zip">Linux (s390/GTK 2)</a><br/>
		                    <a title="Linux (s390x/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.s390x.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-linux.gtk.s390x.zip">Linux (s390x/GTK 2)</a><br/>
		                    <a title="Solaris (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-solaris.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2)</a><br/>
		                    <a title="Solaris (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2)</a><br/>
		                    <a title="HP-UX (IA64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-hpux.gtk.ia64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-hpux.gtk.ia64.zip">HP-UX (IA64/GTK 2)</a><br/>
		                    <a title="AIX (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-aix.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-aix.gtk.ppc.zip">AIX (PPC/GTK 2)</a><br/>
		                    <a title="AIX (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-aix.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6.1/rcp/MemoryAnalyzer-1.6.1.20161125-aix.gtk.ppc64.zip">AIX (PPC64/GTK 2)</a><br/>
		                    
		                </li>
                    </ul>
                </li>  
			</ul>
		</div>

		<div class="homeitem3col">
			<h3><a name="1_6_0"></a>Memory Analyzer 1.6.0 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.6.0.20160531 |  <b>Date</b>: 22 June 2016  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.6/update-site/">http://download.eclipse.org/mat/1.6/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/MemoryAnalyzer-1.6.0.201605311117.zip">MemoryAnalyzer-1.6.0.201605311117.zip</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		                    
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-win32.win32.x86.zip">Windows (x86)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-win32.win32.x86_64.zip">Windows (x86_64)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.x86.zip">Linux (x86/GTK 2) (52.3 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2)</a><br/>
		                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.ppc.zip">Linux (PPC/GTK 2)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2)</a><br/>
		                    <a title="Linux (s390/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.s390.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.s390.zip">Linux (s390/GTK 2)</a><br/>
		                    <a title="Linux (s390x/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.s390x.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-linux.gtk.s390x.zip">Linux (s390x/GTK 2)</a><br/>
		                    <a title="Solaris (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-solaris.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2)</a><br/>
		                    <a title="Solaris (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2)</a><br/>
		                    <a title="HP-UX (IA64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-hpux.gtk.ia64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-hpux.gtk.ia64.zip">HP-UX (IA64/GTK 2)</a><br/>
		                    <a title="AIX (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-aix.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-aix.gtk.ppc.zip">AIX (PPC/GTK 2)</a><br/>
		                    <a title="AIX (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-aix.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.6/rcp/MemoryAnalyzer-1.6.0.20160531-aix.gtk.ppc64.zip">AIX (PPC64/GTK 2)</a><br/>
		                    
		                </li>
                    </ul>
                </li>  
			</ul>
		</div>

		<div class="homeitem3col">
			<h3><a name="1_5_0"></a>Memory Analyzer 1.5.0 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.5.0.20150527 |  <b>Date</b>: 24 June 2015  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.5/update-site/">http://download.eclipse.org/mat/1.5/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/MemoryAnalyzer-1.5.0.201505271423.zip">MemoryAnalyzer-1.5.0.201505271423.zip</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		                    
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-win32.win32.x86.zip">Windows (x86)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-win32.win32.x86_64.zip">Windows (x86_64)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.x86.zip">Linux (x86/GTK 2) (52.3 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2)</a><br/>
		                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.ppc.zip">Linux (PPC/GTK 2)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2)</a><br/>
		                    <a title="Linux (s390/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.s390.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.s390.zip">Linux (s390/GTK 2)</a><br/>
		                    <a title="Linux (s390x/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.s390x.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-linux.gtk.s390x.zip">Linux (s390x/GTK 2)</a><br/>
		                    <a title="Solaris (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-solaris.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2)</a><br/>
		                    <a title="Solaris (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2)</a><br/>
		                    <a title="HP-UX (IA64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-hpux.gtk.ia64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-hpux.gtk.ia64.zip">HP-UX (IA64/GTK 2)</a><br/>
		                    <a title="AIX (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-aix.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-aix.gtk.ppc.zip">AIX (PPC/GTK 2)</a><br/>
		                    <a title="AIX (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-aix.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.5/rcp/MemoryAnalyzer-1.5.0.20150527-aix.gtk.ppc64.zip">AIX (PPC64/GTK 2)</a><br/>
		                    
		                </li>
                    </ul>
                </li>  
			</ul>
		</div>	

		<div class="homeitem3col">
			<h3><a name="1_4_0"></a>Memory Analyzer 1.4.0 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.4.0.20140604 |  <b>Date</b>: 25 June 2014  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.4/update-site/">http://download.eclipse.org/mat/1.4/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/MemoryAnalyzer-1.4.0.201406041413.zip">MemoryAnalyzer-1.4.0.201406041413.zip</a>
                            (12 MB)
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		                    
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-win32.win32.x86.zip">Windows (x86) (52.4 MB)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-win32.win32.x86_64.zip">Windows (x86_64) (52.4 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-macosx.cocoa.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (52.0 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-macosx.cocoa.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (51.8 MB)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.x86.zip">Linux (x86/GTK 2) (52.3 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (52.4 MB)</a><br/>
		                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (52.0 MB)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (52.0 MB)</a><br/>
		                    <a title="Linux (s390/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.s390.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.s390.zip">Linux (s390/GTK 2) (52.0 MB)</a><br/>
		                    <a title="Linux (s390x/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.s390x.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-linux.gtk.s390x.zip">Linux (s390x/GTK 2) (52.0 MB)</a><br/>
		                    <a title="Solaris (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-solaris.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (51.8 MB)</a><br/>
		                    <a title="Solaris (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-solaris.gtk.sparc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (51.9 MB)</a><br/>
		                    <a title="HP-UX (IA64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-hpux.gtk.ia64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-hpux.gtk.ia64.zip">HP-UX (IA64/GTK 2) (51.9 MB)</a><br/>
		                    <a title="AIX (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-aix.gtk.ppc.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-aix.gtk.ppc.zip">AIX (PPC/GTK 2) (52.4 MB)</a><br/>
		                    <a title="AIX (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-aix.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.4/rcp/MemoryAnalyzer-1.4.0.20140604-aix.gtk.ppc64.zip">AIX (PPC64/GTK 2) (52.5 MB)</a><br/>
		                    
		                </li>
                    </ul>
                </li>  
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3><a name="1_3_1"></a>Memory Analyzer 1.3.1 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.3.1.20140107 |  <b>Date</b>: 22 January 2014  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.3.1/update-site/">http://download.eclipse.org/mat/1.3.1/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/MemoryAnalyzer-1.3.1.201401071412.zip">MemoryAnalyzer-1.3.1.201401071412.zip</a>
                            (12 MB)
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-win32.win32.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-win32.win32.x86.zip">Windows (x86) (46 MB)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-win32.win32.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-win32.win32.x86_64.zip">Windows (x86_64) (46 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-macosx.carbon.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (45 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-macosx.cocoa.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (45 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-macosx.cocoa.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (45 MB)</a><br/>
		                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-linux.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-linux.gtk.x86.zip">Linux (x86/GTK 2) (46 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-linux.gtk.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (46 MB)</a><br/>
		                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-linux.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (43 MB)</a><br/>
		                    <a title="Solaris 8 (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-solaris.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (45 MB)</a><br/>
		                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-solaris.gtk.sparc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (45 MB)</a><br/>
		                    <a title="HP-UX (IA64_32/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-hpux.gtk.ia64_32.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-hpux.gtk.ia64_32.zip">HP-UX (IA64_32/GTK) (43 MB)</a><br/>
		                    <a title="AIX (PPC/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-aix.gtk.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-aix.gtk.ppc.zip">AIX (PPC/GTK) (44 MB)</a><br/>
		                    <a title="AIX (PPC64/GTK) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-aix.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
		                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.3.1/rcp/MemoryAnalyzer-1.3.1.20140107-aix.gtk.ppc64.zip">AIX (PPC64/GTK) (44 MB)</a><br/>
		                </li>
                    </ul>
                </li>  
			</ul>
		</div>	

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
