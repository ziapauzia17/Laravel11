<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function updateProfileImage($image)
    {
        // Tentukan directory penyimpanan
        $directory = 'images/profiles';

        // Cek apakah folder sudah ada, jika belum, buat folder
        if (!Storage::disk('public')->exists($directory)) {
            Storage::disk('public')->makeDirectory($directory);
        }

        // Coba simpan gambar ke dalam folder
        try {
            $path = $image->store($directory, 'public');
            if ($path) {
                $this->image = $path;
                $this->save();
            } else {
                throw new \Exception("Failed to store image path");
            }
        } catch (\Exception $e) {
            Log::error('Image upload failed: ' . $e->getMessage());
            throw new \Exception("Image upload failed: " . $e->getMessage());
        }
    }
}
