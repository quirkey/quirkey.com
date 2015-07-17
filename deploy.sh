#!/bin/bash

rsync -r --exclude .git . quirkey@quirkey.com:www/ -v
