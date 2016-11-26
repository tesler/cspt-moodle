#!/bin/bash

rm -rf moodle moodledata
git clone --depth=1 -b MOODLE_31_STABLE git://git.moodle.org/moodle.git
mkdir moodle/lang/ru
cp config/ru/* moodle/lang/ru/
