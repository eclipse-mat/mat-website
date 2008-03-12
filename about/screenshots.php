<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************
	
	#
	$pageTitle 		= "Eclipse Memory Analyzer Screenshots";
	$pageKeywords	= "Memory Analyzer,Screenshot";
	$pageAuthor		= "Andreas Buchen";
			
	$html = <<<EOHTML

<div id="midcolumn">
	<h1>Screenshots</h1>
     
<div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
	<table width="750" border="0" cellspacing="5" cellpadding="5">
	<tr>
		<td width="300">
			<a href="/mat/about/overview.png"><img alt="Overview Screenshot" border=0 src="/mat/about/overview_small.png"></a>
		</td>
		<td width="450" valign="top">
			<h2 align="left">Overview</h2>
			<p>Get an overview of the heap dump: Size and total number of objects at the top, then a pie
			chart with the biggest objects and links to continue the analysis.</p>
		</td>
	</tr>
	</table>
</div>

<div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
	<table width="750" border="0" cellspacing="5" cellpadding="5">
	<tr>
		<td width="300">
			<a href="/mat/about/histogram.png"><img alt="Histogram Screenshot" border=0 src="/mat/about/histogram_small.png"></a>
		</td>
		<td width="450" valign="top">
			<h2 align="left">Histogram</h2>
			<p>The histogram lists the objects grouped by their class. The Memory Analyzer can approximate
			the retained size very quickly. This is a good indicator where to continue with the analysis.</p>
		</td>
	</tr>
	</table>
</div>

<div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
	<table width="750" border="0" cellspacing="5" cellpadding="5">
	<tr>
		<td width="300" valign="top">
		<a href="/mat/about/dominator_tree.png"><img alt="Dominator Tree Screenshot" border=0 src="/mat/about/dominator_tree_small.png"></a>
		</td>
		<td width="450" valign="top">
			<h2 align="left">Dominator Tree</h2>
			<p>The Dominator Tree lists the <strong>biggest objects</strong>. One could call it a
			"Keep-Alive Tree" because the next level shows those objects which are immediately prevented
			from being garbage collected. Right-click to drill down: view the outgoing and incoming 
			reference or view the path to the GC roots to see the reference chain which keeps the
			objects alive.</p>
		</td>
	</tr>
	</table>
</div>
     
<div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
	<table width="750" border="0" cellspacing="5" cellpadding="5">
	<tr>
		<td width="300">
		<a href="/mat/about/path_2_gc_roots.png"><img alt="Path to GC Roots Screenshot" border=0 src="/mat/about/path_2_gc_roots_small.png"></a>
		</td>
		<td width="450" valign="top">
			<h2 align="left">Path to GC Roots</h2>
			<p>The path to the GC Roots shows the reference chain which prevents that the object
			is garbage collected. Objects decorated with a yellow dot are Garbage Collection (GC) Roots,
			i.e. objects which are assumed to be alive. Usually GC Roots are objects that are currently
			on the call stack of a thread or system classes.</p>
		</td>
	</tr>
	</table>
</div>

<div style="margin: 10px; padding: 5px; border:2px; border-color:#eee; border-style:solid; width: 750px;">
	<table width="750" border="0" cellspacing="5" cellpadding="5">
	<tr>
		<td width="300">
		<a href="/mat/about/dominator_tree_grouped.png"><img alt="Dominator Tree Grouped by Class Loader Screenshot" border=0 src="/mat/about/dominator_tree_grouped_small.png"></a>
		</td>
		<td width="450" valign="top">
			<h2 align="left">Dominator Tree Grouped by Class Loader</h2>
			<p>Any decent architectures loads components by different class loaders. Many views
			of the Memory Analyzer allow you to group the objects by class loader and, hence, easily
			analyze memory by component. To map the class loader to a meaningful component name
			(for example the plug-in id), one can plug-in name resolver.</p>
		</td>
	</tr>
	</table>
</div>


</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
