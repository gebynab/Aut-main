#!/bin/bash

# Install Firefox Web Browser from Mozilla's latest builds
# URL: https://gitlab.com/e33io/scripts/-/blob/main/install-firefox.sh
# Use this script at your own risk, it will overwrite existing files!
# Run this script as a normal user (not as root user)
# This method is for the current user only, and will auto-update

mkdir -p $HOME/.local/applications
mkdir -p $HOME/.local/share/applications

wget -O firefoxsetup.tar.bz2 "https://download.mozilla.org/?product=firefox-latest&os=linux64&lang=en-US"

tar -xf firefoxsetup.tar.bz2 --directory $HOME/.local/applications

echo "[Desktop Entry] 
Name=Firefox
GenericName=Web Browser
Comment=Browse the Web
Exec=/home/$(whoami)/.local/applications/firefox/firefox %u
Icon=firefox
Terminal=false
Type=Application
MimeType=text/html;text/xml;application/xhtml+xml;application/vnd.mozilla.xul+xml;text/mml;x-scheme-handler/http;x-scheme-handler/https;
Categories=Network;WebBrowser;
Keywords=web;browser;internet;
StartupNotify=true" > $HOME/.local/share/applications/firefox.desktop

sudo ln -s $HOME/.local/applications/firefox/firefox /usr/local/bin/firefox
