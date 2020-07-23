<?php

namespace App\MediumClone\Transformers;

class UserTransformer extends Transformer
{
    protected $resourceName = 'user';

    public function transform($data)
    {
        return [
            'email'     => $data['email'],
            'token'     => $data['token'],
            'username'  => $data['username'],
            'bio'       => $data['bio'],
            'image'     => $data['image'],
        ];
    }
}