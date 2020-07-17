<?php

return [
    'alipay' => [
        'app_id'         => '2016102700769211',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAiLt/v7MwFsFTl19/537TY9NYai3FArofqxb2tc3aLjwAyzhdVdiQRTxouXN9MXgEClBPUnKjsE6SqnCKiGDHEmV/x1s0Br8LiXKNQ+nvLn1Q0BI3ogtPt2A08cpoTG7U5DfinBdJhxJPZLoBYr3OL0dNnBxe3KrBGeUyyF2dYBXb50PQI8QcGzHNlAUIcDwVeT1I23B6TrHWVvJHX4Mu6/a0mHzmIuYkGEAEexbCJtRd9z4YTmdKfCJeWkrEt8T5CuVKkMy2x2//0GIV0H5NonO4EMZQy1dRzY20C1/JSwRZIvzRvleJVTDQkxAiCRwjEA8bpBsVuBc4jcPsVZt5MwIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAlmpoPMB2J15Po0DCJIR6fg4DZIQjRnevFhTOmKHAPmtNSZwIWSLv4dYarIWFOhYS0ktPGdEbYikswoZDGW0r+2oulAVIl/b94yZz6n4YkmSqOeg3GeeswqIJCCrDPDSRH00iH3Yuu/Xr8U0d/6feUUQ2PmLfKVy2Ux6qIRXTZzRaojexsGoaEE7c/+meO5P5uE9le2p0cJUtBZKFsAiD5K/LoKRJxMYl/nrOCM+k3OVZoxBaVwuHkw6dXycRWXDM1qafAowlcKpQUEzqOPtUjwvfkjmXTQ51x2b19C0UM0sLe2m+oU8yhfU7L84BzUPxq0+QV0HX/o0uKn7kb8BABQIDAQABAoIBAQCDqO5GxxxlB1tkBaoqNr/VmMSFdlg+NULPbDUOSv8wY9IJ7YctJrSclEFS46ijGHEvG/ZIHc3/VRU1zDnthq7p6Z6NuDY7tlmzO5RZHDi741tRRp78kNqanySSvoOYLlcc8/I7YcI0imUVGTB5+GFT9wYYA4lc9ictiHjYbvdVrJiK5tpmUn8CzppEPLbd1OiPOyAw9t6PWPfkx4R86RzoyeVaSCTP5vDjQYPFlasjWDH0nR/hiMUan72GYp2TR0R9OSs3f0EDRFq9sYPbU5D99dvkZeYcLiISJuWC1Uf8jHmvJda3DiZsuMBeq4KAnTPDMQvYDVg2fTbdUcDJsr29AoGBANKOfszcp2VYS63RVGRufokfta0LQZk2RXuXjIrxfQphFmmuyCSWviCm2nTRtTHEh1XaAKFyrbyPBHq4vNVSQ0ZkbSptD/NTzBYocMQ4ModKR+EsNmoQZUxaSgCMsooy49Hq4Jkgs8PzDq6UtqZx8RaHxsn7jU1A2U6aLhg+TR8vAoGBALbhDTEmsMO7+PgOOEgcQth2tB17J8GWwLVqgmkPJF/09vom0OYgdiWLPVXlA+2GBH9DawRW03YcsSUbwVvnvTk9eRPUpuD1Bh1DqBtlY3VDRXJuRO1ZasJrBAyyLOqgrocvZ16KPPgGKUGtEBhpdUwNEfTiqNFAbNgasNVaXGcLAoGBAJZxLfReLFTjE5+sE6p2sH51Y6+yfTplZpv6GnckOH10BTmZonNSKaLW1Pvm4poem7whuZWhhLVXUpIE8RdSYbMoCj/oER+A3i9u0bPBm4jC8DzZBEAgWuCFGp7t6JuJ5PGV6sg+b3MwdWsT4rVmcCXy+XxT+hAap6nby9eSnDQNAoGAeGw7dpkmns0hhZ4/e2R4s/d+ZUdah4SQgyWOmEWrSzCQjWqP9ml7wv8sNWpnqrmsLm0jhCj0d/suvuPG8JDprk6HcwJ9nPZbv1t00A10b5wLl+16n9xYi4tSkFWndBy4sDYL2FopCZ1s/11JkvmmjpywrVOvnJLS2X7B4Mvuur8CgYEAwVEWVkYszZM0O/aKlGD3o//gBC8u4/yEdWNOVcBVhRec39NwIU2phoLpjDneaFSeWMiyjF8u2DdYFKKzNpzGhERqgYe2uTozTT5N5eRSJOSwMtCSF6z5N8fKZaTCx6V4JIQXL8gRigikhy2b4/Ew2Ijh1CuqJc+QqSdS5SHNBnM=',
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
