@echo off
tasklist /FI "IMAGENAME eq xampp-control.exe" | findstr /I "xampp-control.exe" && (
    taskkill /IM chrome.exe
    taskkill /IM sublime_text.exe
    cd "C:\xampp"
    call apache_stop.bat
    call mysql_stop.bat
    taskkill /f /IM xampp-control.exe
) || (
    start C:\xampp\xampp-control.exe
    cd "C:\xampp"
    call apache_start.bat
    call mysql_start.bat
    cd "C:\Program Files\Sublime Text 3"
    start sublime_text.exe
    cd "C:\Program Files (x86)\Google\Chrome\Application"
    start chrome.exe http://localhost/
)
exit