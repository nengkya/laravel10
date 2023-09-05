<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dosen</title>
</head>
<body>
    <div>
	use App/Http/Controllers/DosenController;
    </div>
    <div>
	Route::get('dosen', [DosenController::class, 'index']);
    </div>
</body>
</html>
