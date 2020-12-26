<?php

namespace App\Http\Requests;


use App\Models\Demande;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class DemandeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'email', Rule::unique((new Demande)->getTable())->ignore(auth()->id())],
            'recuCCP' => ['required','image','mimes:jpg,jpeg,png']
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Votre nom est obligatoire',
            'prenom.required' => 'Votre prénom est obligatoire',
            'email.required' => 'Veuillez insérer votre adresse mail',
            'email.email' => 'Veuillez insérer une adresse mail valide',
            'email.unique' => "Un compte avec cette adresse e-mail existe déjà! Vous pouvez renouveler votre abonnement dans les paramètres de votre compte",
            'recuCCP.required' => "un reçu de paiement est nécessaire pour s'inscrir!",
            'recuCCP.image' => "votre fichier n'est pas valide! Veuillez insérer une image : .jpg/.png/.jpeg",
        ];
    }
}
