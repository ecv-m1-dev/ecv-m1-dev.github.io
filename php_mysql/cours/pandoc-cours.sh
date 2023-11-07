#!/bin/sh
pandoc -t revealjs -s -o index.html cours.md --highlight-style theme/highlight.theme -V theme=dracula
