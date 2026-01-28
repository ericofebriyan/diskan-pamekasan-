$projectDir = "$PSScriptRoot\temp_laravel"
$phpExe = "$PSScriptRoot\bin\php\php.exe"

if (-not (Test-Path $projectDir)) {
    Write-Error "Project directory not found: $projectDir"
    exit
}

if (-not (Test-Path $phpExe)) {
    Write-Warning "PHP executable not found at $phpExe. Trying global 'php'..."
    $phpExe = "php"
}

Write-Host "Starting Laravel Server..."
Start-Process -FilePath "powershell" -ArgumentList "-NoExit", "-Command", "cd '$projectDir'; & '$phpExe' artisan serve"

Write-Host "Starting Vite Server (Assets)..."
Start-Process -FilePath "powershell" -ArgumentList "-NoExit", "-Command", "cd '$projectDir'; npm run dev"

Write-Host "Application starting..."
Write-Host "You can access the website at: http://127.0.0.1:8000"
