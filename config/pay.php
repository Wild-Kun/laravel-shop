<?php

return [
    'alipay' => [
        'app_id' => '2016102700769211',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAiLt/v7MwFsFTl19/537TY9NYai3FArofqxb2tc3aLjwAyzhdVdiQRTxouXN9MXgEClBPUnKjsE6SqnCKiGDHEmV/x1s0Br8LiXKNQ+nvLn1Q0BI3ogtPt2A08cpoTG7U5DfinBdJhxJPZLoBYr3OL0dNnBxe3KrBGeUyyF2dYBXb50PQI8QcGzHNlAUIcDwVeT1I23B6TrHWVvJHX4Mu6/a0mHzmIuYkGEAEexbCJtRd9z4YTmdKfCJeWkrEt8T5CuVKkMy2x2//0GIV0H5NonO4EMZQy1dRzY20C1/JSwRZIvzRvleJVTDQkxAiCRwjEA8bpBsVuBc4jcPsVZt5MwIDAQAB',
        'private_key' => 'MIIEowIBAAKCAQEAkSmEZVX7jY4Tr+pbn68Hku0VChxsgBE3J6NnZZkN19AVhMVeWA5Q1nZimhpWd2A6/Sc/6ME27fbMl7Ex1eVs1j8qMsGXfc5qQabgGxbMemvDmg2Y2BNNpq6lmSjfPxMJoqMV2BqvbxKauhsEKmh16He2QpMrnUmZXFTLzRENxPA80+2TKBpNRcdx7fjSCwaUAuGP3j3YSyIJM2+efOTozLjQc+snrD1a3I4i/gSiaNZSFR1fopLCmHzxv/N+LVmT4jpTtDvG/TuSlErgF79eCdX+NPBnRXd72bODF2AImeQOFjv5op/ixQ5TXOjvDwmER0eHHjOeacDGd2WQmy6WowIDAQABAoIBAAmZg0XoT8BmuuqRRwniW0/eGdwXUR2PBeS7K6VOX9n7ytCC9OBB4hqsrYyfXUR7uqrvI4zS6j0GazVE5JTOnUn112aP4uLQ+bnpvTxNX6xg4AiaCZeQfzwcpJriVxEmwyZcPp+R9DQWOOFB1B6x1cpP0F/Kt8GpEllGykt/azewycbmN/9jGH4LLBHbMbtKoC1zZ1eqazhJW7gEJxmXb6lTCAUNvnPFz89LNmM09sF0PDAjWbsULHVOPQmheHZXZLGyyDLyafvDRrzEmykYWiNi8+dnX8BkhkUORKaVCi8uu8hjZnPB5i6OyPR5PshFsK52vGuccsk1MFEt4urbUlECgYEA2VEZ1wq2jZuWxhptPW6T5ufC0oxYzfBuOhmqcWR26HlLQvVsE34Li61+8DIwQfoLSUWQtFfSxBtwVdO/OmzO5PUitpBtg0gVt2Y3DZWLXJpsRRFmC3JL6E5DZ7GjLLavZCxRLNBbG1kyVVtzr4i2X8M22p6qwl2GJlog38CVBIcCgYEAqwBn0vAyfkS7PNYRzpZIprjbHnt+F4s41FXoq0eIvnq56DehA1DK8BQQZgrVj20Up3HlKRTEgraKSP/I37PKptQUE2jg/ju/hWkvHakZO+2Edrm7yg8qtdQtfu+AkID7Exs6X7a46PHi33PNL15d9Gzx6ASfSCmHNJbRYnxugAUCgYB8Yl4e5mPco4xl8SRLgCophMfPCUOfBBmjKaOT6YPhxeMc/SoR8hgbp387bg6PBNZG5wlPH+FkG6xtg5g1kafOBr0Kr5nvBWhgo6GpJcoxg7Wqxq2YqZ/m5DzScitKYXn8JR2FP/CVs7UKhCCv/Nkd8LdJ5H0qaKtq8jVUvH7OqwKBgFeCM5+M8CoR/keZvS8dVTyMqQWmaNaflouDEzhjuSTRJUYjAbDyrYfCnMm7jaKCTemKrZ0iVZYW2BmXXDKujWxmZ4evSkSQSuh49XWWTaWPXRRs5B75OAAo/sdQxVgtyU7zxiGpHmOHNXToi/5LqoUlI356rxB8wAY3kBt4VgwJAoGBAIJVn+PcS7dmFVtfGJvqxGzIPvEOE3PDaW2F1Xduj+ihwOkDum0/RwnyXwi06w8hwp0Pb0BGqq/mzgGmQEczYWHmwKsIU94OLPdhvG+8NhWP1Hm7x6aSmBpF1nrAsnuYHq3UlTpvXomhFh+81gLQBUc8a0Vhb6NLbeXe9tNY+dWk',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id' => '', 'mch_id' => '', 'key' => '', 'cert_client' => '', 'cert_key' => '', 'log' => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
