<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Artist;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'gender',
        'phone',
        'address',
        'dob',
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

    public function artist()
    {
        return $this->hasOne(Artist::class);
    }

    public function role(): string
    {
        return $this->role; // Assuming 'role' is a column in your users table
    }
    
    public function getPictureAttribute(){
        // Check if the user has an associated artist and an image
        if($this->artist && $this->artist->image != null){
            return asset('backend/avater/'.$this->artist->image);
        } else {
            return asset('backend/avatar/user.jpg');
        }
    }
    
}
