$ErrorActionPreference = "Stop"
Write-Host "Extracting PHP..."
Expand-Archive -Path bin/php.zip -DestinationPath bin/php -Force
Write-Host "Configuring php.ini..."
Copy-Item -Path "bin/php/php.ini-development" -Destination "bin/php/php.ini" -Force
$ini = Get-Content "bin/php/php.ini"
$ini = $ini -replace ';extension_dir = "ext"', 'extension_dir = "ext"'
$ini = $ini -replace ';extension=curl', 'extension=curl'
$ini = $ini -replace ';extension=fileinfo', 'extension=fileinfo'
$ini = $ini -replace ';extension=gd', 'extension=gd'
$ini = $ini -replace ';extension=mbstring', 'extension=mbstring'
$ini = $ini -replace ';extension=openssl', 'extension=openssl'
$ini = $ini -replace ';extension=pdo_mysql', 'extension=pdo_mysql'
$ini = $ini -replace ';extension=pdo_sqlite', 'extension=pdo_sqlite'
$ini | Set-Content "bin/php/php.ini"
Write-Host "PHP Setup Complete."
