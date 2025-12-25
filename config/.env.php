<?php

return [
    'APP_SECURITY_TOKEN'                     => '2b40f2001acfe2801a272fe71f6d8edf',
    'APP_SENTRY_DSN'                         => '',
    'MYSQL_SQL_MODE'                         => '',    # only configures Doctrine Connection
    'MYSQL_OVERWRITE_SQL_MODE'               => true,  # only configures Doctrine Connection
    'LOG_WARNINGS'                           => true,  # if true, errors with warning level will be logged
    'LOG_SUPPRESSED_WARNINGS'                => false, # if false, no warnings will be logged, if the php code line contains the @-operator
    'LOG_DEPRECATED_WARNINGS'                => false, # if true, E_DEPRECATED and E_USER_DEPRECATED errors will be logged
    'SMARTY_MUTE_UNDEFINED_OR_NULL_WARNINGS' => true,  # if true, Smarty does not throw an error, if a variable does not exist
];