<?php
/* $Id$ */

$charset = 'windows-1250';
$left_font_family = 'verdana CE, Arial CE, verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'verdana CE, Arial CE, helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
$byteUnits = array('Bajt�', 'KB', 'MB', 'GB');

$day_of_week = array('Ned�le', 'Pond�l�', '�ter�', 'St�eda', '�tvrtek', 'P�tek', 'Sobota');
$month = array('ledna', '�nora', 'b�ezna', 'dubna', 'kv�tna', '�ervna', '�ervence', 'srpna', 'z���', '��jna', 'listopadu', 'prosince');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%a %e. %b %Y, %H:%M';


$strAccessDenied = 'P��stup odep�en';
$strAction = 'Akce';
$strAddDeleteColumn = 'P�idat/Smazat sloupec pol�';
$strAddDeleteRow = 'P�idat/Smazat ��dek s podm�nkou';
$strAddNewField = 'P�idat nov� pole';
$strAddPriv = 'P�idat nov� privilegium';
$strAddPrivMessage = 'Privilegium bylo p�id�no.';
$strAddSearchConditions = 'P�idat vyhled�vac� parametry (obsah dotazu po "where" p��kazu):';
$strAddUser = 'P�idat nov�ho u�ivatele';
$strAddUserMessage = 'U�ivatel byl p�id�n.';
$strAffectedRows = 'Ovlivn�n� ��dky:';
$strAfter = 'Po';
$strAll = 'V�echno';
$strAlterOrderBy = 'Zm�nit po�ad� tabulky podle';
$strAnalyzeTable = 'Analyzovat tabulku';
$strAnd = 'a';
$strAny = 'Jak�koliv';
$strAnyColumn = 'Jak�koliv sloupec';
$strAnyDatabase = 'Jak�koliv datab�ze';
$strAnyHost = 'Jak�koliv hostitel';
$strAnyTable = 'Any table';
$strAnyUser = 'Jak�koliv u�ivatel';
$strAscending = 'Vzestupn�';
$strAtBeginningOfTable = 'Na za��tku tabulky';
$strAtEndOfTable = 'Na konci tabulky';
$strAttr = 'Atributy';

$strBack = 'Zp�t';
$strBinary = ' Bin�rn� ';  
$strBinaryDoNotEdit = ' Bin�rn� - neupravujte ';  
$strBookmarkLabel = 'N�zev'; 
$strBookmarkQuery = 'Obl�ben� SQL dotaz';
$strBookmarkThis = 'P�idat tento SQL dotaz do obl�ben�ch';
$strBookmarkView = 'Jen prohl�dnout';
$strBrowse = 'Proj�t';
$strBzip = '"zabzipov�no"';

$strCantLoadMySQL = 'nelze nahr�t roz���en� pro MySQL,<br />pros�m zkontrolujte nastaven� PHP.';
$strCarriage = 'N�vrat voz�ku (CR): \\r';
$strChange = 'Zm�nit';
$strCheckAll = 'Za�krtnout v�e';
$strCheckDbPriv = 'Zkontrolovat privilegia datab�ze';
$strCheckTable = 'Zkontrolovat tabulku';
$strColumn = 'Sloupec';
$strColumnEmpty = 'Jm�na sloupc� jsou pr�zdn�!';
$strColumnNames = 'N�zvy sloupc�';
$strCompleteInserts = 'Upln� inserty';
$strConfirm = 'Opravdu chcete toto prov�st?';
$strCopyTable = 'Zkop�rovat tabulku do';
$strCopyTableOK = 'Tabulka %s byla zkop�rov�na do %s.';
$strCreate = 'Vytvo�it';
$strCreateNewDatabase = 'Vytvo�it novou datab�zi';
$strCreateNewTable = 'Vytvo�it novou tabulku v datab�zi ';
$strCriteria = 'Podm�nka';

$strData = 'Data'; 
$strDatabase = 'Datab�ze ';
$strDatabases = 'datab�ze';
$strDatabasesStats = 'Statistiky datab�ze';
$strDataOnly = ' Jen data ';
$strDbEmpty = 'Jm�no datab�ze je pr�zdn�!';
$strDefault = 'V�choz�';
$strDelete = 'Smazat';
$strDeleted = '��dek byl smaz�n';
$strDeletedRows = 'Smazan� ��dky:';
$strDeleteFailed = 'Smaz�n� selhalo!';
$strDeletePassword = 'Smazat heslo';
$strDeleteUserMessage = 'Byl smaz�n u�ivatel';
$strDelPassMessage = 'Bylo smaz�no heslo pro';
$strDescending = 'Sestupn�';
$strDisableMagicQuotes = '<b>Varov�n�:</b> Zapnul jste magic_quotes_gpc v nastaven� PHP. Tato verze PhpMyAdmina nem��e s t�mto nastaven�m korektn� pracovat. Pros�m pod�vejte se do manu�lu PHP (kapitola nastaven�) jak toto nastaven� zm�nit.';
$strDisplay = 'Zobrazit';
$strDisplayOrder = 'Se�adit podle:';
$strDoAQuery = 'Prov�stDo a "dotaz podle p��kladu" (�ol�k: "%")';
$strDocu = 'Dokumentace';
$strDoYouReally = 'Opravdu si p�eje� vykonat p��kaz ';
$strDrop = 'Odstranit';
$strDropDB = 'Odstranit datab�zi ';
$strDropTable = 'Smazat tabulku';
$strDumpingData = 'Dumpuji data pro tabulku';
$strDynamic = 'dynamic';

$strEdit = 'Editovat';
$strEditPrivileges = 'Upravit pr�va';
$strEffective = 'Efektivn�';
$strEmpty = 'Vypr�zdnit';
$strEmptyResultSet = 'MySQL vr�til pr�zdn� v�sledek (tj. nulov� po�et ��dk�).';
$strEnableMagicQuotes = '<b>POZOR:</b> Nepovolil jsi \'magic_quotes_gpc\' v tv� konfiguraci PHP enginu. PhpMyAdmin toto pot�ebuje pro svoji korektn� praci. Pros�m, zkontroluj konfiguraci pop�. v manu�lu pro PHP vyhledej informaci jak toto povolit.';
$strEnclosedBy = 'uzav�en do';
$strEnd = 'Konec';
$strEnglishPrivileges = ' Pozn�mka: n�zvy MySQL privilegi� jsou uv�d�na v angli�tin� ';
$strError = 'Chyba';
$strEscapedBy = 'uvozeno pomoc�';
$strExtendedInserts = 'Roz���en� inserty';
$strExtra = 'Extra'; 

$strField = 'Pole';
$strFields = 'Po�et pol�';
$strFieldsEmpty = ' Nebyl zad�n po�et pol�! ';
$strFixed = 'pevn�'; 
$strFormat = 'Form�t'; 
$strFormEmpty = 'Chyb�j�c� hodnota ve formul��i !';
$strFullText = 'Cel� texty';
$strFunction = 'Funkce';

$strGenTime = 'Vygenerov�no:'; 
$strGo = 'Prove�';
$strGrants = 'Privilegia';
$strGzip = '"zagzipov�no"';

$strHasBeenAltered = 'byla zm�n�na.';
$strHasBeenCreated = 'byla vytvo�ena.';
$strHasBeenDropped = 'byla odstran�na.';
$strHasBeenEmptied = 'byla vypr�zdn�na.';
$strHome = '�vod';
$strHomepageOfficial = ' Ofici�ln� str�nka phpMyAdmina ';
$strHomepageSourceforge = ' nov� str�nka phpMyAdmina ';
$strHost = 'Hostitel';
$strHostEmpty = 'Jm�no hostitele je pr�zdn�!';

$strIfYouWish = 'Pokud si p�eje� nat�hnout jenom ur�it� sloupce z tabulky, specifikuj je jako seznam pol� odd�len�ch ��rkou.';
$strIndex = 'Index';
$strIndexes = 'Indexy'; 
$strInsert = 'Vlo�it';
$strInsertAsNewRow = ' Vlo�it jako nov� ��dek ';
$strInsertedRows = 'Vlo�eno ��dk�:';
$strInsertIntoTable = 'Vlo�it do tabulky';
$strInsertNewRow = 'Vlo�it nov� ��dek';
$strInsertTextfiles = 'Vlo�it textov� soubory do tabulky';
$strInstructions = 'Instrukce';
$strInUse = 'pr�v� se pou��v�'; 
$strInvalidName = '"%s" je rezervovan� slovo a proto ho nem��ete po��t jako jm�no datab�ze/tabulky/sloupce.';

$strKeyname = 'Kl��ovy n�zev';
$strKill = ' Zab�t ';

$strLength = 'D�lka';
$strLengthSet = 'D�lka/Set*';
$strLimitNumRows = 'z�znamu na str�nku';
$strLineFeed = 'Ukon�en� ��dku (Linefeed): \\n';
$strLines = '��dek';
$strLocationTextfile = 'Um�st�n� textov�ho souboru';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Odhl�sit se';

$strModifications = 'Zm�ny byly ulo�eny';
$strModify = '�pravy';
$strMySQLReloaded = 'MySQL znovu-na�tena.';
$strMySQLSaid = 'MySQL hl�s�: ';
$strMySQLShowProcess = 'Zobraz procesy';
$strMySQLShowStatus = 'Uk�zat MySQL runtime informace';
$strMySQLShowVars = 'Uk�zat MySQL syst�mov� prom�nn�';

$strName = 'N�zev';
$strNbRecords = '��dk�';
$strNext = 'Dal��';
$strNo = 'Ne';
$strNoDatabases = '��dn� datab�ze';
$strNoDropDatabases = 'P��kaz "DROP DATABASE" je vypnut�.';
$strNoModification = '��dn� zm�na';
$strNoPassword = '��dn� heslo';
$strNoPrivileges = '��dn� privilegia';
$strNoRights = 'Nem�te dostate�n� pr�va na proveden� t�to akce!';
$strNoTablesFound = 'V datab�zi nebyla nalezena ani jedna tabulka.';
$strNotNumber = 'Toto nen� ��slo!';  
$strNotValidNumber = ' nen� platn� ��slo ��dku!'; 
$strNoUsersFound = '��dn� u�ivatel nenalezen.';
$strNull = 'Nulov�';
$strNumberIndexes = ' Po�et roz���en�ch index� ';

$strOftenQuotation = '�asto uvozuj�c� znaky. OPTIONALLY znamen�, �e pouze pole typu CHAR a VARCHAR jsou uzav�eny do "uzav�rac�ch " znak�.';
$strOptimizeTable = 'Optimalizovat tabulku';
$strOptionalControls = 'Voliteln�. Ur�uje jak zapisovat nebo ��st speci�ln� znaky.';
$strOptionally = 'Voliteln�';
$strOr = 'nebo';
$strOverhead = 'Nav�c'; 

$strPartialText = 'Zkr�cen� texty';
$strPassword = 'Heslo';
$strPasswordEmpty = 'Heslo je pr�zdn�!';
$strPasswordNotSame = 'Hesla nejsou stejn�!';
$strPHPVersion = 'Verze PHP';
$strPmaDocumentation = 'Dokumentace phpMyAdmina';
$strPos1 = 'Za��tek';
$strPrevious = 'P�edchoz�';
$strPrimary = 'Prim�rn�';
$strPrimaryKey = 'Prim�rn� kl��';
$strPrinterFriendly = 'Verze ur�en� pro tisk';
$strPrintView = 'N�hled k vyti�t�n�';
$strPrivileges = 'Privilegia';
$strProducedAnError = 'vytvo�il chybu.';
$strProperties = 'Vlastnosti';

$strQBE = 'Dotaz podle p��kladu';
$strQBEDel = 'p�idat';
$strQBEIns = 'smazat';
$strQueryOnDb = 'SQL dotaz na datab�zi ';

$strReadTheDocs = 'P�e�ti dokumentaci';
$strRecords = 'Z�znam�';
$strReloadFailed = 'Znovuna�ten� MySQL selhalo.';
$strReloadMySQL = 'Znovuna�ten� MySQL';
$strRememberReload = 'Nezapome�te reloadovat server.';
$strRenameTable = 'P�ejmenovat tabulku na';
$strRenameTableOK = 'Tabulka %s byla p�ejmenov�na na %s';
$strRepairTable = 'Opravit tabulku';
$strReplace = 'P�epsat';
$strReplaceTable = 'P�epsat data tabulky souborem';
$strReset = 'P�vodn� (reset)';
$strReType = 'Napsat znovu';
$strRevoke = 'Zru�it';
$strRevokeGrant = 'Zru�it povolen� p�id�lovat pr�va';
$strRevokeGrantMessage = 'Bylo zru�eno privilegium p�id�lovat pr�va pro';
$strRevokeMessage = 'Byla zru�ena pr�va pro';
$strRevokePriv = 'Zru�it pr�va';
$strRowLength = 'D�lka ��dku'; 
$strRows = '��dk�'; 
$strRowsFrom = '��dk� za��naj�c� od';
$strRowSize = ' Velikost ��dku ';
$strRowsStatistic = 'Statistika ��dk�'; 
$strRunning = 'b��c� na ';
$strRunQuery = 'Prov�st dotaz';

$strSave = 'Ulo�';
$strSelect = 'Vybrat';
$strSelectFields = 'Zvol pole (alespo� jedno):';
$strSelectNumRows = 'v dotazu';
$strSend = 'Po�li';
$strSequence = 'Sekv.';
$strServerChoice = 'V�b�r serveru';
$strServerVersion = 'Verze serveru'; 
$strSetEnumVal = 'Pokud je pole typu "enum" nebo "set", zad�vejte hodnoty v n�sleduj�c�m form�tu: \'a\',\'b\',\'c\'...<br />Pokud pot�ebujete zadat zp�tn� lom�tko ("\") nebo jednoduch� uvozovky ("\'") mezi t�mito hodnotami, napi�te p�ed n� zp�tn� lom�tko (p��klad: \'\\\\xyz\' nebo \'a\\\'b\').';
$strShow = 'Zobraz';
$strShowingRecords = 'Ukazuji z�znamy ';
$strShowPHPInfo = 'Zobrazit informace o PHP';
$strShowThisQuery = ' Zobrazit zde tento dotaz znovu ';
$strSingly = '(po jednom)';
$strSize = 'Velikost'; 
$strSort = '�adit';
$strSpaceUsage = 'Vyu�it� m�sta'; 
$strSQLQuery = 'SQL-dotaz';
$strStatement = '�daj'; 
$strStrucCSV = 'CSV data';
$strStrucData = 'Strukturu a data';
$strStrucDrop = 'P�idej \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV data pro Ms Excel';
$strStrucOnly = 'Pouze strukturu';
$strSubmit = 'Ode�li';
$strSuccess = 'Tv�j SQL-dotaz byl �sp�n� vykon�n';
$strSum = 'Celkem'; 

$strTable = 'Tabulka ';
$strTableComments = 'Koment��e k tabulce';
$strTableEmpty = 'Jm�no tabulky je pr�zdn�!';
$strTableMaintenance = ' �dr�ba tabulky ';
$strTables = '%s tabulek';
$strTableStructure = 'Struktura tabulky';
$strTableType = 'Typ tabulky';
$strTerminatedBy = 'ukon�en';
$strTextAreaLength = ' Toto pole mo�n� nep�jde <br />(kv�li d�lce) upravit ';
$strTheContent = 'Obsah tv�ho souboru byl vlo�en';
$strTheContents = 'Obsah souboru p�ep�e obsah zvolen� tabulky v t�ch ��dc�ch, kde je identick� prim�rn� nebo unik�tn� kl��.';
$strTheTerminator = 'Ukon�en� pol�.';
$strTotal = 'celkem';
$strType = 'Typ';

$strUncheckAll = 'Od�krtnout v�e';
$strUnique = 'Unik�tn�';
$strUpdatePassMessage = 'Bylo zm�n�no heslo pro';
$strUpdatePassword = 'Zm�nit heslo';
$strUpdatePrivMessage = 'Byla zm�n�na privilegia pro';
$strUpdateQuery = 'Aktualizovat dotaz';
$strUsage = 'Pou��v�'; 
$strUseBackquotes = 'Pou��t zp�tn� uvozovky u jmeno tabulek a pol�';
$strUser = 'U�ivatel';
$strUserEmpty = 'Jm�no u�ivatele je pr�zdn�!';
$strUserName = 'Jm�no u�ivatele';
$strUsers = 'U�ivatel�';
$strUseTables = 'Pou��t tabulky';

$strValue = 'Hodnota';
$strViewDump = 'Uka� dump (schema) tabulky';
$strViewDumpDB = 'Uka� dump (schema) datab�ze';

$strWelcome = 'V�tej v ';
$strWithChecked = 'Za�krtnut�:';
$strWrongUser = '�patn� u�ivatelsk� jm�no/heslo. P��stup odep�en.';

$strYes = 'Ano';

// To translate
$strIdxFulltext = 'Fulltext';  //to translate 
$strRunningAs = 'as';
$strShowAll = 'Show all'; // to translate
$strShowCols = 'Show columns';
$strShowTables = 'Show tables';
$strAPrimaryKey = 'A primary key has been added on %s';//to translate
$strAnIndex = 'An index has been added on %s';//to translate
$strFieldHasBeenDropped = 'Field %s has been dropped';//to translate
$strFieldsEnclosedBy = 'Fields enclosed by';//to translate
$strFieldsEscapedBy = 'Fields escaped by';//to translate
$strFieldsTerminatedBy = 'Fields terminated by';//to translate
$strIndexHasBeenDropped = 'Index %s has been dropped';//to translate
$strLinesTerminatedBy = 'Lines terminated by';//to translate
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped';//to translate
$strRunSQLQuery = 'Run SQL query/queries on database %s';//to translate
$strStartingRecord = 'Starting record';//to translate
$strTableHasBeenDropped = 'Table %s has been dropped';//to translate
$strTableHasBeenEmptied = 'Table %s has been emptied';//to translate
$strUpdateServer = 'Update server';//to translate
$strUpdateServMessage = 'You have updated the server for %s';//to translate
?>
