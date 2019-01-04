@echo off
@echo Arguments that contain spaces spaces must me enclosed in "".

:promptname
set /p Nm= Enter new module name (e.g. Alerts): 

if [%Nm%]==[] goto checkname

:promptdesc
set /p Ds= Enter new module description (e.g. "User alerts plugin"):

if [%Ds%]==[] goto checkdesc

php -f _build-new-module/index.php name=%Nm% group=%Gp% description=%Ds%

pause
goto :eof


:checkname
@echo You must enter a name
pause
goto :promptname

:checkdesc
@echo You must enter a description
pause
goto :promptdesc

