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
    <div>
	{{ $name }}
    </div>
    <div>
	@foreach($languages as $language)
	    <li>
		{{ $language }}
	    </li>
	@endforeach
    </div>
</body>
</html>
