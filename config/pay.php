<?php

return [
    'alipay' => [
        'app_id'         => '2016102700769211',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAiLt/v7MwFsFTl19/537TY9NYai3FArofqxb2tc3aLjwAyzhdVdiQRTxouXN9MXgEClBPUnKjsE6SqnCKiGDHEmV/x1s0Br8LiXKNQ+nvLn1Q0BI3ogtPt2A08cpoTG7U5DfinBdJhxJPZLoBYr3OL0dNnBxe3KrBGeUyyF2dYBXb50PQI8QcGzHNlAUIcDwVeT1I23B6TrHWVvJHX4Mu6/a0mHzmIuYkGEAEexbCJtRd9z4YTmdKfCJeWkrEt8T5CuVKkMy2x2//0GIV0H5NonO4EMZQy1dRzY20C1/JSwRZIvzRvleJVTDQkxAiCRwjEA8bpBsVuBc4jcPsVZt5MwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAqmyLlBMkjmm5D31mOPmzYkHvBLVlQCva7fidbM02RZUSHdoDxS/PcNouJDYcw8mGaYcjp1A5QBIHLCobLaiHrkxwqIlljzctbraiobk9IjN2ztz+iV1yeEcw7syjT1plVq+3gV4nWs05qo9PBBNXQAkNshHshDtfR7lH6Fd7FD09Gc/xOttuhtFwnzRWSUGWyv07KJNddYUbTgEMTlut6JUw2JOz52Sqy/Tc77pQ0g12a7YBSfsXfIu9yUPJICTuaYGiB+sMWDvSFu2ognAHa5cImX7dxtabbuUHda2GkrNgGaCgHdP1EEuAH7376Lk6s3iFjDVntd/QjaWPhIPiHQIDAQABAoIBAQCAn0eAzCnM6fHnxOa/nYVLZSO11AnEstSawgZeNUr+nRF9QiuSSREwxRoJ7mUrRw+Q2ZOJFT0AJBsRs/2rKgStAbgNGxVxT12Ur3ZyxFFlXJ4QZi4dEk/wgxplQEEJBNpy4E+I7byaBUW+ekZSdx5kj/CsMmblLcItaaLhshSMIqQCwv6P8bPdM7zfF0THVTZzhLVk+iYjXhizOFx+2iMLk25CYjB159Asj5ea8RIzJ7YPzcCt5WVMn9URvx+13bl+qkOVEJg3vpCsWqFrzXPeHCT6D4Q2/IWe1HrLz/VTxZK/ytbXa5GnZE74pB7SJ0j3n79VWsvVdIOwkrXiVPeBAoGBAPd+LX4VCkjiwZclendJfhc4/VovLIfXuqtST3OjPT7An6k4m82twU5nX+H9FX/t1iJ5RmBq6zsJTHFiRG/fLzaknHv2Qv9u05aKY51B+hBPOtBt0GGQkaHLcOsq0FoIjseU2AGoQwvu8bAA2DihAyxyyO1E7hEoWQiWwFLKEbBxAoGBALBIMn4leVj9SFOGOtRK6iwVJ+ciilrHbuO0bej/zN2ol98QXyZkkwFcZS0+D3smWf+tzq7BHXJBWQXxUmvZnVSpuVcjU0lkouRINp+TEhYlgBzE+6SZuMCQd/aSC+eR3ESac4RaCiP2adsRSkcKmz1jXqRfnTT+C1BzvcvMuOJtAoGAcSq6BI/8Xu2I1eMmR4tMY7QEbQtrEkZ7rcD6YYcAB0Su/QLMg1TzMjWkq0I9ZXzMUIEhxA6/twP+d04WuwzTmunUP/6QDhqQF6L5/7tea7y+yPWdti8T2GadIHs4QCLvnqUZzFAzMC63RuJr/CDrwZRO+edt8FyBsaK1GGYbhpECgYAa4nfo6zgtjTtZmbAhLme2X2edhZQKMj5ENgFJNrH84DiBSZLpXQ9adsfrdXqQ8pFpQA20czlVcofsMxi54A9xmQzuMDIEkHeTTzwdbCWnAQMf4B7sxJD7tUzGaxGruIAaal/RwJWpVGxif6mPWhvA6gXGFdr4+QGqvGwmx8supQKBgCFMF3cTVOQK8RdoMNu73rPgHZsu7UUChuAR3UGQ2jsPQkoyPAIbpr85Os9lZl4XP251D8HDcRJK0otYBfV9QXtCMX27CpD5y580+ItvoTZSfFVPHmI3K87kLng8paGUwenmZU+T8HRQeAVHnGbzjgmubibQTq188z1WuHnf9aq8',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
