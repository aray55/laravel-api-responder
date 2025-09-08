# Laravel API Response Helpers

![Laravel](https://img.shields.io/badge/Laravel-Framework-red)  
![PHP](https://img.shields.io/badge/PHP-8.2%2B-blue)  
![License](https://img.shields.io/badge/License-MIT-green)  

A simple way to standardize **API responses in Laravel** using helper classes.  
Keeps your API **consistent, clean, and easy to consume**.

---

## 📂 Setup

Run the following commands to create the helpers:

```powershell
mkdir app/Helpers
New-Item -Path "app\Helpers\StatusCodes.php" -ItemType File -Force
New-Item -Path "app\Helpers\ApiResponse.php" -ItemType File -Force

For controllers:

mkdir -p app/Http/Controllers/Api/V1
php artisan make:controller Api/V1/UserController --api
```

---

## 🛠 Usage

```php
// Success response
return ApiResponse::success('Users fetched successfully', $users);

// Error response
return ApiResponse::error('User not found', [], StatusCodes::HTTP_NOT_FOUND);
```

---

## 📊 Example Response

```json
{
  "status": "success",
  "code": 200,
  "message": "Users fetched successfully",
  "data": [],
  "errors": [],
  "meta": []
}
```

---

## 📌 License

MIT
