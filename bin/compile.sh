#!/usr/bin/env bash

set -e

DIRECTORY=$(cd `dirname $0` && pwd)
ICONS=$DIRECTORY/../dist
RESOURCES=$DIRECTORY/../resources/svg

echo "Compiling Coreui Icons..."

for FILE in $ICONS/*; do
  FILENAME=${FILE##*/}

  if [ "$FILENAME" == ".gitignore" ]
  then
    break
  fi

  # Compile icons...
  cp $FILE $RESOURCES/${FILENAME}

  CLASS='<svg fill="currentColor" xmlns="http:\/\/www.w3.org\/2000\/svg"'
  sed -i "s/<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"32\" height=\"32\"/$CLASS/" $RESOURCES/${FILENAME}
done

echo "All done!"