// Base de datos principal
$users = DB::table('users')->get();

// Base Banana
$clientes = DB::connection('banana')->table('clientes')->get();

// Base General
$cooperativas = DB::connection('general')->table('cooperativas')->get();
