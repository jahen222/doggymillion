<?php
return array(
    // set your paypal credential
    'client_id' => 'Aef5EZNysgrkPNdP-c_90zmYEVyaios4cVT_NdEjP-IHWG81fOGYEL-9pBscQlDbe8MI2k7McY2QBY8A',
    'secret' => 'EMbtM7VERdHSx7Emx6b3blaPDI469j0_3ctaIoFNU8N-mw1GvNGrhlTNGxnJzzIn3xvWQeOKDwiPIQSY',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 1000,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
