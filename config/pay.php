<?php

return [
    'alipay' => [
        'app_id'         => '2016091800539233',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA8oWiRuULxDNErmolFXzYPp1B9wpssuwyDdxyXCsSlTjM1B7BiGsFbCp5IfGyYXeVl7zxBB7VAGnegMFQVi4tQ/iKQ7hVgesyJTKQPQdEkRNAA9nFsBzpSD3HzVfO0SLTkjEyZcRfVATdgHPNGP7PIlJDBAMP5Z/BNwo2N8AqfG2x/7lwLs+XxGiiohlykgATKq38S2iIOrOkSW/iqSZidpSgAG05DjTuSnx53xRAGYNPOO1DjH3uO4Zq0p71z9o/Y0gL29la8DcLOVxA1UHCxGNJTYXVOl27aq/cjS+uPvuZgZYfj0cVLnwZJHbSTL6XPSzAL40F/MXMANNAzl6nNQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAwQvdxq1fg08KfT87KX2IoUYT2x1zbdl0t7J9XLnoHDI2aNutdAdJ1ctGhpPBZrdVJgULRAz2psvVaH8gg2tRv3vqW2MTJHTPyksGr5UKWlRYG4HjcaYAk5HZPtMZWldSlgalueDB3RmhkrVDyaUwTrUfi4+O5iYKHSRKpblvVTjUL8eLiRMhIjktFLSVdI5OUJ9Dv+I41Hqbn9zUnEEpoez1OntnrYffz+0DZdldF/8hacvrm3yWEJnPfZlUWJfqvTu8rf70/5RTJ//ZO/r3GYURK1W857LPifHGq/Tz9bW8C0dj/jQl2QLUzGsTgY/8lTFXLa8x9IMyGzRtc96pjwIDAQABAoIBADmf/CyxViCROJVYiaWB9oYFsCmpKeqxjdjD7A4A5Jt+FaXJZYaMImsySbQkaQfrU/yMZueCYyI5GFQgFqmEIJvjNnrfITixsdE2AiHpgHSkVsSnSiiDoAps8AeD5j6EcH+eLlxFDjmczBFKEJkhuUDVajwztzlWQ5CdY7cCmow6bMwIsxK1hHHDEL42rsSWgqmXiHDnwATxEWqZkrNBy3XalaF42iuFasFrmfaoR7Fti71hgsv3zFWqONE43fvidCRJl9TNbmSMbQdLVYNWsEGcI0xY8xOpnSs3YxiZA6kXKWivp93nvFBRizHTTJAqxXt9C00RS2PfGYzkCwbt5oECgYEA3tds7tTcTkcbI2pfhlpCTEEfxeWlqWK+67iWvwtNfEewGTDSuTVANulCOVvSbXnSnfzzuGW87JBfLH54yymw04mlXQmjWwqgVJTYwlGVoYyYS7edr01NXcyJoxZltu6eOGLqRLQRqyxXGYjN44XhXTQfWTA2TSZtPsQb9bPUEEECgYEA3cV4k9blsFuWmtmehgzd+nF06vGydyyFQhCB9iYtY8m6r/1gxBU5kAbd7+Sz7WkArF87XOU8fBzi8QxfymFr9vzCxckc3WpB+qBkEoyX4Jj/f5soHY9Xu4HpMDZbox9rwUSpRmwZDfFcWHXlkt4NG4j5uHM2LPwdmazx0CIERc8CgYEAvACts7U8BIJy/+cPnm7pviG3Z6N+pzBa+M4ryBQGFFL629XYAk9N1MXojDHOj3QW4Bl3mVukD0UiNoyg5m5O87kOHTczbWzCpXlKgm6IOdo+5qqLy0kBe6BDgqczuykHrXSuRrZQrcRj23QSl+DsqFCAHiPRvDcuNaUIHbvQrsECgYEAvAilvrwTjd9qJ6tidIhOYf12w4ng5pjR9/zlJF6kV5qAdp2gQUE5yDt6S9+fCynfj0dDnvUivp0DcpwqT/8gOo9/WZG2rqlcffMmRm/8iktPPtPARKf4HBz/KYi9U+bdR0Y/PF2FNMQzpzF3UHqDpJgUG+dbxPKS6myvruhYtRMCgYEAn5MOUPQzzfPnjAwGMWnHGb5tl4uSfRW0NhgBZlQKWoV6UctDLzVbCB66AYUWDFwsqCGRxUcSQC1LfruYiYmDQdx7GPOzUzCnD8CSZ3M4i0BLNp/jriJccfEQClN8FoNH03IMa1QSHmclW352/O+VQdH4y23krFsyAPxnD22w3rc=',
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