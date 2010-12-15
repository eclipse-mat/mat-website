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
