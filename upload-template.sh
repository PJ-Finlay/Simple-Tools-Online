#!/bin/bash
USER=ftpUsername
PASS=ftpPassword
HOST="server232.web-hosting.com"
LCD="~/html"
RCD="/public_html"

lftp -f "
open $HOST
user $USER $PASS
lcd $LCD
mirror --continue --reverse --delete --verbose --exclude .git --exclude todo.txt -X *.sass-cache -X *.xcf $LCD $RCD
bye
"
