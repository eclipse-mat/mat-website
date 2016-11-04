<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme
	$theme = "solstice";
	
	#include("sidebar.php");
    
	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/mat", "_self");
	$Menu->addMenuItem("Download", "/mat/downloads.php", "_self");
	$Menu->addMenuItem("Documentation", "/mat/documentation", "_self");
	$Menu->addMenuItem("Support", "/mat/support", "_self");
	$Menu->addMenuItem("Developers", "/mat/developers", "_self");

    $Nav->setLinkList(null);
	$Nav->addCustomNav("About This Project", "/projects/project_summary.php?projectid=tools.mat", "_self", 1);

	$Nav->addNavSeparator("Memory Analyzer", "/mat/");
	
    $Nav->addCustomNav("Screenshots", "/mat/about/screenshots.php", "_self", 2);
    $Nav->addCustomNav("Getting Started", "http://wiki.eclipse.org/index.php/MemoryAnalyzer", "_self", 2);
    $Nav->addCustomNav("Documentation", "http://help.eclipse.org/topic/org.eclipse.mat.ui.help/welcome.html", "_self", 2);
    $Nav->addCustomNav("FAQ (Wiki)", "http://wiki.eclipse.org/index.php/MemoryAnalyzer/FAQ", "_self", 2);
    $Nav->addCustomNav("Forum", "http://www.eclipse.org/forums/eclipse.memory-analyzer", "_self", 2);
    $Nav->addCustomNav("Blog", "http://dev.eclipse.org/blogs/memoryanalyzer", "_self", 2);
    $Nav->addCustomNav("Unresolved bugs and enhancements", "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;order=Importance;bug_status=UNCONFIRMED;bug_status=NEW;bug_status=ASSIGNED;bug_status=REOPENED;product=MAT", 2);
    $Nav->addCustomNav("Report Bug", "https://bugs.eclipse.org/bugs/enter_bug.cgi?product=MAT", "_self", 2);
	
    $Nav->addNavSeparator("Downloads", "/mat/downloads.php");
    $Nav->addCustomNav("Releases", "/mat/downloads.php", "_self", 2);
    $Nav->addCustomNav("Nightly Builds", "/mat/snapshotBuilds.php", "_self", 2);
    
    $Nav->addNavSeparator("Contributors", "http://wiki.eclipse.org/index.php?title=MemoryAnalyzer/Contributor_Reference");
    $Nav->addCustomNav("Contributor Reference", "http://wiki.eclipse.org/index.php?title=MemoryAnalyzer/Contributor_Reference", "_self", 2);
    $Nav->addCustomNav("Mailing Lists", "https://dev.eclipse.org/mailman/listinfo/mat-dev", "_self", 2);
    $Nav->addCustomNav("View Git", "https://git.eclipse.org/c/mat/org.eclipse.mat.git", "_self", 2);
    $Nav->addCustomNav("Project Plan", "https://projects.eclipse.org/projects/tools.mat/releases/", "_self", 2);

    $App->Promotion = TRUE;
?>
