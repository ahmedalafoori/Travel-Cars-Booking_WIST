<?php

return [



    'middleware' => [
        'auth',      
        'verified',
        'role:admin',
    ],


];
