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

	$Nav->addNavSeparator("Memory Analyzer", "/mat/");

	$Nav->addCustomNav("About This Project", "/projects/project_summary.php?projectid=tools.mat", "_self", 1);
    $Nav->addCustomNav("Screenshots", "/mat/about/screenshots.php", "_self", 2);
    $Nav->addCustomNav("Getting Started", "https://wiki.eclipse.org/index.php/MemoryAnalyzer", "_self", 2);
    $Nav->addCustomNav("Documentation", "/mat/documentation/", "_self", 2);
    $Nav->addCustomNav("Blog", "https://memoryanalyzer.blogspot.in/", "_self", 2);
    $Nav->addCustomNav("Get Help", "/mat/support/", 2);
	
    $Nav->addNavSeparator("Downloads", "/mat/downloads.php");
    $Nav->addCustomNav("Releases", "/mat/downloads.php", "_self", 2);
    $Nav->addCustomNav("Nightly Builds", "/mat/snapshotBuilds.php", "_self", 2);
    
    $Nav->addNavSeparator("Developers", "/mat/developers/");
    $Nav->addCustomNav("Mailing Lists", "https://dev.eclipse.org/mailman/listinfo/mat-dev", "_self", 2);
    $Nav->addCustomNav("View Git", "https://git.eclipse.org/c/mat/org.eclipse.mat.git", "_self", 2);

    $App->Promotion = TRUE;
?>
