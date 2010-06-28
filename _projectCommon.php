<?php
	if (isset ($_GET["skin"]) && preg_match("/^(Blue|EclipseStandard|Industrial|Lazarus|Miasma|Modern|OldStyle|Phoenix|PhoenixTest|PlainText|Nova)$/", $_GET["skin"], $regs))
	{
		$theme = $regs[1];
	}
	else
	{
		$theme = "Nova";
	}

	$branding = <<<EOBRANDING
<div id="branding">
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memory Analyzer (MAT)</h1>
</div>
EOBRANDING;
	$Menu->setProjectBranding($branding);
	
	include("sidebar.php");
    
    require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
    
    $Nav->setLinkList(null);
	$Nav->addCustomNav("About This Project", "/projects/project_summary.php?projectid=tools.mat", "_self", 1);

	$Nav->addNavSeparator("Memory Analyzer", "/mat/");
	
    $Nav->addCustomNav("Screenshots", "/mat/about/screenshots.php", "_self", 2);
	$Nav->addCustomNav("Getting Started", "http://wiki.eclipse.org/index.php/MemoryAnalyzer", "_self", 2);
    $Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/MemoryAnalyzer", "_self", 2);
    $Nav->addCustomNav("FAQ (Wiki)", "http://wiki.eclipse.org/index.php/MemoryAnalyzer/FAQ", "_self", 2);
    $Nav->addCustomNav("Forum", "http://www.eclipse.org/forums/eclipse.memory-analyzer", "_self", 2);
    $Nav->addCustomNav("Blog", "http://dev.eclipse.org/blogs/memoryanalyzer", "_self", 2);
    $Nav->addCustomNav("Report Bug", "https://bugs.eclipse.org/bugs/enter_bug.cgi?product=MAT", "_self", 2);
	
    $Nav->addNavSeparator("Downloads", "/mat/downloads.php");
    $Nav->addCustomNav("RCP Package", "/mat/downloads.php", "_self", 2);
    $Nav->addCustomNav("Installation", "/mat/downloads.php", "_self", 2);
    
    $Nav->addNavSeparator("Contributors", "http://wiki.eclipse.org/index.php?title=MemoryAnalyzer/Contributor_Reference");
    $Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php?title=MemoryAnalyzer/Contributor_Reference", "_self", 2);
    $Nav->addCustomNav("Mailing Lists", "https://dev.eclipse.org/mailman/listinfo/mat-dev", "_self", 2);
    $Nav->addCustomNav("View SVN", "http://dev.eclipse.org/viewcvs/index.cgi/?root=TOOLS_MAT", "_self", 2);
    $Nav->addCustomNav("Project Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=tools.mat", "_self", 2);
?>
