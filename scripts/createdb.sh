#!/usr/bin/env bash
# -*- ENCODING: UTF-8 -*-

if [[ "$1" = "travis" ]]; then
    psql -U postgres -c "CREATE DATABASE curriculum_test;"
    psql -U postgres -c "CREATE USER curriculum PASSWORD 'curriculum' SUPERUSER;"
else
    if [[ "$1" != "test" ]]; then
        sudo -u postgres dropdb --if-exists curriculum
        sudo -u postgres dropdb --if-exists curriculum_test
        sudo -u postgres dropuser --if-exists curriculum
    fi

    sudo -u postgres psql -c "CREATE USER curriculum PASSWORD 'curriculum' SUPERUSER;"

    if [[ "$1" != "test" ]]; then
        sudo -u postgres createdb -O curriculum curriculum
    fi

    sudo -u postgres createdb -O curriculum curriculum_test

    LINE="localhost:5432:*:curriculum:curriculum"
    FILE="$HOME/.pgpass"

    if [[ ! -f "$FILE" ]]; then
        touch "$FILE"
        chmod 600 "$FILE"
    fi

    if ! grep -qsF "$LINE" "$FILE"; then
        echo "$LINE" >> "$FILE"
    fi
fi
