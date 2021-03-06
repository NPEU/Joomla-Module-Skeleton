@echo off
@echo Arguments that contain spaces spaces must me enclosed in "".

:promptowner
set /p Ow= Enter owner name (e.g. NPEU): 

if [%Ow%]==[] goto checkowner

:promptname
set /p Nm= Enter new module name (e.g. Alerts): 

if [%Nm%]==[] goto checkname

:promptdesc
set /p Ds= Enter new module description (e.g. "User alerts module"):

if [%Ds%]==[] goto checkdesc

php -f _build-new-module/index.php owner=%Ow% name=%Nm% description=%Ds%

pause
goto :eof


:checkowner
@echo You must enter an owner name
pause
goto :promptowner

:checkname
@echo You must enter a name
pause
goto :promptname

:checkdesc
@echo You must enter a description
pause
goto :promptdesc

