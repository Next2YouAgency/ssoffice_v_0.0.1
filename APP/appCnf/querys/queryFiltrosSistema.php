<?php
	$queryFiltrosSistema	=	"SELECT * FROM filtros_sistema";
	$exeQrFiltrosSistema	=	mysql_query($queryFiltrosSistema)or die(mysql_error());
	$linhaFiltrosSistema	=	mysql_num_rows($exeQrFiltrosSistema);