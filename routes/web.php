<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/.well-known/assetlinks.json', function () {
    return response()->json([
        [
            "relation" => ["delegate_permission/common.handle_all_urls"],
            "target" => [
                "namespace" => "android_app",
                "package_name" => "com.example.test",
                "sha256_cert_fingerprints" => [
                    "E5:D7:C9"
                ]
            ]
        ],
        [
            "relation" => ["delegate_permission/common.handle_all_urls"],
            "target" => [
                "namespace" => "android_app",
                "package_name" => "com.example.test.preview",
                "sha256_cert_fingerprints" => [
                    "66:93"
                ]
            ]
        ],
        [
            "relation" => ["delegate_permission/common.handle_all_urls"],
            "target" => [
                "namespace" => "android_app",
                "package_name" => "com.example.test.dev",
                "sha256_cert_fingerprints" => [
                    "AC:FF:AD"
                ]
            ]
        ]
    ]);
});