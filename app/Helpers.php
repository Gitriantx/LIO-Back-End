<?php

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Melihovv\Base64ImageDecoder\Base64ImageDecoder;
use Illuminate\Support\Str;

function uploadBase64Image($base64Image)
{
    $decoder = new Base64ImageDecoder($base64Image, $allowedFormats = ['jpeg', 'png', 'jpg']);
    $decodedContent = $decoder->getDecodedContent();
    $format = $decoder->getFormat();
    $image = Str::random(10) . '.' . $format;
    Storage::disk('public')->put($image, $decodedContent);

    return $image;
}

function getUser($param)
{
    $user = User::where('id', $param)
        ->orWhere('email', $param)
        ->first();

    // $wallet = Wallet::where('user_id', $user->id)->first();
    $user->profile_picture = $user->profile_picture ?
        url('storage/' . $user->profile_picture) : "";
    $user->ktp = $user->ktp ?
        url('storage/' . $user->ktp) : "";
    // $user->balance = $wallet->balance;
    // $user->card_number = $wallet->card_number;
    // $user->pin = $wallet->pin;

    return $user;
}
