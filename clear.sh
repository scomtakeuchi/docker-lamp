#!/bin/sh

MYDIR=$(cd $(dirname "$0"); pwd);

for d in mysql/data phpmyadmin/sessions; do
  #echo "cd $MYDIR/$d && find . mindepth 1 ! -name .gitkeep -print"
  #cd $MYDIR/$d && find . -mindepth 1 ! -name .gitkeep -print
  cd $MYDIR/$d && find . -mindepth 1 ! -name .gitkeep -exec rm -rfv {} \;
done;
