$ErrorActionPreference = "Stop"
$Url = "https://windows.php.net/downloads/releases/php-8.3.29-Win32-vs16-x64.zip"
$ZipPath = "bin/php_new.zip"
$DestPath = "bin/php_new"

Write-Host "Downloading PHP 8.3 form $Url..."
Invoke-WebRequest -Uri $Url -OutFile $ZipPath

Write-Host "Extracting PHP..."
Expand-Archive -Path $ZipPath -DestinationPath $DestPath -Force

Write-Host "Configuring php.ini..."
Copy-Item -Path "$DestPath/php.ini-development" -Destination "$DestPath/php.ini" -Force

$ini = Get-Content "$DestPath/php.ini"
$ini = $ini -replace ';extension_dir = "ext"', 'extension_dir = "ext"'
$ini = $ini -replace ';extension=curl', 'extension=curl'
$ini = $ini -replace ';extension=fileinfo', 'extension=fileinfo'
$ini = $ini -replace ';extension=gd', 'extension=gd'
$ini = $ini -replace ';extension=mbstring', 'extension=mbstring'
$ini = $ini -replace ';extension=openssl', 'extension=openssl'
$ini = $ini -replace ';extension=pdo_mysql', 'extension=pdo_mysql'
$ini = $ini -replace ';extension=pdo_sqlite', 'extension=pdo_sqlite'
$ini | Set-Content "$DestPath/php.ini"

Write-Host "Switching PHP versions..."
if (Test-Path "bin/php_old") { Remove-Item -Recurse -Force "bin/php_old" }
if (Test-Path "bin/php") { Rename-Item "bin/php" "php_old" }
Rename-Item $DestPath "php"

# Cleanup
Remove-Item $ZipPath

Write-Host "PHP Upgrade Complete. New Version:"
& "bin/php/php.exe" -v
