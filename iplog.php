<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Memory Analyzer IP Log
	#****************************************************************************

	$pageTitle 		= "Eclipse Memory Analyzer - IP Log";
	$pageKeywords	= "Memory Analyzer, MAT, IP Log";
	$pageAuthor		= "Andreas Buchen";

	$html = <<<EOHTML

<STYLE TYPE="text/css">
table {
	border-collapse: collapse;
}
td {
	border: 0px;
	padding: 0px;
}
.datatable tr {
	vertical-align: top;
}
.datatable td {
	border: 1px solid #666699;
	padding: 3px 10px 3px 10px;	
}
.datatable th {
	white-space: nowrap;
	text-align: left;
	background-color: #666699;
	color: #FFFFFF;
	font-weight: bold;
	border: 1px solid #666699;	
	padding: 3px 10px 3px 10px;
}
</STYLE>	
	
	<div id="midcolumn">
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td width="100%">
					<h1>Memory Analyzer IP Log</h1>				
				</td>
			</tr>
			<tr>
				<td>
					<br/>
					<h2>Project Distribution (from Eclipse.Org)</h2>	
					The MAT project has no third-party libraries.
					<br/>
					<br/>					
				</td>
			</tr>			
			<tr>
				<td>
					<table class="datatable" cellpadding="0" cellspacing="0">
						<tr>
							<th>Name including version</th>
							<th>IPZilla #</th>
							<th>State</th>
							<th>Location</th>
							<th>License</th>
							<th>Usage</th>
						</tr>
						<tr>
							<td>Initial code contribution</td>
							<td><a href="http://dev.eclipse.org/ipzilla/show_bug.cgi?id=2190">2190</a></td>
							<td>approved_all_projects</td>
							<td>/trunk</td>
							<td>EPL</td>				
							<td>Initial code contribution</td>
						</tr>			
					</table>				
				</td>
			</tr>			
			<tr>
				<td>
					<br/>
					<br/>				
				</td>
			</tr>		
		</table>
	</div>	

	<div id="rightcolumn">
        $sidebar
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
