<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'category_id',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->orWhere('first_name', $keyword)
                  ->orWhere('last_name', $keyword)
                  ->orWhere('email', $keyword)
                  ->orWhereRaw('CONCAT(last_name, first_name) = ?', [$keyword])

                  ->orWhere('first_name', 'like', '%' . $keyword . '%')
                  ->orWhere('first_name', 'like', '%' . $keyword . '%')
                  ->orWhere('email', '%' . $keyword . '%')
                  ->orWhereRaw('CONCAT(last_name, first_name) like ?', ['%' . $keyword . '%'])
                  ->orWhereRaw('CONCAT(last_name, first_name) like ?', ['%' . $keyword . '%'])
                  ->orWhereRaw('CONCAT(last_name, " ", first_name) like ?', ['%' . $keyword . '%'])
                  ->orWhereRaw('CONCAT(last_name, "　", first_name) like ?', ['%' . $keyword . '%']);
            });
        }
    }

    public function scopeGenderSearch($query, $gender)
    {
        if (!empty($gender) && $gender != '3') {
            $query->where('gender', $gender);
        }
    }

    public function scopeCategorySearch($query, $categoty_id)
    {
        if (!empty($categoty_id)) {
            $query->where('category_id', $categoty_id);
        }
    }

    public function scopeDateSearch($query, $date)
    {
        if (!empty($date)) {
            $query->whereDate('updated_at', $date);
        }
    }
} 