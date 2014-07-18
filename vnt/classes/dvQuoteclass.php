<?php
	require_once 'GMclass.php';
	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Easy set variables
	 */
	
	/* Array of database columns which should be read and sent back to DataTables. Use a space where
	 * you want to insert a non-database field (for example a counter or static image)
	 */
	$aColumns = array('QuoteId','QuoteName','QuoteEmail','QuoteCompany','QuoteDescription','CreatedDate','QuoteId');	
	/* Indexed column (used for fast and accurate table cardinality) */
	$sIndexColumn = "QuoteId";	
	/* DB table to use */
	$sTable = "quoteinfo";	
	
	$gaSql['user']       = "b923e5879b2598";
	$gaSql['password']   = "c48c0cf4";
	$gaSql['db']         = "heroku_5035f62fbd8a42c";
	$gaSql['server']     = "us-cdbr-east-06.cleardb.net";

/*	
	
	$gaSql['user']       = "root";
	$gaSql['password']   = "test";
	$gaSql['db']         = "VictoryNetDb";
	$gaSql['server']     = "localhost";
	
	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * If you just want to use the basic configuration for DataTables with PHP server-side, there is
	 * no need to edit below this line
	 */
	
	/* 
	 * MySQL connection
	 */
	$gaSql['link'] =  mysql_pconnect( $gaSql['server'], $gaSql['user'], $gaSql['password']  ) or
		die( 'Could not open connection to server' );
	
	mysql_select_db( $gaSql['db'], $gaSql['link'] ) or 
		die( 'Could not select database '. $gaSql['db'] );
	
	
	/* 
	 * Paging
	 */
	$sLimit = "";
	if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
	{
		$sLimit = "LIMIT ".mysql_real_escape_string( $_GET['iDisplayStart'] ).", ".
			mysql_real_escape_string( $_GET['iDisplayLength'] );
	}	
	
	/*
	 * Ordering
	 */
	if ( isset( $_GET['iSortCol_0'] ) )
	{
		$sOrder = "ORDER BY  ";
		for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
		{
			if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
			{
				$sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
				 	".mysql_real_escape_string( $_GET['sSortDir_'.$i] ) .", ";
			}
		}
		
		$sOrder = substr_replace( $sOrder, "", -2 );
		if ( $sOrder == "ORDER BY" )
		{
			$sOrder = "";
		}
	}	
	/* 
	 * Filtering
	 * NOTE this does not match the built-in DataTables filtering which does it
	 * word by word on any field. It's possible to do here, but concerned about efficiency
	 * on very large tables, and MySQL's regex functionality is very limited
	 */
	$sWhere = "";
	if ( $_GET['sSearch'] != "" )
	{
		$sWhere = "WHERE (";
		for ( $i=0 ; $i<count($aColumns) ; $i++ )
		{
			$sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string( $_GET['sSearch'] )."%' OR ";
		}
		$sWhere = substr_replace( $sWhere, "", -3 );
		$sWhere .= ')';
	}
	
	/* Individual column filtering */
	for ( $i=0 ; $i<count($aColumns) ; $i++ )
	{
		if ( $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
		{
			if ( $sWhere == "" )
			{
				$sWhere = "WHERE ";
			}
			else
			{
				$sWhere .= " AND ";
			}
			$sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string($_GET['sSearch_'.$i])."%' ";
		}
	}
	
	
	/*
	 * SQL queries
	 * Get data to display
	 */
	$sQuery = "
		SELECT SQL_CALC_FOUND_ROWS ".str_replace(" , ", " ", implode(", ", $aColumns))."
		FROM   $sTable
		$sWhere
		$sOrder
		$sLimit
	";
	$rResult = mysql_query( $sQuery, $gaSql['link'] ) or die(mysql_error());
	
	/* Data set length after filtering */
	$sQuery = "
		SELECT FOUND_ROWS()
	";
	$rResultFilterTotal = mysql_query( $sQuery, $gaSql['link'] ) or die(mysql_error());
	$aResultFilterTotal = mysql_fetch_array($rResultFilterTotal);
	$iFilteredTotal = $aResultFilterTotal[0];
	
	/* Total data set length */
	$sQuery = "
		SELECT COUNT(".$sIndexColumn.")
		FROM   $sTable
	";
	$rResultTotal = mysql_query( $sQuery, $gaSql['link'] ) or die(mysql_error());
	$aResultTotal = mysql_fetch_array($rResultTotal);
	$iTotal = $aResultTotal[0];
	
	
	/*
	 * Output
	 */
	$sOutput = '{';
	$sOutput .= '"sEcho": '.intval($_GET['sEcho']).', ';
	$sOutput .= '"iTotalRecords": '.$iTotal.', ';
	$sOutput .= '"iTotalDisplayRecords": '.$iFilteredTotal.', ';
	$sOutput .= '"aaData": [ ';
	$i=1;
	while ( $aRow = mysql_fetch_array( $rResult ) )
	{
		$sOutput .= "[";					  
		$sOutput .= '"'.$i.'",';		
		$sOutput .= '"'.addslashes($aRow['QuoteName']).'",';
		$sOutput .= '"'.addslashes($aRow['QuoteEmail']).'",';		
		$sOutput .= '"'.addslashes($aRow['QuoteCompany']).'",';
		$sOutput .= '"'.addslashes($aRow['QuoteDescription']).'",';	
		$sOutput .= '"'.addslashes($aRow['CreatedDate']).'",';
	
			
		$edit = "<p style='text-align:center;'><a href='edit-quote.php?id=".addslashes($aRow["QuoteId"])."' class='anchr' ><img src='images/icon_edit.gif' alt='Edit' border='0' /></a>";
		$Delete= " <a href='quote.php?id=".addslashes($aRow["QuoteId"])."' class='anchr'><img src='images/icon_delete.gif' alt='Delete' border='0' /></a></p>";
		$sOutput .= '"'.$edit.$Delete.'"';
			
		$sOutput .= "],";
		$i=$i+1;
	}
	$sOutput = substr_replace( $sOutput, "", -1 );
	$sOutput .= '] }';
	
	echo $sOutput;
?>