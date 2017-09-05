<?php
$LANG=array(
//inc.func.php
104=>'Click to show',
105=>'Hide column',
106=>'grid width if -1 hide',
107=>'filter data',
108=>'Clear all filter',
109=>'Save',
110=>'Cancel',
111=>'Table',
112=>'View',
113=>'Sequence',
114=>'Function',
115=>'Close tool window',
116=>'Are you sure to change DB engine to %0% for selected %1%',
117=>'Are you sure to DROP selected %0%',
118=>'Are you sure to Truncate Cascade selected %0%',
119=>'Are you sure to EMPTY selected %0%',
120=>'Are you sure to Drop Cascade selected %0%',
121=>'No %0% selected',
122=>'Info',
123=>'Data',
124=>'Remove sort',
125=>'Sum of above',
126=>'Click to hide',
//conn.php
1104=>'Connect',
1105=>'SIDU Connections',
1106=>'Session Expired',
1108=>'Engine',
1109=>'Host Address',
1110=>'User Name',
1111=>'Password',
1112=>'Port',
1113=>'Use js to encrypt password',
1114=>'Database(s)',
1115=>'Make sure DB folder and files<br>are <b>rw</b>-able by apache server',
1116=>'Leave blank connect to all DBs',
1117=>'Charset',
1123=>'Err %0% - This is not a valid SIDU connection file',
1124=>'Err %0% - SIDU saved connections not found',
1125=>'New Connection',
1126=>'Connection Failed',
1127=>'What is your database name?',
1128=>'Default Charset',
//db.php
1401=>'Create Table',
1402=>'Export Data',
1404=>'Import Data',
1406=>'Table Tools',
1409=>'Are you sure to EMPTY selected tables?',
1410=>'Empty Selected Tables',
1412=>'Are you sure to DROP selected %0%?',
1413=>'Drop Selected Objects',
1414=>'Search Database',
1416=>'Table',
1417=>'View',
1418=>'Sequence',
1419=>'Function',
1420=>'Database',
1421=>'Encoding',
1422=>'Size',
1423=>'Owner',
1424=>'Tablespace',
1425=>'Schema',
1426=>'Seq',
1427=>'Group',
1428=>'Tab',
1429=>'View',
1430=>'Func',
1431=>'Updated',
//1432=>array()//english no need
1433=>'Info',
//db-cmp.php
1451=>'Database Compare',
1452=>'Tasks',
1453=>'Table name scan',
1454=>'Table desc',
1455=>'Data count',
1456=>'Check data on TO:',
1457=>'Leave blank if name same as FM ',
1458=>'Sort data by',
1459=>'Show only errors',
1460=>'FM tables in',
1461=>'All tables',
1462=>'OR PRIMARY-KEY',
1463=>'Refresh',
1464=>'Start',
1465=>'Start Compare',
1466=>'Check data on single table only',
1467=>'Table TO: %0% not found',
1468=>'row count',
1469=>'row count same',
1470=>'info not same',
1471=>'table desc same',
1472=>'Now Data compare',
1473=>'Great! Data Same',
1474=>'Click here to check next %0% rows',
1475=>'No more data',
1476=>'Table found',
1477=>'Table not found',
1478=>'SIDU DB Compare now starts',
1479=>'Please do not close this window before compare finishes',
//exp.php
1501=>'Export',
1502=>'Table',
1503=>'View',
1504=>'No %0% selected',
1505=>'What to export',
1506=>'Drop %0% SQL',
1507=>'%0% Structure',
1508=>'%0% Data',
1509=>'Save as File Type',
1510=>'Zip and Download',
1511=>'More settings for %0%',
1512=>'If export data in SQL',
1513=>'Replace \ with \\\\ for import to MySQL or Postgres 7.*~9.0, otherwise do not tick',
1514=>'If export data in CSV (seperator must be unique)',
1515=>'Cut Cols with: ',
1516=>'Cut Rows with: ',
1517=>'Data enclosed by: ',
1518=>'Replace newLine with \n',
//his.php
1701=>'Delete ID less than',
1702=>'Delete selected ID',
1703=>'Delete ID bigger than',
1704=>'Delete All History',
1705=>'SYS',
1706=>'Err',
1707=>'Data',
1708=>'Time',
1709=>'Log',
1710=>'Text',
//home.php
2101=>'<u>Q</u>uit SIDU',
2102=>'<u>N</u>ew Conn',
2103=>'List of Servers Connected',
2104=>'Click to Disconnect',
2105=>'Open in new window',
2106=>'Char',
2107=>'SIDU only allows IP from',
2108=>'There is no firewall setup',
2109=>'Your current IP: %0% -- You can update SIDU firewall at <u>last line</u> of file <b>%1%</b>',
2110=>'Show|Hide',
2111=>'SIDU Menus',
2112=>'Full list of hot keys',
2113=>'Key',
2114=>'Key then Enter',
2115=>'A : Run all SQLs and show only first data
B : SIDU welcome page and menus
C : Chart Vertical Data
D : Chart V2 Data
E : Export
F : Find
G : Go
H : History
I : Import
J : 
K : Kill process
L : Load SQL file
M : Run selected SQLs and show all results
N : New connection
O : SIDU option
P : Show process list (MySQL)
Q : Quit SIDU
R : Run selected SQLs and show only first data
S : Save data
T : Template
U : User management
V : Show variables
W : Windows refresh
X : Drop tables | Delete data
Y : Data filter
Z : Switch Data Grid | HTML Text
/ : Resize left window
\ : Resize SQL|Result window
+ : Create DB,schema,table | Add data (or =)
- : Empty table
< : Page back
> : Page next
[ : Page first
] : Page last',
2116=>'Thank-you list',
2117=>'Website: &nbsp;&nbsp;',
2118=>'Feedback',
//imp.php
2201=>'NO Database Selected',
2202=>'No Schema Selected',
2203=>'SIDU CSV Import',
2204=>'Please select a table',
2205=>'Table',
2206=>'Fields',
2207=>'File',
2209=>'Import settings',
2210=>'Seperate fields with',
2211=>'Seperate Rows with',
2212=>'If first or last char of each data is \' or " remove it',
2213=>'Replace \r\n with newLine',
2214=>'If update, key fields',
2215=>'Empty Table before Importing Data',
2216=>'Merge extra data for last field in each line if not match',
2217=>'Stop import when error found',
2218=>'Import',
2219=>'Please select a table',
2220=>'Field = %0% not in original table',
2221=>'Update: key = %0% not in fields list',
2222=>'Data file type must be txt or csv',
2223=>'File size max %0%',
2224=>'No CSV file uploaded',
2225=>'SIDU import now starts',
2226=>'Please do not close this window before import finishes',
2227=>'Import finishes, you can close this window now',
2228=>'Error found on Line %0%',
2229=>'Import stopped at Error, please check data and import again',
2230=>'You can close this window now',
//menu.php
2403=>'info',
2404=>'Tables',
2405=>'Views',
2406=>'Funcitons',
2407=>'Procedures',
2408=>'Types',
2409=>'Sequence',
//option.php
2700=>'SIDU Options',
2701=>'Display Language',
2702=>'Page size in Data|SQL result',
2703=>'-1 no limit to show all',
2704=>'Group objects by first x chars',
2705=>'Sort object in',
2706=>'One Sort',
2707=>'Two Sorts',
2708=>'Sort table data in',
2709=>'Toolbar text in SQL window',
2710=>'Off',
2711=>'On',
2712=>'Toolbar text in Data window',
2713=>'Log background SQL',
2714=>'Log SQL error',
2715=>'Log SQL in SQL window',
2716=>'Log 5 rows data before edit',
2717=>'handy data insert',
2718=>'show OID',
2719=>'Save',
2720=>'Toolbar large button',
//sql.php
3101=>'Export Result',
3102=>'Show Chart: Data Vertical',
3103=>'Hide',
3104=>'%0% row(s) affected',
3105=>'%0% row(s) returned',
3106=>'%0% taken',
3107=>'Show Chart: Data Horizontal',
3108=>'Show Chart: Data V2',
//sqls.php
3401=>'SIDU Option',
3402=>'DB User',
3403=>'Show Process List',
3404=>'Quit',
3405=>'Welcome Page',
3406=>'New Connection',
3407=>'Con<u>n</u>',
3408=>'Load SQL',
3409=>'SQ<u>L</u>',
3410=>'Run All SQL',
3411=>'Run<u>A</u>ll',
3412=>'Run Selected SQL',
3413=>'<u>R</u>un',
3414=>'Run SQL show Multiple',
3415=>'<u>M</u>ulti',
3416=>'History',
3417=>'<u>H</u>is',
3418=>'Rotate Tool',
3420=>'Resize Left Frame',
3421=>'Resize SQL Frame',
3422=>'Variables',
3423=>'<u>V</u>ars',
3424=>'Flush All',
3425=>'Flush',
3426=>'SQL Templates',
3427=>'<u>T</u>emp',
3428=>'SIDU Options - Fn+o',
3429=>'<u>O</u>ption',
3430=>'Database User - Fn+U',
3431=>'<u>U</u>ser',
3432=>'Load a file into SQL window',
3433=>'Cancel',
3434=>'Load',
3435=>'Close',
//tab.php
3701=>'Export Data',
3703=>'Import Data',
3706=>'Empty Table',
3707=>'Are you sure to EMPTY Table: %0%',
3709=>'Show Stats',
3710=>'Are you sure to DROP: %0%',
3712=>'Hide Column',
3713=>'Switch Grid|Text',
3714=>'Save Selected Rows',
3715=>'Delete Selected Rows',
3716=>'Add New Row',
3717=>'if -1 show all',
3718=>'Go',
3719=>'First Page',
3720=>'Back Page',
3721=>'Total %0% Rows',
3722=>'Next Page',
3723=>'Last Page',
3724=>'Field',
3725=>'Type',
3726=>'Default',
3727=>'Key',
3728=>'Other',
3729=>'distinct value count',
3730=>'val',
3731=>'min value or length',
3732=>'min',
3733=>'max value or length',
3734=>'max',
3735=>'average value or length',
3736=>'avg',
3737=>'Comment',
3738=>'Table Tools',
//tab-new.php
4101=>'Create New Table in DB',
4102=>'Create Table',
//temp.php
4401=>'',
//user.php
4701=>'MySQL User',
4702=>'Global Privileges',
4703=>'DB-Tab Privileges',
4704=>'You do not have access to this page',
4705=>'Global Privileges for',
4706=>'Data',
4707=>'Max limits',
4708=>'0 : no limit',
4709=>'Administration',
4710=>'Structure',
4711=>'With Grant',
4712=>'Please <b>Flush Privileges</b> after you <b>Save</b> above',
4713=>'Save',
4714=>'(un)check All',
4715=>'Save Above DB Accesses',
4716=>'DB - Table Access for',
4717=>'Acess to databases of user %0%',
4718=>'Save then Click on database name to set Table access',
4719=>'Database',
4720=>'Save Above Table Accesses',
4721=>'Acess to tables of database %0%',
4722=>'Set access to tables only. For <b>column</b> access, please DIY!',
4723=>'Table',
4724=>'Do not over-use Mysql Access tables, which need time to maintain.<br>If you really want to set column access, edit following and run in SQL',
4725=>'OR simply manually insert|delete in table: %0%',
4726=>'MySQL User %0% Dropped',
4727=>'Passowrds not same',
4728=>'MySQL User %0% Saved',
4729=>'Create, Edit or Drop MySQL Users',
4730=>"Please do NOT use <b class='red'>SPACE</b> or <b class='red'>'</b>, these 2 chars will be removed",
4731=>'MySQL User',
4732=>'Create a New User',
4733=>'User Name',
4734=>'From Host',
4735=>'Password',
4736=>'Re-type Password',
4737=>'Drop User',
4738=>'Edit User',
4739=>'Passwords are not shown in above form for the existing users.<br>To remove user\'s password, simply click <b>Edit User</b> without passwords',
);
?>
