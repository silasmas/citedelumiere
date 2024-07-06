<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UrlValidationRule implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    // public function validate(string $attribute, mixed $value, Closure $fail): void
    // {
    //     //
    // }
    public function passes($attribute, $value)
    {
        // Valide si la valeur est une URL valide
        return filter_var($value, FILTER_VALIDATE_URL) !== false;
    }

    public function message()
    {
        // return 'Le champ :attribute doit être une URL valide.';
        return 'Le champ lien de la vidéo doit être une URL valide.';
    }
}
