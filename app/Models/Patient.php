<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_p';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Nom_p',
        'Prenom_p',
        'Adresse_p',
        'Date_Naissance_p',
        'Sexe_p',
        'Telephone_p',
        'Email_p',
        'Situation_Familiale',
        'id_imm_assurance',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'Date_Naissance_p' => 'date',
    ];
}
