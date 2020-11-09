#!/usr/bin/env bash

PATH=/bin:/sbin:/usr/bin:/usr/sbin:/root
PATH=$PATH:/usr/bin:/usr/sbin:/usr/local/bin:/usr/local/sbin


php -S 0.0.0.0:8282 -t app/
