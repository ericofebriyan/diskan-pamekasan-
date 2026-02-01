<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

try {
    if (!Schema::hasColumn('beritas', 'tanggal_berita')) {
        Schema::table('beritas', function (Blueprint $table) {
            $table->date('tanggal_berita')->nullable()->after('kategori');
        });
        echo "Successfully added tanggal_berita column.\n";
    } else {
        echo "Column tanggal_berita already exists.\n";
    }
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
